<h3>FullStack</h3>
<h4>RestApi Example with Database</h4>

### How to start 
1.Clone the project:

    git clone https://github.com/Abdelrhman-Allam/Laravel-RestApi.git
    cd Laravel-RestApi
    composer install 
    php artidan generate:key
    
2.configure datebase on .env file
3.run migrations to create tables

    php artisan migrate
   
4.list routes
   
    php artisan route:list

5. start Postman 

    `GET` => `/api/v1/tasks`
    `GET` => `/api/v1/tasks/1`
    `POST` => `/api/v1/tasks`
