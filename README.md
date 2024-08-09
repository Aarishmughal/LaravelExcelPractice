# Laravel Excel Handler
## Setup a New Laravel Project 
Create a new laravel Project as usual using
```sh
laravel new
```
## Create Appropriate routing
Make needed routes to `show` `add` and `edit` routes. *For Now*
### `web.php`
```sh
web.php
```

## Create User Controller 
Create a controller to handle operations by using the command
```sh
php artisan make:controller UserController
```
## Make appropriate methods for CRUD
Make primary methods that are required in a CRUD application such as
### `store`
```sh
code here
```
### `update`
```sh
code here 
```
### `delete`
```sh
code here
```

## Create Views
Make Appropriate Blade views for the completion of your CRUD app

## Basic CRUD app ready
Since now we have our CRUD application ready, we move onto Installing package `Laravel Excel`

## Install Laravel Excel Package 
We'll install Laravel Excel into our Laravel project by using the command
```sh
composer require 
```
This command will automatically publish all the required package files aswell.

## Create Import/Export Classes for User Model
Once the package is installed, we'll have two new php make directives for our laravel application.
`php aritsan make:import` and `php artisan make:export`.
Both these are added with the package automatically.

## Import Class
Use the following command in the terminal to make an import class for our User Model.
```sh
php artisan make:import UsersImport --model=User
```
This class will handle all the operations regarding Importing Data from an Excel file to the database.

## Export Class
Similar to import class, we'll make an export class aswell by using
```sh
php artisan make:export UsersExport --model=User
```
This class will handle all the Export operations that will responsible for Exporting data from the database to an Excel File.

## Code Import/Export Methods
Once we have classes in the `app` directory, we'll move towards customizing these imports and exports.
Place the following code in the **Import** class.
```sh
UsersImport.php
```
Similarly for the **Export** class.
```sh
UsersExport.php
```

## Create Routes for Import and Export operations 
In the `web.php` file, add new routes for the import and export operations.
```sh
Code here
```

## Excel Handler is ready
At this point, your Excel File handling app in laravel is complete. It can read from Excel files and **by default stores that information to the database.** Our next step is to add the ability to send emails from within the app.
---
