# Sistema SISGEN LARAVEL 

A project which manage Role, Permissions and every actions of your Laravel application. A complete solution for Role based Access Control in Laravel.

**Live Demo:** http://laravel-role.herokuapp.com
```
Username - superadmin
password - 12345678
```
> **Note:** Don't try to modify the Super Admin (Role & admin) data, just for Heroku deployment.

## Requirements:
- Laravel `7.x` | `9.7`

## Versions:
- Laravel `7.x` & PHP -`7.x`

## Project Setup
Git clone -
```console
git clone https://github.com/RonaldoAmaralDev/uhlelo_sisgen.git
```

Go to project folder -
```console
cd laravel-role
```

Install Laravel Dependencies -
```console
composer install
```

Create database called - `laravel_role`

Create `.env` file by copying `.env.example` file

Generate Artisan Key (If needed) -
```console
php artisan key:generate
```

Migrate Database with seeder -
```console
php artisan migrate --seed
```

Run Project -
```php
php artisan serve
```
