#!/usr/bin/env bash
set -o errexit

echo "🧹 Limpiando archivos temporales innecesarios..."
# Si quieres conservar tu código, NO borres /var/www/html/*
# Solo limpia caches u otras carpetas si es necesario

echo "🔑 Ajustando permisos..."
chown -R www-data:www-data /var/www/html/
