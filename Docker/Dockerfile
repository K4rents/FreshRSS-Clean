FROM php:8.2-apache

# Copiar solo lo que FreshRSS necesita
COPY app/ /var/www/html/app/
COPY cli/ /var/www/html/cli/
COPY data/ /var/www/html/data/
COPY extensions/ /var/www/html/extensions/
COPY lib/ /var/www/html/lib/
COPY tests/ /var/www/html/tests/
COPY index.php /var/www/html/
COPY config.default.php /var/www/html/
COPY README.md /var/www/html/

# Ajustar permisos
RUN chown -R www-data:www-data /var/www/html/

# Exponer puerto 80
EXPOSE 80

# Iniciar Apache en primer plano
CMD ["apache2-foreground"]
