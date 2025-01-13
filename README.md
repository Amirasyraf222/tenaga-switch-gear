
### Setup Instruction
- Clone project using `git clone https://github.com/Amirasyraf222/tenaga-switch-gear.git`
- Run `composer install` 
- Create database name `tenaga_switchgear` on your local
- Rename `.env.example` to `.env`
- Run `php artisan migrate` to migrate database 
- Run `php artisan db:seed --class=DatabaseSeeder` to seed the data in database
- Run `php artisan key:generate` to generate key if required
- Run `php artisan serve` to run the system

- Search `http://127.0.0.1:8000/cars` to view on the required data




