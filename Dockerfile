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

WORKDIR /app/bimbalacom

COPY --from=builder /app /app/bimbalacom
COPY --from=builder /usr/bin/composer /usr/bin/composer
COPY --from=builder /usr/local/lib/php/extensions/no-debug-non-zts-20200930/pdo_mysql.so /usr/local/lib/php/extensions/no-debug-non-zts-20200930

COPY . /app/bimbalacom

RUN docker-php-ext-enable pdo_mysql && \
    composer dump-autoload --optimize --classmap-authoritative && \
    chown -R www-data:www-data /app/bimbalacom


ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions gd exif
