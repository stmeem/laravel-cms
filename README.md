<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Laravel CMS

Content Management System developed with Laravel framework.
## Screenshots

![login](https://user-images.githubusercontent.com/79108647/203097227-4d562a65-95f4-415c-8f18-a220c2bb7fc4.PNG)

![Register](https://user-images.githubusercontent.com/79108647/203097306-801eda98-023d-422c-b72e-a7bda5ab1a93.PNG)

![dashboard_table](https://user-images.githubusercontent.com/79108647/203098543-84607dc9-5d9e-4b27-8788-72be579fa168.PNG)

## Installation

1. Clone the project

   ```
   git clone https://github.com/stmeem/laravel-cms.git laravel-cms
   ```

2. Create an empty MySQL database

3. Go to the folder application using cd command on your cmd or terminal

   ```
   cd laravel-cms
   ```
   
4. Install dependencies with [Composer](https://getcomposer.org/doc/00-intro.md)

   ```
   composer install
   ```
   
5. Copy .env.example file to .env on the root folder

   ```
   cp .env.example .env 
   ```

6. Set a new encryption key

   ```
   php artisan key:generate
   ```
   
 7. Run ```php artisan migrate ```
  
 In order to work on assets, you need to install [Node.js](http://nodejs.org)
 
  ```
   npm install
   npm run dev
   ```
Finally, run ```php artisan serve ```

Go to http://localhost:8000/!
