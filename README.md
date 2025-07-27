## RSS feed aggregator

A comprehensive RSS feed reader application built with [Laravel](http://www.laravel.com) that aggregates and displays RSS feeds from multiple sources. This project serves as a centralized hub for consuming news and content from various RSS feeds.

This RSS feed aggregator was developed to replace and enhance the original feed system from [andreafiori.net](http://www.andreafiori.net). The application currently stores RSS feed configurations in PHP arrays (migrated from the original implementation) and supports multiple newsgroups and content sources. What started as a simple newsgroup reader has evolved into a comprehensive feed aggregation platform.

- Multi-source RSS aggregation: Supports numerous RSS feeds and newsgroups
- Leverages Laravel's robust framework for reliable performance
- [SimplePie])(https://simplepie.org) integration for efficient RSS parsing and XML handling
- Migrated content from the original source implementation

## Prerequisites

- PHP 8.0 or higher
- Web server (Apache/Nginx)
- Composer
- Active internet connection

## Setup Instructions

Install Laravel and dependencies:

    composer install

## Running the Application

    cd <your-project-directory>
    php artisan 

## Run unit tests

     php artisan test

Generate test coverage (Xdebug PHP extension required):

    php artisan test --coverage

The application will be available at [http://localhost:8000](http://localhost:8000)

### Technologies used

- [PHP](https://www,php.net) - hypertext processor.
- [Laravel](https://www,laravel.com) - the web framework for artisans.
- [SimplePie])(https://simplepie.org) PHP RSS reader and XML parser.

### Laravel maintenance  commands

    php artisan route:cache
    php artisan route:clear

    php artisan view:clear

    php artisan config:clear
    php artisan config:cache

    php artisan cache:clear

Optimize application performance

    php artisan optimize

Clear all cached bootstrap files

    php artisan optimize:clear

Cache configuration for better performance

    php artisan config:cache

### Roadmap & Future Improvements

User Interface Enhancements

- Layout improvements: Change RSS news display from box layout to streamlined list format
- Loading experience: Add spinner loader while RSS XML is being parsed
- Dark mode: Implement dark theme option for better user experience
- Search functionality: Add autocomplete search for feeds and newsgroups
- Navigation: Implement breadcrumb navigation system

Technical Improvements

- Feed validation: Add RSS feed URL checker and validation
- Database migration: Migrate from PHP arrays to database with proper models and seeders
- Admin interface: Develop administrative area for feed management
- Performance optimization: Implement HTML, CSS, and JavaScript minification

User Experience

- Custom favicon: Add branded favicon
- Error handling: Create custom 404 error page
- Responsive design: Ensure mobile-friendly interface
- Sidebar hidden on desktop, hamburger menu for mobile

This project is actively maintained and continuously improved. The current version successfully aggregates multiple RSS feeds and provides a clean interface for content consumption. Future updates will focus on database integration, enhanced user interface, and administrative capabilities.

## Author

- [AndreaFiori.net](https://www.andreafiori.net) - full-stack developer
