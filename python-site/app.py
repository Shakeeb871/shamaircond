"""
QuickFix Appliance Repair — Flask website
--------------------------------------------------------------------
Run karne ke liye (to run):
    pip install -r requirements.txt
    python app.py
Phir browser mein kholें: http://127.0.0.1:5000
"""
import csv
import os
import re
from datetime import datetime

from flask import (Flask, flash, redirect, render_template,
                   request, url_for)

import config

app = Flask(__name__)
# Form flash messages ke liye secret key. Production mein env var se set karein.
app.secret_key = os.environ.get("SECRET_KEY", "change-this-secret-key")

DATA_DIR = os.path.join(os.path.dirname(__file__), "data")
LEADS_FILE = os.path.join(DATA_DIR, "leads.csv")

SERVICE_NAMES = [s["title"] for s in config.SERVICES]


# Har template ko business details automatically mil jaayein.
@app.context_processor
def inject_globals():
    return {
        "biz": config.BUSINESS,
        "services": config.SERVICES,
        "now_year": datetime.now().year,
    }


@app.route("/")
def home():
    return render_template(
        "index.html",
        active="home",
        why_us=config.WHY_US,
        testimonials=config.TESTIMONIALS,
        faqs=config.FAQS,
    )


@app.route("/services")
def services():
    return render_template("services.html", active="services")


@app.route("/about")
def about():
    return render_template("about.html", active="about", why_us=config.WHY_US)


@app.route("/contact", methods=["GET", "POST"])
def contact():
    if request.method == "POST":
        form = {
            "name": request.form.get("name", "").strip(),
            "phone": request.form.get("phone", "").strip(),
            "email": request.form.get("email", "").strip(),
            "location": request.form.get("location", "").strip(),
            "service": request.form.get("service", "").strip(),
            "message": request.form.get("message", "").strip(),
        }
        # Honeypot — bots is hidden field ko bhar dete hain.
        if request.form.get("company"):
            flash("Thanks! We'll be in touch shortly.", "success")
            return redirect(url_for("contact"))

        errors = _validate(form)
        if errors:
            for e in errors:
                flash(e, "error")
            return render_template("contact.html", active="contact",
                                   faqs=config.FAQS, form=form,
                                   service_names=SERVICE_NAMES)

        _save_lead(form)
        flash("Thank you! Your request has been received — we'll reply within "
              "the hour during working times.", "success")
        return redirect(url_for("contact"))

    return render_template("contact.html", active="contact",
                           faqs=config.FAQS, form={},
                           service_names=SERVICE_NAMES)


def _validate(form):
    errors = []
    if len(form["name"]) < 2:
        errors.append("Please enter your name.")
    if not re.match(r"^[0-9 +\-()]{7,}$", form["phone"]):
        errors.append("Please enter a valid phone number.")
    if form["email"] and not re.match(r"^[^@\s]+@[^@\s]+\.[^@\s]+$", form["email"]):
        errors.append("Please enter a valid email address.")
    if not form["message"]:
        errors.append("Please add a few details about the problem.")
    return errors


def _save_lead(form):
    """Contact request ko data/leads.csv mein save karta hai."""
    os.makedirs(DATA_DIR, exist_ok=True)
    is_new = not os.path.exists(LEADS_FILE)
    with open(LEADS_FILE, "a", newline="", encoding="utf-8") as f:
        writer = csv.writer(f)
        if is_new:
            writer.writerow(["timestamp", "name", "phone", "email",
                             "location", "service", "message"])
        writer.writerow([datetime.now().isoformat(timespec="seconds"),
                         form["name"], form["phone"], form["email"],
                         form["location"], form["service"], form["message"]])


@app.errorhandler(404)
def not_found(e):
    return render_template("404.html", active=""), 404


if __name__ == "__main__":
    app.run(debug=True)
