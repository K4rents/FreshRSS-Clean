FROM php:8.2-apache

# Activar mod_rewrite (lo necesita FreshRSS)
RUN a2enmod rewrite

# Copiar el script de build
COPY .render-build.sh /usr/local/bin/.render-build.sh
RUN chmod +x /usr/local/bin/.render-build.sh

# Ejecutar el script de build
RUN /usr/local/bin/.render-build.sh

# Exponer puerto
EXPOSE 80

# Iniciar Apache
CMD ["apache2-foreground"]
