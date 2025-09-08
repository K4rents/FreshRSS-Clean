<?php
declare(strict_types=1);

// Nombre de la aplicación
const APP_NAME = 'FreshRSS';
const FRESHRSS_VERSION = '1.25.0';

// Rutas principales
define('FRESHRSS_PATH', __DIR__);
define('LIB_PATH', __DIR__ . '/lib');
define('APP_PATH', __DIR__ . '/app');
define('DATA_PATH', __DIR__ . '/data');
define('EXTENSIONS_PATH', __DIR__ . '/extensions');

// Rutas críticas para funcionamiento
define('USERS_PATH', DATA_PATH . '/users');
define('LOGS_PATH', DATA_PATH . '/logs');
define('TMP_PATH', DATA_PATH . '/tmp');

// Logging
define('LOG_FILENAME', LOGS_PATH . '/freshrss.log');

// Redirigir logs a STDERR para Docker
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', true);
}
