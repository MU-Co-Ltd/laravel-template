FROM php:8.1-fpm
# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql \
    && docker-php-ext-install zip
# Set Composer Environment
ENV COMPOSER_ALLOW_SUPERUSER 1 \
    COMPOSER_HOME /composer
# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Set working directory
WORKDIR /var/www/html
# Install bun.sh
RUN curl -fsSL https://bun.sh/install | bash
