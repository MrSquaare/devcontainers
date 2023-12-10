FROM php:7.3-apache-bullseye

RUN apt-get update
RUN apt-get install -y git zip unzip libzip-dev zlib1g-dev
RUN apt-get clean

RUN docker-php-ext-install zip
RUN docker-php-ext-enable zip

RUN pecl install xdebug-3.1.6
RUN docker-php-ext-enable xdebug

COPY ./xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

COPY --from=composer/composer:2-bin /composer /usr/bin/composer
