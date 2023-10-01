FROM php:8.0.0rc1-fpm

# Install system dependencies
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y  && apt-get install -y git

# Install PHP extensions
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli \
 apt-get install -y mysql-client

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www
