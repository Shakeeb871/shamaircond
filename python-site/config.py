"""
Business configuration.
--------------------------------------------------------------------
Yeh file edit kar ke poori website ki details badal sakte hain.
(Edit this file to change all business details across the site.)
"""

BUSINESS = {
    "name": "QuickFix Appliance Repair",
    "tagline": "Fast, reliable home appliance repair you can trust",
    "phone_display": "+60 11-1164 2927",
    "phone_raw": "601111642927",          # for tel: and wa.me links (no + or spaces)
    "email": "hello@quickfixappliance.com",
    "address": "Kuala Lumpur & Selangor, Malaysia",
    "hours": "Mon – Sun, 8:00 AM – 9:00 PM",
    "areas": "Kuala Lumpur, Petaling Jaya, Subang Jaya, Shah Alam, Cheras & Klang",
    "map_query": "Kuala Lumpur Malaysia",
}

# Each service shown on the Services page and home grid.
SERVICES = [
    {
        "slug": "refrigerator",
        "title": "Refrigerator Repair",
        "icon": "fridge",
        "short": "Not cooling, leaking water or making noise? We fix all fridge brands.",
        "points": ["Compressor & gas top-up", "Thermostat & sensor faults",
                   "Water leakage & blockage", "Door seal replacement"],
        "price_from": "RM 80",
    },
    {
        "slug": "washing-machine",
        "title": "Washing Machine Repair",
        "icon": "washer",
        "short": "Front load, top load and semi-auto machines repaired same day.",
        "points": ["Not spinning or draining", "Water inlet & pump faults",
                   "Drum bearing & belt", "Control board & error codes"],
        "price_from": "RM 80",
    },
    {
        "slug": "air-conditioner",
        "title": "Air Conditioner Service",
        "icon": "aircon",
        "short": "General & chemical cleaning, gas top-up, repair and installation.",
        "points": ["General & chemical wash", "Gas top-up (R22/R32/R410A)",
                   "Repair & fault finding", "Supply & installation"],
        "price_from": "RM 70",
    },
    {
        "slug": "microwave-oven",
        "title": "Microwave & Oven Repair",
        "icon": "oven",
        "short": "Microwaves, built-in ovens and cooker hoods restored to working order.",
        "points": ["Not heating / no power", "Magnetron & fuse replacement",
                   "Turntable & door switch", "Oven thermostat & element"],
        "price_from": "RM 70",
    },
    {
        "slug": "water-heater",
        "title": "Water Heater Repair",
        "icon": "heater",
        "short": "Instant and storage water heaters serviced and made safe.",
        "points": ["No hot water / tripping", "Heating element replacement",
                   "Thermostat & safety reset", "New unit installation"],
        "price_from": "RM 90",
    },
    {
        "slug": "dishwasher",
        "title": "Dishwasher Repair",
        "icon": "dishwasher",
        "short": "Drainage, leaks and cleaning performance sorted by our technicians.",
        "points": ["Not draining / leaking", "Spray arm & pump issues",
                   "Inlet valve faults", "Error code diagnosis"],
        "price_from": "RM 90",
    },
]

WHY_US = [
    {"title": "Same-Day Response", "text": "Same-day slots available across KL & Selangor when you call early."},
    {"title": "Skilled Technicians", "text": "Experienced, friendly technicians who handle every major brand."},
    {"title": "Honest Pricing", "text": "Clear, upfront quotes before any work — no hidden charges."},
    {"title": "Workmanship Warranty", "text": "Every repair is backed by our guarantee. If it's not right, we return."},
]

FAQS = [
    ("Do you offer same-day appliance repair?",
     "For most areas in KL & Selangor we can arrange a same-day visit when you reach us early in the day. Tell us your area and the problem and we'll confirm the soonest slot."),
    ("How much does a repair cost?",
     "It depends on the appliance and the fault. We always give a clear, fixed price before any work begins, so there are no surprises on the bill."),
    ("Which brands do you repair?",
     "We service all major brands including Samsung, LG, Panasonic, Daikin, Sharp, Electrolux, Midea, Hitachi and more."),
    ("Do you give a warranty?",
     "Yes. Our repairs are backed by a workmanship guarantee. If something isn't right after our visit, we come back and put it right."),
    ("Which areas do you cover?",
     "We serve Kuala Lumpur & Selangor including Petaling Jaya, Subang Jaya, Shah Alam, Cheras and Klang. Just ask about your location when you book."),
]

TESTIMONIALS = [
    {"name": "Aisyah R.", "area": "Petaling Jaya", "text": "Fridge stopped cooling at night and they came the next morning. Fixed in an hour and the price was fair."},
    {"name": "Daniel T.", "area": "Cheras", "text": "Washing machine wouldn't spin. Technician explained the problem clearly and sorted it on the spot. Highly recommend."},
    {"name": "Mei Ling", "area": "Shah Alam", "text": "Booked an aircon chemical wash for two units. Punctual, tidy and the cooling is so much better now."},
]
