FROM php:8.2-apache

# Copiar todo FreshRSS al contenedor
COPY . /var/www/html/

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html/ \
    && a2enmod rewrite

# Exponer puerto 80
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]

