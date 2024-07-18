# FROM php:8.1-apache
FROM php:8-fpm
# FROM php:7.4-apache

# FROM php:8-apache-bullseye
RUN docker-php-ext-install pdo pdo_mysql

# RUN docker-php-ext-install mysqli pdo pdo_mysql intl && docker-php-ext-enable mysqli pdo pdo_mysql intl
# RUN apt update && apt upgrade -y

# COPY ./src /var/www/html
# EXPOSE 80