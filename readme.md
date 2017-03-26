Facebook настроен на адрес сайта http://localhost 

Для работы laravel нужно php > 5.6 и mysql2

еще библиотеки: php7.0 php7.0-mcrypt php7.0-gd php7.0-zip apache2 libapache2-mod-php7.0

1. Скачать код так чтобы на localhost открывалась папка 'public'

пример настройки apache2: https://www.howtoforge.com/tutorial/install-laravel-on-ubuntu-for-apache/

обязательно надо 'mod_rewrite'

2. Установить composer

https://getcomposer.org/download/

3. Сделать composer install в основной папке
4. Изменить настройки пользователя БД в файле '.env'
5. Создать БД с названием 'light_it'
6. Выполнить php artisan migrate
7. Отрыть страницу http://localhost/