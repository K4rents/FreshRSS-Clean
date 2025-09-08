<?php
/**
 * FreshRSS - Constants configuration
 */

// Carpeta base del proyecto
define('BASE_PATH', __DIR__);

// Carpeta lib
define('LIB_PATH', BASE_PATH . '/lib');

// Carpeta de datos
define('DATA_PATH', BASE_PATH . '/data');

// Carpeta de logs
define('LOG_PATH', DATA_PATH . '/logs');

// Archivo de log
define('LOG_FILENAME', LOG_PATH . '/freshrss.log');

// Carpeta de usuarios
define('USERS_PATH', DATA_PATH . '/users');

// Carpeta system dentro de usuarios
define('SYSTEM_PATH', USERS_PATH . '/system');

// Carpeta temporal
define('TMP_PATH', DATA_PATH . '/tmp');

// Constante para evitar errores de syslog
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', false);
}

// Crear carpetas si no existen
$folders = [LOG_PATH, USERS_PATH, SYSTEM_PATH, TMP_PATH];
foreach ($folders as $folder) {
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }
}

// Ajustar permisos para asegurar que PHP pueda escribir
foreach ($folders as $folder) {
    if (file_exists($folder)) {
        chmod($folder, 0777);
    }
}
