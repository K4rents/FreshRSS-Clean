<?php
declare(strict_types=1);

// Nombre de la aplicación
const APP_NAME = 'FreshRSS';

// Versión
const FRESHRSS_VERSION = '1.25.0';

// Carpetas base
define('FRESHRSS_PATH', __DIR__);
define('DATA_PATH', __DIR__ . '/data');
define('APP_PATH', __DIR__ . '/app');
define('LIB_PATH', __DIR__ . '/lib');
define('EXTENSIONS_PATH', __DIR__ . '/extensions');

// Carpetas críticas
define('USERS_PATH', DATA_PATH . '/users');
define('LOGS_PATH', DATA_PATH . '/logs');
define('TMP_PATH', DATA_PATH . '/tmp');

// Logging (archivo de log directo)
define('LOG_FILENAME', LOGS_PATH . '/freshrss.log');

// Redirigir logs a STDERR (útil en Docker)
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', true);
}
