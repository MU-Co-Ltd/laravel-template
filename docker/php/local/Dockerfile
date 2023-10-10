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
# Get latest Node.js
COPY --from=node:latest /usr/local/bin /usr/local/bin
COPY --from=node:latest /usr/local/lib /usr/local/lib
# remove `yarn` binary
RUN rm /usr/local/bin/yarn && rm /usr/local/bin/yarnpkg
# setup `yarn` command
RUN npm install -g yarn
