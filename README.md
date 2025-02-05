# 🎟️ Event Management System - Laravel

## 📖 Project Overview
This is a **Laravel-based Event Management System** that allows users to **create, manage, and book events**.  
It supports **attendees, organizers, and administrators** with different access levels.  

## 🚀 Features
✅ **User Roles** - Attendees, Organizers, and Admins  
✅ **Event Creation & Management** - Organizers can create events  
✅ **Event Registration** - Users can enroll in events  
✅ **Ticket Management** - Different ticket types for events  
✅ **Booking System** - Users can book tickets for events  
✅ **Authentication** - Secure login & registration  

---

## 🛠️ Installation Guide

### 1️⃣ **Clone the Repository**
```bash
git clone https://github.com/your-username/event-management.git
cd event-management

2️⃣ Install Dependencies

Make sure you have PHP 8+, Composer, and MySQL/PostgreSQL installed, then run:

composer install

3️⃣ Setup Environment Variables

Copy the .env.example file and rename it to .env:

cp .env.example .env

Then edit .env and set up your database:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=event_management
DB_USERNAME=root
DB_PASSWORD=

4️⃣ Generate Application Key

php artisan key:generate

5️⃣ Run Database Migrations

php artisan migrate

6️⃣ Seed the Database (Optional)

php artisan db:seed

This will populate the database with some test data.
7️⃣ Run the Laravel Development Server

php artisan serve

The app will be available at:
🔗 http://127.0.0.1:8000

🛠️ Tech Stack

    Backend: Laravel 10, PHP 8+
    Database: MySQL / PostgreSQL / SQLite
    Authentication: Laravel Sanctum / Passport (Optional)
    Frontend: (To be implemented later)

📌 Contribution Guide

Want to contribute? Follow these steps:

    Fork the repository
    Create a new branch (git checkout -b feature-branch)
    Commit your changes (git commit -m "Added a new feature")
    Push to the branch (git push origin feature-branch)
    Open a Pull Request

🛠️ Troubleshooting

If you face issues with migrations, run:

php artisan migrate:refresh --seed

If .env changes are not working, clear the cache:

php artisan config:clear
