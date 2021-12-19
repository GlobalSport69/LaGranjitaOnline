FROM php:8-apache

RUN apt-get -y update && apt-get -y install vim
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite