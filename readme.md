# Expedia - PHP Task

Simple site for expedia.com, which consume expedia.com API's that includes filters for Hotel reservations and releated data through requesting different parameters in the API queryString and displaying them on web page.
#### Application URL:
```sh
https://secret-harbor-15718.herokuapp.com/
```

## Site Structure:

The structure of the application is very simple and contains:

- PHP
- Laravel 5.4 Framework
- GuzzleHttp
- Bootstrap 3
- JQuery
- Blade template engine

## Dependencies:

- Heroku
- php
- Laravel Framework
- composer
- git

## Features:

- List latest offers.
- Search for offers (Destination name, Travel start/end date, Rating and more).
- Hotel details view (Pricing, Location, Description, image,...)
- Responsive site.
 
## Code Structure:

I divided the core project business into 3 main classes:
- Home Controller, *which contains the landing  page and its hotels offer list.*
- Search Controller, *which will consume the API and return the result.*
- Rest Controller, *this controller to handle all requests and return the result to other controllers.*


## Template:

I used the blade template engine, and below the main parts of the site:

- master.blade.php : *main site view that contains all page parts(header, navigation, content,  and footer).*
- one.blade.php: *Represent hotels search result and information.*
- _header.blade.php: *the header of the page.*
- _footer.blade.php: *the footer of the page.*
- _navigtion.blade.php: *the navigation of the page.*

## Site deployment / Installation:

> I assume you already have heroku account, make sure that you have PHP, Composer, and Git.
* Clone site source code for expedia application so that you have a local version of the code that you can then deploy to Heroku.
```sh 
$ git clone https://github.com/anasApp.git
$ cd php-getting-started
```
- deploy the app to Heroku
```sh 
$ heroku create
```
- Now deploy your code and open Heroku:
```sh 
$ git push heroku master
$ heroku ps:scale web=1 // to make sure that at least one instance is running
$ heroku open
```

> Visit My website. https://secret-harbor-15718.herokuapp.com/

## Issues:

> API image size.