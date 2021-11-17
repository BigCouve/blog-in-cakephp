FROM php:7.1-apache
RUN pecl install mcrypt 1.0.4 \
    && docker-php-ext-enable mcrypt
COPY . /var/www/html/
