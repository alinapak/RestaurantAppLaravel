# Restaurant Creation App

## Launch
1. Install by cloning
2. Go to mySQL workbench and choose root connection
3. Create database named `restaurants` (or copy and paste command: `CREATE DATABASE restaurants;`)
4. Create `.htaccess` file in `htdocs` folder, to reach created API globaly (by typing in browser search bar `localhost/api/v1/dishes` or `localhost/api/v1/dishes`)
* Or type `php artisan serv` in command line to reach api globaly
If you will choose this variant to reach API you'll have to type in browser search bar `http://127.0.0.1:8000/api/v1/dishes` or `http://127.0.0.1:8000/api/v1/restorans`
* Then you will have to change fething url in react app also, to fetch api data