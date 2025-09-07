<?php
declare(strict_types=1);

// Nombre de la aplicación
const APP_NAME = 'FreshRSS';

// Versión
const FRESHRSS_VERSION = '1.25.0';

// Rutas
define('FRESHRSS_PATH', __DIR__);
define('LIB_PATH', __DIR__ . '/lib');
define('APP_PATH', __DIR__ . '/app');
define('DATA_PATH', __DIR__ . '/data');
define('EXTENSIONS_PATH', __DIR__ . '/extensions');

// Definir COPY_SYSLOG_TO_STDERR para compatibilidad Docker/PHP 8.2
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', 0);
}
