<?php
declare(strict_types=1);

// Nombre de la aplicación
const APP_NAME = 'FreshRSS';

// Versión
const FRESHRSS_VERSION = '1.25.0';

// Carpeta raíz de la app
define('FRESHRSS_PATH', __DIR__);

// Carpeta de librerías
define('LIB_PATH', __DIR__ . '/lib');

// Carpeta de la app
define('APP_PATH', __DIR__ . '/app');

// Carpeta de datos
define('DATA_PATH', __DIR__ . '/data');

// Carpeta de extensiones
define('EXTENSIONS_PATH', __DIR__ . '/extensions');

// Carpeta de usuarios (ahora apunta al "_" que tienes)
define('USERS_PATH', DATA_PATH . '/users/_');

// Carpeta del "system namespace"
define('SYSTEM_NAMESPACE_PATH', USERS_PATH . '/system');

// Redirigir logs a STDERR para Docker
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', true);
}

// Opcional: definir ruta del log de FreshRSS
define('LOG_FILENAME', USERS_PATH . '/freshrss.log');
