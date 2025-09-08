#!/usr/bin/env bash
set -o errexit

echo "🧹 Limpiando carpeta /var/www/html..."
rm -rf /var/www/html/*

echo "📦 Copiando archivos al contenedor..."
cp -r . /var/www/html/

echo "🔑 Ajustando permisos..."
chown -R www-data:www-data /var/www/html/

# Crear carpetas críticas dentro de data
mkdir -p /var/www/html/data/users
mkdir -p /var/www/html/data/logs
mkdir -p /var/www/html/data/tmp
mkdir -p /var/www/html/data/users/system

# Ajustar permisos
chmod -R 777 /var/www/html/data/users /var/www/html/data/logs /var/www/html/data/tmp
chmod -R 755 /var/www/html/data/users/system
chown -R www-data:www-data /var/www/html/data
