This is the repository for the Combat Experts Clan website

## Requirements

* PHP 7.1.3 or higher
* PHP Composer
* NodeJS
* Nginx or Apache
* MySQL, SQLite, PostgreSQL, or Microsoft SQL Server

## Installation

1. Clone the project
2. Install the project dependancies with `composer install`.
3. Install NodeJS dependancies with `npm install`.
4. Configure the application environment by copying `.env.example` to `.env` and modifiying to your needs.
5. Generate the application key with `php artisan key:generate`.
6. Run database migrations with `php artisan migrate`.