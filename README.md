# Inventory Mate
Not only inventory management, but also a showcase of skills.

## Project description
This project is designed to showcase a portfolio of skills. While there is always room for improvement, this project serves as a demonstration of various features, with some excluded but presented elsewhere in the project. Examples include error messages styled with CSS, and more comprehensive validations.

I am not using this project to demonstrate my design skills, but rather my ability to create a functional application.

At this time, I am not using API routes, but I am using Laravel's resource routes.  
*Keep an eye out for future project that will demonstrate these skills.*

I am also not using Vue.js or React.js, but I am using Blade templates, you can finde these skills in my other projects. 
  
This project demonstrates the use of several skills from the Laravel Framework and PHP, including seeders, factories and migrations for creating and modifying tables, generating test databases using the [Faker](https://fakerphp.github.io/) library, use of Blade for template creation, and usage of Laravel components such as Artisan, middleware, controllers, models, relationships between models, validations, sessions, helpers, third-party libraries and creating routes manually as well as using the Laravel resources method.  
It also covers an understanding of the Laravel architecture and the MVC pattern.

*I am constantly working on improving this project by adding new features and updates. Please check back regularly for the latest updates.*
  
## Project installation

This project requires the following to be installed on your system:

- [PHP 8.x or higher](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/)
- [Laravel 8.x or higher](https://laravel.com/docs/8.x/installation)
- [MySQL](https://www.mysql.com/downloads/)
  
<br>

Once you have installed the above, you can clone the project to your system using the following command:

`git clone https://github.com/vsrromero/inventorymate.git`


<br>

Once the project has been cloned, you can navigate to the project directory and run the following command to install the project dependencies:

`composer install`

<br>

Create a new database in MySQL and update the .env file with the database name, username and password.

~~~
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
~~~

<br>

Run the migrations to create the tables in the database:  
  
`php artisan migrate`

<br>

Seed the database with test data:

`php artisan db:seed`

<br>

You can now run the project using the following command:

`php artisan serve`

Visit the application in your web browser at `http://localhost:8000` or at the URL provided by the `php artisan serve` command.

<br>

You can login to the application creating a new user using the following command on your terminal:

`php artisan tinker`

~~~
$user = new App\Models\User;
$user->name = 'Your Name';
$user->email = 'email@example.com';
$user->password = bcrypt('your_password');
$user->save();
~~~

<br>

Use the email and password you created to login to the application.
