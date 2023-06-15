FROM php:8.0-cli-alpine as builder

ARG APP_ENV="production"

# Everything is at one place
# Commenting out for future use.
# ENV PHP_INI_DIR /usr/local/etc/php

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

## Essential: Set the timezone
RUN apk add --no-cache tzdata
ENV TZ=Europe/Sofia

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
    unzip \
    git \
    oniguruma-dev \
    curl \
    supervisor \
    # svgo
    nodejs \
    npm

RUN npm i -g svgo

# dependencies required for running "phpize"
# these get automatically installed and removed by "docker-php-ext-*" (unless they're already installed)
RUN apk add --no-cache \
    $PHPIZE_DEPS

RUN if [ "$APP_ENV" = "production" ] ; then\
    RUN docker-php-ext-enable opcache;\
    fi

# Installing Redis Extension
RUN apk add autoconf && pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis && apk del autoconf


RUN docker-php-ext-install pdo_mysql bcmath mbstring zip exif pcntl xml
RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd

# Clear instalation cache
RUN rm -rf /var/lib/apt/lists/*

# Enabling OPcache and JIT. Will be moved to php.ini
# set recommended PHP.ini settings
# see https://secure.php.net/manual/en/opcache.installation.php
COPY php/opcache-recommended.ini /usr/local/etc/php/conf.d/opcache-recommended.ini

# Configure supervisor
RUN mkdir -p /etc/supervisor.d/
RUN rm  -f /etc/supervisor.d/supervisord.ini
COPY php/supervisord.ini /etc/supervisor.d/supervisord.ini

# Setup logs
RUN mkdir -p /var/log/php; \
    chown -R www-data: /var/log/php;

# Copying PHP conf file
COPY php/php.ini /usr/local/etc/php/php.ini

WORKDIR /app/bimbalacom

COPY --from=builder /app /app/bimbalacom
COPY --from=builder /usr/bin/composer /usr/bin/composer

COPY . /app/bimbalacom

RUN composer dump-autoload --optimize --classmap-authoritative

RUN php artisan horizon:publish

RUN chown -R www-data:www-data /app/bimbalacom
RUN chown 755 /app/bimbalacom/storage  /app/bimbalacom/bootstrap/cache

# Run the Laravel Task Scheduler
RUN echo "* * * * * cd /app/bimbalacom && php artisan schedule:run >> /var/log/bimbalacom-schedule 2>&1" > /etc/crontabs/root

# Set the default editor
ENV EDITOR=nano

CMD supervisord -c /etc/supervisor.d/supervisord.ini & \
    crond && \
    php-fpm -F -R
