#Program & Database Design Challenge

This is coding test assigned after a job application. Brief was:
>A database stores information about its members. Each member can be associated with 1 or more school.
You should build a demo that allows someone to add a new member with the fields “Name”, “Email Address” and "School" (selected from a list). The demo should display all members for a selected school.   
You may use any freely available programming language and modules (although be aware that the primary language we use is PHP). We will want to run and connect to your code on our own machines so if there are any unusual pre-requisites please document them.

My demo adds above mentioned functionality as well as adding new schools etc. Uses Slim framework borrowing other external packages such as amazing Laravels illuminate/database. With time a lot more can be achieved especially on the frontend with the plethora of packages/libraries out there

## Getting up and running

Program depends on composer for pulling in php packages and npm for node packages

First install composer and npm packages:

```bash
$ npm install
$ composer install
```

The application uses sqlite for database storage. Run the migrate.php script I wrote which basically creates a database.sqlite file, creates tables using Illuminate\Database\Capsule\Manager, and finally seeds the 'schools' table with initial values

```bash
$ php migrate.php
```

Now run webpack for the app styling. With more time I intended to build more functionality with jquery, axios, ES6...
```bash
$ npm run build
```

Now everythings set. Boot up a php server specifying the public folder to be the document root for the web server
```bash
$ php -S localhost:8000 -t public
```

Go to "http://localhost:8000" in your browser to view app
