Laravel Struct
=================

Description
-------------------
Laravel Application with Admin Panel to manage employees time sheet and Report generation. <br />
Version Laravel: 5.4 [https://laravel.com/docs/5.4/](https://laravel.com/docs/5.4/) <br />
SMTP Email: mailtrap.io [https://mailtrap.io/](https://mailtrap.io/)

Instructions
-------------------
1- Install composer: [https://getcomposer.org/](https://getcomposer.org/) <br /><br />
2- Create database MySQL called: 'laravelstruct' <br /><br />
3- Copy and paste name .env.example and rename .env <br /><br />
4- Modify .env file with your MySQL Credentials (DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD) <br /><br />
5- Modify .env file with your Mailtrap Credentials (MAIL_DRIVER, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD, MAIL_ENCRYPTION [optional]) <br /><br />
6- On the root folder run the following commands: <br />
    + `composer install` <br />
    + `php artisan key:generate` <br />
    + `php artisan migrate` <br />
    + `php artisan db:seed` <br />
    + `php artisan serve` <br />

Features
-------------------
+ Basic Login (email and password)  <br />
+ Send password reset link <br />
+ Reset Password <br />
