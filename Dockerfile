FROM nazmulpcc/php:8.0-cli as builder

WORKDIR /app

COPY composer.* /app/
COPY package.json package-lock.json /app/

RUN wget https://getcomposer.org/composer-2.phar -O /usr/bin/composer && \
    chmod +x /usr/bin/composer && \
    composer install \
        --ignore-platform-reqs \
        --no-ansi \
        --no-autoloader \
        --no-dev \
        --no-interaction \
        --no-scripts


FROM nazmulpcc/php:8.0-fpm

WORKDIR /app/bimbalacom

COPY --from=builder /app /app/bimbalacom
COPY --from=builder /usr/bin/composer /usr/bin/composer
COPY . /app/bimbalacom

RUN composer dump-autoload --optimize --classmap-authoritative && \
    chown -R www-data:www-data /app/bimbalacom
