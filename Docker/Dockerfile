FROM php:8.2-apache

# Copiar todo FreshRSS al contenedor
COPY . /var/www/html/

# Habilitar mod_rewrite y ajustar permisos
RUN a2enmod rewrite \
    && chown -R www-data:www-data /var/www/html/

# Exponer puerto 80
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
