FROM php:8.2-fpm

# Install system deps
RUN apt-get update && apt-get install -y \
    nginx \
    git curl unzip libpq-dev libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Nginx config
COPY ./nginx.conf /etc/nginx/sites-available/default

EXPOSE 10000

CMD service nginx start && php-fpm
