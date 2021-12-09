FROM php:7.2-apache
USER root

COPY ./ /var/www/html/

RUN chmod -R 777 /var/www/html/





