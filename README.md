Instalation:

- clone or download this repo to your folder
- run composer install in terminal
- copy .env.example and rename it as .env
- run php artisan key:generate
- set up your db in .env
- run php artisan migrate:fresh --seed
- run php artisan serve