FROM php:8.2-apache

# Copiar el código de tu repo (Render ya hace checkout aquí)
COPY . /var/www/html/

# Copiar el script de build
COPY .render-build.sh /usr/local/bin/.render-build.sh
RUN chmod +x /usr/local/bin/.render-build.sh
RUN /usr/local/bin/.render-build.sh

# Activar mod_rewrite
RUN a2enmod rewrite

# Exponer puerto
EXPOSE 80

CMD ["apache2-foreground"]
