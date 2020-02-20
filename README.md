## About
Informatin about school


## How to Install

### Server Requirements

This application can be installed on local server and online server with these specifications :

1. PHP 7.1.3 (and meet [Laravel 5.8 server requirements](https://laravel.com/docs/5.8#server-requirements)),
2. MySQL or MariaDB database,

### Installation Steps

1. Clone the repo : `git clone https://github.com/ekqiplur/informasi_sekolah.git`
2. `cd informasi_sekokalah`
3. `composer install`
4. `cp .env.example .env`
5. `php artisan key:generate`
6. Create **database on MySQL**
7. **Set database credentials** on `.env` file
8. `php artisan migrate`
9. `php artisan storage:link`
10. `php artisan serve`
11. Done (Register as new user to start using the application).
