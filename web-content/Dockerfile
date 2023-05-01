FROM php:8.1-apache
COPY ./index.php /var/www/html/
COPY . /var/www/html

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN chown -R www-data:www-data /var/www/html
RUN chmod o-wx /var/www/html/index.php

EXPOSE 80
EXPOSE 7077