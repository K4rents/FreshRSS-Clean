<?php
declare(strict_types=1);

// Nombre de la aplicación
const APP_NAME = 'FreshRSS';

// Versión
const FRESHRSS_VERSION = '1.25.0';

// Rutas de carpetas
define('FRESHRSS_PATH', __DIR__ . '/../app'); // o ruta correcta
define('LIB_PATH', __DIR__ . '/../lib');
define('APP_PATH', __DIR__ . '/../app');
define('DATA_PATH', __DIR__); // data está en /var/www/html/data
define('EXTENSIONS_PATH', __DIR__ . '/../extensions');

// Carpeta de usuarios (muy importante)
define('USERS_PATH', DATA_PATH . '/users');

// Carpeta de logs y temporales
define('LOGS_PATH', DATA_PATH . '/logs');
define('TMP_PATH', DATA_PATH . '/tmp');

// Redirigir logs a STDERR para Docker
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', true);
}
