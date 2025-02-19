FROM php:8.2-fpm

# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql opcache

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем Laravel
WORKDIR /var/www
COPY . .

# Устанавливаем зависимости через Composer
RUN composer install --no-dev --optimize-autoloader

# Устанавливаем владельца и права для storage
RUN chown -R www-data:www-data /var/www/storage && chmod -R 775 /var/www/storage

# Генерируем ключ приложения Laravel и очищаем кэш
RUN php artisan key:generate && \
    php artisan cache:clear && \
    php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear

# Запускаем PHP-FPM
CMD ["php-fpm"]
