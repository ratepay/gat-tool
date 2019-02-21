# RatePAY GmbH Give & Take Tool

Bewertungstool für unsere Give & Take Vorträge. Hier könnt ihr eure Stimme zu den Talks abgeben und das Ergebnis einsehen.

## Prerequisites
* A Server running
* MySQL Database running


## Installation
The installation is fairly simple and can be done in 2 ways.

### Use Docker Container
1. Clone the repository
2. Copy .env.example to .env and fill in DB connection
3. Build and start the docker container
4. Log into the container
5. Run `composer install`
6. Run `php artisan storage:link`
7. Run `php artisan migrate`

### Manually
1. Set up a server with PHP7 running
2. Install all needed PHP extensions (php7.0-gd, php7.0-curl, php7.0-imap, php7.0-mysql ,php7.0-mbstring, php7.0-xml, php7.0-zip, php7.0-bcmath, php7.0-soap, php7.0-intl, php7.0-readline)
3. Install composer
4. Clone the repository
5. Run `composer install`
6. Copy .env.example to .env and fill in DB connection
7. Run `php artisan storage:link`
8. Run `php artisan migrate`


## Run the app
After installation open the app in a web browser. The first time opening it, it will automatically redirect you to an installation process.
Fill in the apps name and choose a company logo to upload. After that you are asked to register an admin user.
Completing the setup you can use the app for voting presentations.

### Login
If you want to delete a presentation you must be logged in. Just open a web browser and append `/login` to your domain and you can log in.

### Register
If you want to register another admin user, just append `/register` to your domain and you can register a new user.