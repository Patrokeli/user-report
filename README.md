# User Report Project (Laravel)


A simple Laravel project to register users and generate reports of all registered users. Users can be viewed in a table and exported as PDF.

## Features

- User registration & login (via Laravel Breeze or UI)

- Display all registered users in a table

- Download a PDF report of all users

- Optional browser print functionality

## Installation

Clone the repository:
```
git clone <your-repo-url>
cd user-report
```

Install dependencies:
```
composer install
npm install && npm run dev
```

Set up environment:
```
cp .env.example .env
php artisan key:generate
```

Configure database settings in .env

Run migrations:
```
php artisan migrate
```

Start the development server:
```
php artisan serve
```
Routes

- /register – Register a new user

- /login – Login

- /user-report – View all registered users

- /user-report/pdf – Download PDF report

PDF Export

This project uses barryvdh/laravel-dompdf
 to generate PDF reports of registered users.

Usage

Register a few users.

Visit /user-report to see the user list.

Click Download PDF to export the report.
