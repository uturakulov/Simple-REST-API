## Laravel

Here are the instructions:

- clone repository
- run composer install
- run composer update
- run php artisan key:generate
- copy everything inside .env.example to .env
- connect to your database in .env
- run php artisan migrate
- run php artisan serve

API list:

- GET: posts - retrieve everything
- GET: posts?field_name=argument - retrieve with filters
- POST: posts - save
- POST: posts/{id} - update
- GET: posts/{id} - delete

