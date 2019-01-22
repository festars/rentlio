# RapidRenter (Formerly Rentlio)

RapidRenter provides an intuitive way to help tenants and landlords interact, providing features such as automated payments, listings and property management, and integration with home automation tools. 

## Key Features
  - Username and password app-contained auth system
  - ACL system to distinguish different user types on front-end and back-end with convenient helpers
  - Stripe Connect implementation to facilitate tenants paying landlords directly, with the application taking a 1% cut. Uses Stripe PHP library and Guzzle to directly interface with Stripe 
  - Integration with home automation tools, inclduing a sample home automation feature (proof of concept for remotely opening and closing a door) via the web interface
  - Video of automation proof-of-concept in action: https://www.youtube.com/watch?v=fDKia11T-ik


## Future Plans
  - Filtering of listings search results and placement on maps, such as using Google Maps API 
  - Support for more home automation tools 
  - Further roles introduced, such as contractors/realtors and others that may have a relationship to properties and listings 

### Installation and Usage
This project was made using the Laravel PHP web framework. To run this  project, a database  and webserver will be needed. A Stripe account with test API keys is also necessary. 
Database credentials are entered in the .env file. A .env example file, .env.example, is included as a sample.
After git clone:
```sh
composer install
cp .env.example .env
php artisan key:generate
```
After DB and Stripe credentials setup in .env: 
```sh
php artisan migrate
php artisan db:seed
```

### Footer
This project was made in 24hrs for HackED 2019 @ UofA. 
Project members:
* Mehrshad Sahebsara
* Ankush Sharma 
* Sarthak Dhingra





