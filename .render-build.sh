#!/usr/bin/env bash
set -o errexit

echo "🧹 Limpiando carpeta /var/www/html..."
rm -rf /var/www/html/*

echo "📦 Copiando archivos al contenedor..."
cp -r . /var/www/html/

echo "🔑 Ajustando permisos..."
chown -R www-data:www-data /var/www/html/
