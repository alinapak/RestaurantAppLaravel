# Restaurant Creation App

## Description
This is Restaurant App backend part. Restaurants and Dishes API was created by using Laravel library.
## Launch
1. Install by cloning: type `git clone https://github.com/alinapak/RestaurantAppLaravel.git` in `htdocs` folder;
2. Go to mySQL workbench and choose root connection;
3. Create database named `restaurants` (or copy and paste command: `CREATE DATABASE restaurants;`);
4. Open project and launch composer command (if globally: `php composer install`, if localy: `php <path to composer.phar> install`);
5. Create  `.env` file by copying `.env.exampl`e content with command line `cp .env.example .env`;
6. In `.env.` file replace DATABASE=laravel to DATABASE=restaurants';
7. Type in command line `php artisan key:generate` to generate app key.
8. Migrate into database by typing in command line `php artisan:migrate`;
9. Seed some data into database by typing command `php artisand db:seed`;
10. Create `.htaccess` file in `htdocs` folder, to reach created API globaly (by typing in browser search bar `localhost/api/v1/restaurants` or `localhost/api/v1/dishes`)
* Or type `php artisan serv` in command line to reach api globaly
If you will choose this variant to reach API you'll have to type in browser search bar `http://127.0.0.1:8000/api/v1/dishes` or `http://127.0.0.1:8000/api/v1/restorans`
* Then you will have to change fething url in react app also, to fetch api data
Now you can check API by typing in browser search bar chosen way of url.

## Author
Alina Pakamorytė, https://www.linkedin.com/in/alina-pakamoryt%C4%97-73a66377/
