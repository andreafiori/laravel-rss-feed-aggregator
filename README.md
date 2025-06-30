## RSS feed aggregator

An RSS feed reader developed with Laravel.
News are multi-language.
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
<!-- - [Vite](https://vite.dev/) frontend tool. -->
- [SimplePie])(https://simplepie.org) PHP RSS reader and XML parser.

### Laravel cleaning commands

    php artisan route:cache
    php artisan view:clear

    php artisan config:clear
    php artisan cache:clear
    php artisan config:cache

### TODO

- Searh feed or newsgroup with autocomplete
- Feed tags?
- Dark mode toggle check
- Spinner\Loader waiting until RSS xml is parsed
- Feeds URLs checker
- Favicon
- Breadcrumb
- 404 page
- Migration from array to database with models and seeds
- Admin area
- Minify HTML,CSS,JS
- Unit tests

## Author

- [AndreaFiori.net](https://www.andreafiori.net) - full-stack developer
