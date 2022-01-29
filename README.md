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
    $ cd model-usage
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

0. Initial setup on amarzon linux 2 EC2 (Optional)
    ```
    $ sudo su
    $ yum update -y
    $ yum install -y docker
    $ service docker start
    $ yum update -y
    $ yum install git -y
    $ curl -L https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m) -o /usr/local/bin/docker-compose
    $ chmod +x /usr/local/bin/docker-compose
    $ ln -s /usr/local/bin/docker-compose /usr/bin/docker-compose
    ```

1. Clone this repository
    ```
    $ git clone https://github.com/RidmaK/Runner.git
    ```
2. Edit configuration files.
    ```
    $ cd model-usage
    $ cp .env.example .env
    $ nano .env
    ```
3. Run docker containers.
    ```
    $ docker-compose up -d
    ```
4. Install backend depedencies and front end depedencies.
    ```
    $ docker exec -it backend composer update
    ```
5. Database setup and insert fake data
    ```
    $ docker exec -it backend php artisan migrate:fresh --seed
    ```
6. Generate an application key and create a passport key
    ```
    $ docker exec -it backend php artisan key:generate
    $ docker exec -it backend php artisan passport:install
    ```
7. Give permission to storage folder
    ```
    $ docker exec -it backend chmod -R 777 storage
    ```


When using the Docker container, use 9090 as the port, you can change it in docker compose file

