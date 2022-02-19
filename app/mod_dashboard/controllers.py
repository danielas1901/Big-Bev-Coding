from flask import render_template, redirect, Blueprint, url_for

# Import user session management helpers
from flask_login import login_required, current_user

# Import the database object from the main app module
from app import db

# Define the blueprint: 'auth', set its url prefix: app.url/auth
mod_dash = Blueprint('mod_dash', __name__, url_prefix='/')

@mod_dash.route('/main')
@mod_dash.route('/home')
@mod_dash.route('/')
#@login_required
def main_page():
    return render_template("main.html")

@mod_dash.route('/second')
def second_page():
    return render_template("second.html")

@mod_dash.route('/about_us')
def about_us_page():
    return render_template("about.html")