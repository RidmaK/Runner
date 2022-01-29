# RUNNERS API


## Installation

Here you can set up this project in two ways

### 01. Normal process

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
    $ php artisan passport:install
    ```
6. Serve the project
    ```
    $ php artisan serve
    ```

###  02. Run in a Docker container

1. Clone this repository
    ```
    $ git clone https://github.com/RidmaK/Runner.git
    ```
2. Edit configuration files.
    ```
    $ cd Runner
    $ cp .env.example .env
    $ nano .env
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


When using the Docker container, use 7780 as the port, you can change it in docker compose file

