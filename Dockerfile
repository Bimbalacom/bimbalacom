FROM php:8.0-cli-alpine as builder

ARG APP_ENV="production"

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

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions gd exif


FROM php:8.0-fpm-alpine

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

WORKDIR /app/bimbalacom

COPY --from=builder /app /app/bimbalacom
COPY --from=builder /usr/bin/composer /usr/bin/composer
COPY --from=builder /usr/local/lib/php/extensions/no-debug-non-zts-20200930/pdo_mysql.so /usr/local/lib/php/extensions/no-debug-non-zts-20200930

COPY . /app/bimbalacom

COPY /php/php.ini "$PHP_INI_DIR/"
# COPY ../php/php-fpm.conf "$PHP_INI_DIR/"


RUN docker-php-ext-enable pdo_mysql && \
    composer dump-autoload --optimize --classmap-authoritative && \
    chown -R www-data:www-data /app/bimbalacom

####
# Temporary solution - not optimized at all . Without it, it dosn't build at all.
RUN apk add --update linux-headers 
RUN apk add autoconf \
    nano

RUN apk --no-cache add pcre-dev ${PHPIZE_DEPS} \ 
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apk del pcre-dev ${PHPIZE_DEPS}

# RUN pecl install redis-5.3.6 \
#     && docker-php-ext-enable redis
####

RUN if [ "$APP_ENV" = "production" ] ; then\
    RUN docker-php-ext-enable opcache;\
    COPY /php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini;\
    fi

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions gd exif imagick
