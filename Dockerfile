FROM php:8.2-apache

# Copia los archivos de tu proyecto al contenedor
COPY . /var/www/html/

# Habilita el módulo de reescritura de Apache (opcional)
RUN a2enmod rewrite
