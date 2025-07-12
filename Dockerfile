FROM php:8.2-cli

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    libzip-dev \
    nano \
    libcurl4-openssl-dev \
    libpq-dev \
    libxml2 \
    libsqlite3-dev \
    libssl-dev \
    libxslt-dev \
    libffi-dev \
    libmcrypt-dev \
    default-mysql-client

# Installer les extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

CMD php artisan serve --host=0.0.0.0 --port=8000