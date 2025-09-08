<?php

if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', false);
}
/**
 * FreshRSS constants configuration
 * Ajustado para Render / Docker
 */

define('DATA_PATH', __DIR__ . '/data');          // Carpeta base de datos
define('USERS_PATH', DATA_PATH . '/users');      // Carpeta de usuarios
define('SYSTEM_PATH', USERS_PATH . '/system');   // Carpeta system dentro de usuarios
define('LOGS_PATH', DATA_PATH . '/logs');        // Carpeta de logs
define('TMP_PATH', DATA_PATH . '/tmp');          // Carpeta temporal
define('LOG_FILENAME', LOGS_PATH . '/freshrss.log'); // Archivo de log

// Crear carpetas si no existen
$folders = [
    USERS_PATH,
    SYSTEM_PATH,
    LOGS_PATH,
    TMP_PATH
];

foreach ($folders as $folder) {
    if (!file_exists($folder)) {
        mkdir($folder, 0755, true);
    }
}

// Asegurar permisos del archivo de log
if (!file_exists(LOG_FILENAME)) {
    touch(LOG_FILENAME);
    chmod(LOG_FILENAME, 0664);
}
