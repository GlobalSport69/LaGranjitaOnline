FROM php:8-apache
# COPY test/ /var/www/html/

# RUN apt-get -y update && apt-get -y install vim
# RUN docker-php-ext-install pdo pdo_mysql mysql mysqli

# ENV APACHE_DOCUMENT_ROOT /var/www/html/public
# Declare an environment variable with a default value for changing Apache's document root
# We will override this in docker-compose.yml

RUN apt-get -y update && apt-get -y install vim
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite