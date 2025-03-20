FROM php:8.2-cli

# Instalacja rozszerzeń PHP jeśli potrzeba
RUN apt-get update && apt-get install -y git zip unzip \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

WORKDIR /app

# Instalacja Symfony MakerBundle od razu po uruchomieniu kontenera
CMD composer require symfony/maker-bundle --dev && php -S 0.0.0.0:8000 -t public
