<h3>FullStack</h3>
<h4>RestApi Example with Database</h4>

### How to start 
1.Clone the project:

    git clone https://github.com/Abdelrhman-Allam/Laravel-RestApi.git
    cd Laravel-RestApi
    composer install 
    php artidan generate:key
    
2.configure datebase on `.env` file with your database 

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=restapi
    DB_USERNAME=root
    DB_PASSWORD=root
    
    
3.run migrations to create tables tasks `database/migrations/2017_03_26_084239_create_table_tasks.php`

    php artisan migrate
   
4.list routes
   
    php artisan route:list

5. start Postman 

    `GET` => `/api/v1/tasks`;
    `GET` => `/api/v1/tasks/1`;
    `POST` => `/api/v1/tasks`;
