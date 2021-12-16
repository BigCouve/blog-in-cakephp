FROM php:7.2-apache
USER root

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql

COPY ./ /var/www/html/

RUN chmod -R 777 /var/www/html/





