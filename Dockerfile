FROM composer

WORKDIR /app

RUN docker-php-ext-install pdo_mysql
