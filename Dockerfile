FROM php:7.2-fpm-alpine

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

FROM mysql:5.7
# Add a database
ENV MYSQL_DATABASE banco_dany
