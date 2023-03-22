FROM php:fpm
COPY php.ini /usr/local/etc/php/

RUN apt-get update && \
    apt-get install -y && \
    docker-php-ext-install pdo_mysql