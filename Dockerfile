FROM php:8.0-cli-alpine as builder

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
    # svgo
    nodejs \
    npm

RUN npm i -g svgo

RUN docker-php-ext-install pdo_mysql bcmath mbstring zip exif pcntl xml
RUN docker-php-ext-configure gd
RUN docker-php-ext-install gd

WORKDIR /app/bimbalacom

COPY --from=builder /app /app/bimbalacom
COPY --from=builder /usr/bin/composer /usr/bin/composer

COPY . /app/bimbalacom

RUN composer dump-autoload --optimize --classmap-authoritative

RUN chown -R www-data:www-data /app/bimbalacom 
RUN chown 755 /app/bimbalacom/storage  /app/bimbalacom/bootstrap/cache

