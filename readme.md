 

project setup-

step 1- clone project repository

step 2- run "cp .env.example .env" for generate .env file

step 3- run "php artisan key:generate" for generate key in .env file

step 4- run "composer update" command in project folder 

step 5- create new database with (incident) name

step 6- update .env file according to your database username & password

step 7- Run  php artisan migrate:fresh --seed

step 8- For Run test case "vendor/bin/phpunit" 




