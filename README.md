## Subscription app

 - To install dependencies
 You need to composer installed, after installing composer

```
composer install

```
which will install all the dependencies in the composer.json

Add the mail service credentials in the .env file to be able to send mails

Then to add the database tables
```
php artisan migrate

```

- There is a seed file to seed the domain with data, to add the data 
```
php artisan db:seed --class=DomainSeeder
```

- To start the Laravel app
```
php artisan serve

```
will start the laravel server



<br>

# To send mails using the CLI

```
php artisan email:send

```
