copy .env.example .env
##
SET ADMIN_PASSWD

##
php artisan key:generate

##
php artisan migrate&&php artisan db:seed
