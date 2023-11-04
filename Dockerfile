FROM php:8.1-fpm

LABEL maintainer="Pablo Dobón <dbn000@gmail.com>"

RUN apt-get clean
RUN apt-get update && apt-get install -y \
    	git \
    	zip \
    	unzip

# Install composer.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala la extensión Xdebug.
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host = host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Setup working directory.
WORKDIR /app