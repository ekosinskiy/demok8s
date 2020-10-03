FROM php:7-apache
ADD index.php /var/www/html/index.php
RUN no| pecl install redis
RUN docker-php-ext-enable redis
WORKDIR /var/www/html
