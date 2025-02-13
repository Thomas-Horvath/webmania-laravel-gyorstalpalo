# Apache + PHP 8.3 alapú image
FROM php:8.3-apache

# Munka könyvtár beállítása
WORKDIR /var/www/html

# Laravel függőségek telepítése
RUN apt-get update && apt-get install -y \
    libpng-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-install pdo_mysql

# Composer telepítése
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Apache beállítása
RUN a2enmod rewrite

# Laravel fájlok másolása a konténerbe (de bind mount-tal is összekötöd majd)
COPY . /var/www/html

# Jogosultságok beállítása
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Port megnyitása
EXPOSE 80
