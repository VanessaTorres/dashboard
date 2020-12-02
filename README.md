#Tener varios host locales:
https://victorroblesweb.es/2016/03/26/crear-varios-hosts-virtuales-en-wampserver/

Git:
git init 
git config --global user.name "nombre usuario"
git config --global user.email "email usuario"
git remote add origin //LINK SSH
git pull origin
git checkout dev

Comandos Para Iniciar el proyecto:
php artisan key:generate
composer update 

#problemas corriendo los seed
php artisan migrate:reset
php artisan migrate
composer dumpautoload
php artisan db:seed 


#Modificacion para el funcionamiento adecuado del modulo Roles
Agregar esta funcion en el archivo de vendor/spatie/laravel-permission/src/models Spatie\Permission\Models\Permission
public function modulo()
    {
        return $this->belongsTo('App\Modulo');
    }


# Credenciales user default
email: admin@gmail.com
password: admin

# Crear migration rename colum 
composer require doctrine/dbal

# Correr seeders
php artisan db:seed
php artisan db:seed --class=UsersTableSeeder

#Reiniciar contadores en las tablas
ALTER SEQUENCE departamentos_id_seq RESTART WITH 1; 

#Borrar cache si se hace un cambio en el archivo .env
php artisan config:cache;
php artisan config:clear;

php artisan storage:link


#Correr migraciones en el creador de clientes
php artisan migrate --database=pgsql
php artisan migrate:reset --database=pgsql
php artisan db:seed --class=DatabaseSeeder --database=pgsql

#Borra cache larvel permission -- se debe correr cade vez que se crea un cliente
php artisan cache:forget spatie.permission.cache