Requirements :
Php 8.0 +
Composer
Xampp
Laravel 9

Instalation :
Clone the project
Open terminal and type composer update or composer install (if not working type composer install --ignore-platform-reqs)
Copy .env.example and paste here, rename .env.example.copy to .env
Configure your database connection
Run "php artisan key:generate" and "php artisan config:clear"
Run "php artisan migrate" and "php artisan db:seed" to generate table and insert default user
Run "php artisan serve"
Open the browser and type localhost:8000