# STEP SETUP.
composer install
##
copy .env.example .env
##
SET ADMIN_PASSWD

##
php artisan key:generate

##
php artisan migrate&&php artisan db:seed

##
yarn install

##
yarn dev


#### login
ssh seiwa@203.151.171.156
password:admin@spl

###
cd /var/www/html/teach

### git pull
git pull

