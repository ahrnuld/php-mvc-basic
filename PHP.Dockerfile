FROM php:fpm

RUN docker-php-ext-install pdo pdo_mysql
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# RUN pecl install xdebug && docker-php-ext-enable xdebug