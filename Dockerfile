FROM php:8.2-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copia el código fuente al contenedor
COPY . /var/www/html

# Da permisos y habilita mod_rewrite
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Expone el puerto 80
EXPOSE 80

# Comando de inicio
CMD ["apache2-foreground"]