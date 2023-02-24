FROM php:7.4-fpm
# Add maintainer information
LABEL maintainer="tamphitruong@gmail.com"
# Copy composer.lock and composer.json
# COPY composer.lock composer.json /var/www/html

# Set working directory
WORKDIR /var/www/html/pos
# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
# RUN docker-php-ext-install mysqlnd
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo
# RUN docker-php-ext-install mbstring
RUN docker-php-ext-install zip
RUN docker-php-ext-install exif
RUN docker-php-ext-install pcntl
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# Copy existing application directory contents
# Copy existing application directory permissions
COPY --chown=www-data:www-data ./src /var/www/html/pos
# Change current user to www
USER www-data
#
RUN chmod -R 777 /var/www/html/pos

RUN sudo systemctl restart nginx
# Expose port 9000 and start php-fpm server
EXPOSE 9000 9001 80 443 30001
CMD ["php-fpm"]