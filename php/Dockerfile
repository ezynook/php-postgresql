FROM php:8.0-apache

WORKDIR /var/www/html
RUN apt-get update -y && apt-get install -y \
    vim net-tools libpq-dev git libssl-dev libonig-dev
RUN docker-php-ext-install mbstring \
    && a2enmod rewrite && a2enmod headers \
    && docker-php-ext-install pgsql 
COPY ./php.ini /usr/local/etc/php/php.ini

RUN cd ~ \
    && curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && HASH=`curl -sS https://composer.github.io/installer.sig` \
    && php -r "if (hash_file('SHA384', 'composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN composer require ramsey/uuid

EXPOSE 80 443