# Hart-Challenge
Coding challenge for Hart Solutions. Creating a simple user registration page that connects to a database to store and retrieve user info. Will allow for users to comment on one another's pages, and allows for sharing of pictures in future iterations.

### Installation

Navigate to the root project folder in a terminal window and run ```composer install``` to grab all the required dependencies

Once that is ready to go, enter ```php artisan serve``` to run the webserver locally and navigate in a browser to ```localhost:8000```, these default settings can be changed in ```app/config/app.php```

```app/config/database.php``` currently houses the database info, and the app is set to use MySQL as its database server, fire up a local mysql instance ```mysql.server start```
>database.php is currently set to allow root as the login with no password for rapid testing locally on a non-production server, change accordingly if you have created a user with write privileges and intend to add to an existing setup

Create a database ```uStore``` and run the command ```php artisan migrate``` to create the proper tables 

To seed dummy data into the database, run ```php artisan db:seed``` and it will fill up some random data for comments and users

####TODO
Link up comment system to user home page
Include photo sharing upload/download
