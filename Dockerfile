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
RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

ENV XDEBUG_CONFIG="remote_host=host.docker.internal"

# Setup working directory.
WORKDIR /app