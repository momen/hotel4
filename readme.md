# Hotel Destinations

Hotel destinations list are getting populated from REST API and allow searching on name, city, date range and price range.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Server Requirements ###

```
* PHP >= 7.0.0
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
```
### Test Environment by Developer ###
```
* Distributor ID:	Ubuntu
* Description:	Ubuntu 14.04.5 LTS
* Release:	14.04
* Codename:	trusty
```
### Installing
A step by step series of examples that tell you have to get a development env running

* Clone the repository to your development machine.
* Install dependencies: $ composer install [Composer](https://github.com/composer/composer)
* Copy env.example into .env file for environment setting [Environmental Configuration](https://laravel.com/docs/master/configuration)
* Generating new application key using following command `$ php artisan key:generate`

### How to run application ###

```
* Browse your application directory from Terminal window
* Run command to start application `php artisan serve`
* Default application URL will be http://localhost:8000 or http://127.0.0.1:8000

```
### Application Functionalities ###

```
* Hotel destinations list populating using datatable with sorting and paging feature
* Search by Name and Destination
* Search by Date Range
* Search by Price Range

```
### How to run unit test ###

```
* Command to run unit test `./vendor/bin/phpunit`
* Validate API response object
* Validate API structure

```