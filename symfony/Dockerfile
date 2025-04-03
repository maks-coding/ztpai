FROM php:8.2-cli

# Instalacja rozszerzeń + Composer
RUN apt-get update && apt-get install -y \
    git zip unzip libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

WORKDIR /app

CMD composer require symfony/maker-bundle --dev && php -S 0.0.0.0:8000 -t public
