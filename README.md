# Girls Go Geek Blog
An awesome blogging platform with tech related posts that are meant to empower women.
An authenticated user can read, create and update blog posts  accompanied by a Rest API for retrieving all user posts. It also has some filtering capabilities

## Requirements

<ul>
<li>Laravel Version 8.83.5</li>
<li>PHP 8.1.3 or higher</li>
<li>Node 14.9.1</li>
</ul>

## Usage
Setting up your development environment on your local machine:

```
git clone git@github.com:natashamwangi/girls-go-geek.git

cd girls-go-geek

cp .env.example .env

composer install

php artisan key:generate

php artisan cache:clear && php artisan config:clear

php artisan serve
```


## Before starting
Create a database

```
mysql
create database girls_go_geek;
exit;
```

Setup your database credentials in the .env file

```
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=girls_go_geek
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables

```
php artisan migrate
```
