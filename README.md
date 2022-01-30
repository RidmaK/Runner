# RUNNERS API


## Installation

Here you can set up this project in two ways


###  01. Run in a Docker container

1. Clone this repository
    ```
    $ git clone https://github.com/RidmaK/Runner.git
    ```
2. Edit configuration files.
    ```
    $ cd Runner
    $ cp .env.example .env
    $ nano .env
    
    replase below 
    
    DB_CONNECTION=mysql
    DB_HOST=database
    DB_PORT=3306
    DB_DATABASE=runner
    DB_USERNAME=root
    DB_PASSWORD=root
    ```
3. Run docker containers.
    ```
    $ cd docker
    $ docker-compose up -d
    ```
4. Install backend depedencies and front end depedencies.
    ```
    $ docker exec -it con-runner composer install
    ```
5. config cache
    ```
    $ docker exec -it con-runner php artisan config:cache
    
    ```
6. Create mysql database
    ```
    $ docker exec con-mysql mysql -u root -proot -e 'CREATE DATABASE runner'
    
    ```
7. Database setup and insert fake data
    ```
    $ docker exec -it con-runner php artisan migrate:fresh --seed
    ```
8. Generate an application key and create a passport key
    ```
    $ docker exec -it con-runner php artisan key:generate
    ```
9. Give permission to storage folder
    ```
    $ docker exec -it con-runner chmod -R 777 storage
    ```
### Testing
    
     phpmyadmin
      http://localhost:7781/

      Postman testing URL
      http://localhost:7780/api/v1/runner/10/form-data
    

### 02. Normal process

1. Clone this repository
    ```
    $ git clone https://github.com/RidmaK/Runner.git 
    ```
2. Install backend depedencies and front end depedencies.
    ```
    $ cd Runner
    $ composer install
    ```
3. Edit configuration files.
    ```
    $ cp .env.example .env
    $ nano .env
    ```
4. Database setup and insert fake data
    ```
    $ php artisan migrate:fresh --seed
    ```
5. Generate an application key and create a passport key
    ```
    $ php artisan key:generate
    ```
6. Serve the project
    ```
    $ php artisan serve
    ```
### Testing
    
    $ Postman testing URL
       http://127.0.0.1:8000/api/v1/runner/10/form-data
    


When using the Docker container, use 7780 as the port, you can change it in docker compose file

