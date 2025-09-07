<?php
declare(strict_types=1);

// Nombre de la aplicación
const APP_NAME = 'FreshRSS';
const FRESHRSS_VERSION = '1.25.0';

// Rutas de carpetas
define('DATA_PATH', __DIR__);              // carpeta data
define('LIB_PATH', __DIR__ . '/../lib');   // librerías
define('APP_PATH', __DIR__ . '/../app');   // app
define('EXTENSIONS_PATH', __DIR__ . '/../extensions'); // extensiones

// Carpetas críticas
define('USERS_PATH', DATA_PATH . '/users'); // usuarios
define('LOGS_PATH', DATA_PATH . '/logs');   // logs
define('TMP_PATH', DATA_PATH . '/tmp');     // temporales

// Redirigir logs a STDERR para Docker
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', true);
}
