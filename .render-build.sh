#!/usr/bin/env bash
set -o errexit

echo "🧹 Limpiando carpeta /var/www/html..."
rm -rf /var/www/html/*

echo "📦 Copiando archivos al contenedor..."
cp -r . /var/www/html/

echo "🔑 Ajustando permisos..."
chown -R www-data:www-data /var/www/html/

# Crear carpetas críticas
mkdir -p /var/www/html/data/users
mkdir -p /var/www/html/data/logs
mkdir -p /var/www/html/data/tmp

# Crear archivo de log vacío
touch /var/www/html/data/logs/freshrss.log

# Ajustar permisos
chmod -R 777 /var/www/html/data
chown -R www-data:www-data /var/www/html/data

echo "✅ Preparación terminada."

# Crear carpeta system dentro de users
mkdir -p /var/www/html/data/users/system

# Ajustar permisos
chmod -R 755 /var/www/html/data/users/system
chown -R www-data:www-data /var/www/html/data/users/system

