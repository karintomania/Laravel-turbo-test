# Laravel Turbo Test

## Clone the project 
```
git clone https://github.com/karintomania/Laravel-turbo-test.git && cd Laravel-turbo-test.git
```

## Run Docker container
``` 
docker-compose up -d
```

run command inside the container
```
cd /var/www/html
composer install
touch database/database.sqlite
cp .env.example /.env
php artisan migrate
php artisan key:generate
```



The test project is available on the URL below:
http://localhost/


