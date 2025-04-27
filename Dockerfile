FROM php:8.2-apache

# Instala as extensões necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql
