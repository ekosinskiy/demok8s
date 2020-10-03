FROM php:7-cli
ADD index.php /var/www/html/index.php
RUN no| pecl install redis
RUN docker-php-ext-enable redis
WORKDIR /var/www/html
CMD ["/usr/local/bin/php","/var/www/html/index.php"]
