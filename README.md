# installing Laravel

1. Update ubuntu

        sudo apt update && sudo apt upgrade -y 

2. install php composer and necessary php modules

        sudo apt install php php-bcmath php-mbstring php-xml php-zip composer 

3. install laravel installer

        composer require laravel/installer

4. create new laravel project

        ~/.config/composer/vendor/bin/laravel new laravel

5. go into project directory

        cd laravel

6. start php development server

        php artisan serve
