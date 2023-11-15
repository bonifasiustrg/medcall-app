<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Cashy
~
This laravel project also implementing:
- Arsitektur MVC (Model-View-Controller)
- Login Authentication and Token Bearer for protecting the route using Laravel Sanctum

### Get Start with This Project
Clone this project
```git
git clone https://github.com/bonifasiustrg/CashyBackend
```

Open Terminal
```bash
cd <Cloned Repo Directory>
```

#### Run this if you're using composer as project installer
install composer & depedencies
```git
composer install
```

You can also try another approach based on the documentation: https://laravel.com/docs/8.x/installation

### Running migrations (load the database)
- Duplicate .env.example file and rename it .env
- On line: DB_DATABASE=laravel
  Replace 'laravel' with your local database, you can create new database
- Run this command
```git
php artisan migrate
```

### How to run web backend?
- Generate app key
```git
php artisan key:generate
``` 
- Running server
```git
php artisan serve
```
