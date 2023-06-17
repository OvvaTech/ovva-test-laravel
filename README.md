<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to run this project?

1. Download and Install [Docker](https://docs.docker.com/engine/install/).
2. At the command prompt run:
   ```bash
   docker-compose up -d
   ```
3. Create a copy of the .env file and set these values:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=laravel_db
   DB_USERNAME=root
   DB_PASSWORD=root
   ```
4. Go to the app container and run:
   ```bash
   composer install
   php artisan key:generate
   php artisan migrate
   ```
5. Go to the npm container and run:
   ```bash
   npm install
   npm run dev
   ```
6. The server is available at:
   ```bash
   http://localhost:8098/
   http://127.0.0.1:8098/
   ```
7. You can connect to the database locally at:
   ```bash
   127.0.0.1:33061
   ```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
