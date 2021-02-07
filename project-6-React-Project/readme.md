The Backend folder has Laravel version 6 in it, to use it just run (composer install) then install Ruby and run (Gem install mailcatcher).
Next copy the .env.example file and rename it it .env and change the DB_NAME to the name you desire.
after doing all of the above run Xampp, Wamp, Lamp. 
Then go to the phpmyadmin and create a new database and name it the same as the name you put in .env
run (php artisan migrate).
After completeing these steps
Simply open 2 terminals and run (php artisan serve) on the first terminal, and on the second (mailcatcher).

After installing the required packages for Laravel
Go to Front end folder, it has the React Project in it.. 
Run (npm install) then (npm start).
