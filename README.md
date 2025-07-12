## RSS feed aggregator

An RSS feed reader developed with Laravel.
RSS are stored in PHP array because they were migrated from my original andreafiori.net. I started with some newsgroups but now I have so many.

## Installation

Install Laravel and dependencies:

    composer install

## Run the application

    cd <your-project-directory>
    php artisan serve

### Technologies

- [PHP](https://www,php.net) - hypertext processor.
- [Laravel](https://www,laravel.com) - the web framework for artisans.
- [SimplePie])(https://simplepie.org) PHP RSS reader and XML parser.

### Laravel cleaning commands

    php artisan route:cache
    php artisan route:clear
    php artisan view:clear

    php artisan config:clear
    php artisan cache:clear
    php artisan config:cache
    
    php artisan optimize
    php artisan optimize:clear
    php artisan config:cache

### TODO

- Spinner Loader waiting until RSS xml is parsed
- Dark mode
- Searh feed or newsgroup with autocomplete
- Feeds URLs checker
- Breadcrumb
- Favicon
- 404 page
- Migration from array to database with models and seeds
- Admin area
- Minify HTML,CSS,JS
- Unit tests

## Author

- [AndreaFiori.net](https://www.andreafiori.net) - full-stack developer
