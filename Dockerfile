FROM php:8.0-cli-alpine as builder

ARG APP_ENV="production"

# Everything is at one place
ENV PHP_INI_DIR /usr/local/etc/php

# dependencies required for running "phpize"
# these get automatically installed and removed by "docker-php-ext-*" (unless they're already installed)
ENV PHPIZE_DEPS \
    autoconf \
    dpkg-dev dpkg \
    file \
    g++ \
    gcc \
    libc-dev \
    make \
    pkgconf \
    re2c

WORKDIR /app

COPY composer.* /app/
COPY package.json package-lock.json /app/

RUN docker-php-ext-install pdo_mysql && \
    wget https://getcomposer.org/composer-2.phar -O /usr/bin/composer && \
    chmod +x /usr/bin/composer && \
    composer install \
    --ignore-platform-reqs \
    --no-ansi \
    --no-autoloader \
    --no-dev \
    --no-interaction \
    --no-scripts



FROM php:8.0-fpm-alpine

RUN apk update && apk add \
    build-base \
    freetype-dev \
    libjpeg-turbo-dev \
    libpng-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    nano \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    oniguruma-dev \
    curl \
    supervisor \ 
    # svgo
    nodejs \
    npm

RUN npm i -g svgo

RUN if [ "$APP_ENV" = "production" ] ; then\
    RUN docker-php-ext-enable opcache;\
    fi

# install redis extension
RUN pecl install redis

RUN docker-php-ext-install pdo_mysql bcmath mbstring zip exif pcntl xml
RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd

# Configure PHP
RUN mkdir -p /run/php/
RUN touch /run/php/php8.0-fpm.pid

COPY .dc/php-fpm.conf /etc/php8/php-fpm.conf
COPY .dc/php.ini-production /etc/php8/php.ini

# COPY /dc/php.ini "$PHP_INI_DIR/"
# COPY ../dc/php-fpm.conf "$PHP_INI_DIR/"

# Configure supervisor
RUN mkdir -p /etc/supervisor.d/
COPY .dc/supervisord.ini /etc/supervisor.d/supervisord.ini

WORKDIR /app/bimbalacom

COPY --from=builder /app /app/bimbalacom
COPY --from=builder /usr/bin/composer /usr/bin/composer

COPY . /app/bimbalacom

RUN composer dump-autoload --optimize --classmap-authoritative

RUN chown -R www-data:www-data /app/bimbalacom 
RUN chown 755 /app/bimbalacom/storage  /app/bimbalacom/bootstrap/cache