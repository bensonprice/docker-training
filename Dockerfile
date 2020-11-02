FROM php:7.4-apache
RUN apt-get update -y \
   && apt-get install -y \
      zlib1g-dev \
      libzip-dev \
      libxml2-dev \
      libpng-dev \
   && apt-get clean -y \
   && docker-php-ext-install soap 
RUN docker-php-ext-install pdo zip pdo_mysql gd
RUN pecl install xdebug && docker-php-ext-enable xdebug