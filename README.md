# imageresize
Laravel 8 Image Resize with

1. https://github.com/lohamedeveloper/imageresize.git

2. cd imageresize
3. composer install ou composer update
4. cp .env.example .env
5. php artisan key:generate
6. criei seu banco de dados 
7. configure seus dados de banco de dados no arquivo .env
8. php artisan serve 

# No caso de erro:
Laravel Intervention Image GD library extension

Caso esteja usando o sistema operaciona windows, busque na php do seu servidor web o arquivo php.ini e abra

Em seguida procura a linha ";#extension=php_gd2.dll" altere para ;extension=php_gd2.dll

