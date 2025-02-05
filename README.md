<p align="center" color="red"><b> 🎟️ Event Management System - Laravel</b></p>

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

\t\t\tInstall Dependencies
Make sure you have PHP 8+, Composer, and MySQL/PostgreSQL installed, then run:
```bash
composer install

\t\t\tThen edit .env and set up your database:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=event_management
DB_USERNAME=root
DB_PASSWORD=

\t\t\tGenerate Application Key
```bash
php artisan key:generate

\t\t\tRun Database Migrations
```bash
php artisan migrate

\t\t\tSeed the Database (Optional)
```bash
php artisan db:seed

\t\t\tRun the Laravel Development Server
```bash
php artisan serve

The app will be available at:
🔗 http://127.0.0.1:8000


\t\t\t\t🛠️ Tech Stack
    Backend: Laravel 10, PHP 8+
    Database: MySQL / PostgreSQL / SQLite
    Authentication: Laravel Sanctum / Passport (Optional)
    Frontend: (To be implemented later)

\t\t\t\t📌 Contribution Guide
Want to contribute? Follow these steps:
    Fork the repository
    Create a new branch (git checkout -b feature-branch)
    Commit your changes (git commit -m "Added a new feature")
    Push to the branch (git push origin feature-branch)
    Open a Pull Request

\t\t\t🛠️ Troubleshooting
If you face issues with migrations, run:
php artisan migrate:refresh --seed

If .env changes are not working, clear the cache:
php artisan config:clear
