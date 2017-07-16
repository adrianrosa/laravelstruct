Laravel Struct
=================

Description
-------------------
Laravel Application with Admin Panel to manage employees time sheet and Report generation. <br />
Version Laravel: 5.4 [https://laravel.com/docs/5.4/ link](https://laravel.com/docs/5.4/) <br />
SMTP Email: mailtrap.io [https://mailtrap.io/ link](https://mailtrap.io/)

Instructions
-------------------
1- Install composer: [https://getcomposer.org/ link](https://getcomposer.org/) <br />
2- Create database MySQL called: 'laravelstruct' <br />
3- Modify .env file with your MySQL Credentials (DB_HOST, DB_PORT, DB_USERNAME, DB_PASSWORD) <br />
4- Modify .env file with your Mailtrap Credentials (MAIL_DRIVER, MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD, MAIL_ENCRYPTION [optional]) <br />
5- On the root folder run the following commands: <br />
    > a) `php artisan key:generate` <br />
    > b) `php artisan migrate` <br />
    > c) `php artisan serve` <br />

Features
-------------------
+ Basic Login (email and password)  <br />
+ Send password reset link <br />
+ Reset Password <br />