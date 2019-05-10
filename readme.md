# Assignment 2

#### Requirements

-   XAMPP
-   Composer

#### Setup

1. Launch XAMPP and start Apache and MySQL.
2. Navigate to http://localhost/phpmyadmin and create a database with a name of your choice.
3. Create a .env file from the .env.example file.
4. Enter the name of your created database at DB_DATABASE.
5. Enter username and password for your database at DB_USERNAME and DB_password

#### Install dependencies

```
composer install
```

#### Create migrations and seeds for database

```
php artisan migrate:refresh --seed
```

#### Start

```
php -S localhost:8000 -t public
```
