<?php
declare(strict_types=1);

// Nombre de la aplicación
const APP_NAME = 'FreshRSS';

// Versión (ajústala según la release que uses)
const FRESHRSS_VERSION = '1.25.0';

// Carpeta de la app
define('FRESHRSS_PATH', __DIR__);

// Carpeta de la librería
define('LIB_PATH', __DIR__ . '/lib');

// Carpeta de la app
define('APP_PATH', __DIR__ . '/app');

// Carpeta de datos
define('DATA_PATH', __DIR__ . '/data');

// Carpeta de extensiones
define('EXTENSIONS_PATH', __DIR__ . '/extensions');

// Compatibilidad con PHP 8.2: redirigir logs a STDERR para Docker
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', 0); // <<--- Cambiado de true a 0
}
