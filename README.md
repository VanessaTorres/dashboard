# Install App
Config Archivo .env
php artisan key:generate
composer install
php artisan migrate
composer dumpautoload
php artisan db:seed 

# Credenciales user default
email: admin@gmail.com
password: admin


