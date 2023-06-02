## BACKEND MY-NOTE
<p><b>
Back End My Note Menggunakan Framework Laravel
</b></p>

## Setup
- buka direktori project backend ini di terminal.
- ketikan command : cp .env.example .env (copy paste file .env.example)
- buat database 
- ganti value DB_DATABASE di .env sesuai denagan nama database yang dibuat 

Lalu ketik command dibawah ini
- composer install
- php artisan key:generate (generate app key)
- php artisan optimize:clear 
- php artisan migrate (migrasi database)
- php artisan db:seed 
