<h1 align="center">
  <br>
  <a href="http://www.amitmerchant.com/electron-markdownify"><img src="https://github.com/bonifasiustrg/medcall-app/assets/52784596/7a6666fd-70f2-4786-b934-6a4090b524d8" alt="MedCall" width="200"></a>
  <br>
  MedCall
  <br>
</h1>
<h4 align="center">Website Sistem Reservasi dan Antrian Klinik</h4>

## Key Features

* Pendaftaran reservasi klinik
* Sistem Antrian
  - ambil antrian (pasien/admin)
  - Mulai dan lanjutkan antrian (admin only)
* User management (admin only)
* Print data antrian dan user (admin only)
* Login/registration scheme

~
This laravel project also implementing:
- Arsitektur MVC (Model-View-Controller)

TODO:
- Login Authentication and Token Bearer for protecting the route using Laravel Sanctum
- Number Queueing for patient
- Reservation
- Urgent Call
- Appointement Reminder

### Get Start with This Project
Clone this project
```git
git clone https://github.com/bonifasiustrg/medcall-app
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
                                                            
## Preview
![image](https://github.com/bonifasiustrg/medcall-app/assets/52784596/cd2ec043-db38-4913-b32f-1f11926df767)
![image](https://github.com/bonifasiustrg/medcall-app/assets/52784596/8f3c3699-9e3f-4b11-a788-8bc1a2a7aea6)
![image](https://github.com/bonifasiustrg/medcall-app/assets/52784596/f12cca91-0504-4df4-8a23-c2828a7bfcb3)
![image](https://github.com/bonifasiustrg/medcall-app/assets/52784596/56071823-d5b5-4f41-a10d-6c95bc5695af)
![image](https://github.com/bonifasiustrg/medcall-app/assets/52784596/dcc46b35-61c5-4e59-9a4f-ce675448be91)
![image](https://github.com/bonifasiustrg/medcall-app/assets/52784596/1fb11a79-2ca9-4f2d-a5b3-5a152190accc)
![image](https://github.com/bonifasiustrg/medcall-app/assets/52784596/5fb46898-f56d-4670-920e-2c47e3e61dce)
![Screenshot from 2024-01-05 13-10-41](https://github.com/bonifasiustrg/medcall-app/assets/52784596/8e901277-df5e-4b8e-83b6-1245b776d471)


## Contributors ✨
Thanks goes to these wonderful people that have contributed in this project

