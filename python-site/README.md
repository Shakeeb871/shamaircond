# QuickFix Appliance Repair — Flask Website

Ek mukammal, professional, mobile-friendly business website jo **Python (Flask)** par bani hai.
Aapke client ke **home appliance repair** business ke liye — fridge, washing machine,
air-conditioner, oven, water heater aur dishwasher repair services ke saath.

> **Live PHP site:** repo root par `index.php` waghera ek alag (Sham Aircond) PHP site hai.
> Yeh Python site us se bilkul alag `python-site/` folder mein hai — dono ek doosre ko affect nahi karte.

---

## ✨ Features

- **5 pages:** Home, Services, About, Contact + custom 404
- **Working contact form** — validation, spam honeypot, aur har request `data/leads.csv` mein save
- **Fully responsive** — phone, tablet aur desktop par sahi dikhti hai
- **WhatsApp + Call buttons** har jagah, plus floating WhatsApp button
- **SEO-ready** titles & meta descriptions
- **One file se customizable** — saari business details `config.py` mein hain

---

## 🚀 Chalane ka tareeqa (How to run)

```bash
cd python-site

# (recommended) virtual environment
python -m venv venv
source venv/bin/activate        # Windows: venv\Scripts\activate

pip install -r requirements.txt
python app.py
```

Phir browser mein kholें: **http://127.0.0.1:5000**

---

## ✏️ Apne client ki details kaise daalें

Sirf **`config.py`** file edit karें — poori website apne aap update ho jaayegi:

| Cheez | Kahan badlें |
|------|--------------|
| Business ka naam, phone, email, address, hours | `BUSINESS` dictionary |
| Services (title, price, details) | `SERVICES` list |
| "Why us" points | `WHY_US` list |
| FAQ sawal-jawab | `FAQS` list |
| Customer reviews | `TESTIMONIALS` list |

> Brand initials (header/footer ka "QF" badge) `templates/base.html` mein hain — chahें to badal lें.

---

## 📥 Contact form ki requests kahan jaati hain?

Har submitted form **`data/leads.csv`** mein save hoti hai (timestamp, naam, phone, email,
area, service, message ke saath). Is file ko Excel/Google Sheets mein khol kar leads dekh sakte hain.

> Email pe notification chahiye? Bata dें — `app.py` ke `_save_lead()` mein SMTP/email
> bhejne ka code add kar dunga.

---

## ☁️ Production par live karna (deploy)

```bash
pip install -r requirements.txt
gunicorn -w 3 -b 0.0.0.0:8000 app:app
```

Behtar security ke liye production mein secret key set karें:

```bash
export SECRET_KEY="koi-lamba-random-string"
```

Render, Railway, PythonAnywhere ya kisi bhi VPS par aasani se chal jaati hai.

---

## 📁 Folder structure

```
python-site/
├── app.py              # Flask app + routes + form handling
├── config.py           # 👈 SAARI business details yahan
├── requirements.txt
├── data/leads.csv      # contact form submissions (auto-generated)
├── static/
│   ├── css/style.css
│   └── js/main.js
└── templates/
    ├── base.html       # shared layout (header/footer/nav)
    ├── _icons.html     # SVG icon macros
    ├── index.html      # home
    ├── services.html
    ├── about.html
    ├── contact.html
    └── 404.html
```
