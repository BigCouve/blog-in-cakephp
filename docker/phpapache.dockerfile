FROM php:7.2-apache
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql 
RUN chmod -R 777 ./
COPY ./ /var/www/html/




