<?php
// constants.php - FreshRSS para Render (versión completa)

// Directorio raíz de la instalación
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__);
}

// Librerías
if (!defined('LIB_PATH')) {
    define('LIB_PATH', ROOT_PATH . '/lib/');
}

// Directorio de datos
if (!defined('DATA_PATH')) {
    define('DATA_PATH', ROOT_PATH . '/data/');
}

// Directorio de logs
if (!defined('LOGS_PATH')) {
    define('LOGS_PATH', DATA_PATH . 'logs/');
}

// Archivo de logs principal
if (!defined('LOG_FILENAME')) {
    define('LOG_FILENAME', LOGS_PATH . 'freshrss.log');
}

// Directorio de usuarios
if (!defined('USERS_PATH')) {
    define('USERS_PATH', DATA_PATH . 'users/');
}

// Carpeta temporal
if (!defined('TMP_PATH')) {
    define('TMP_PATH', DATA_PATH . 'tmp/');
}

// Carpeta system dentro de cada usuario
if (!defined('SYSTEM_PATH')) {
    define('SYSTEM_PATH', USERS_PATH . 'system/');
}

// Carpeta _ para Render
if (!defined('UNDERSCORE_PATH')) {
    define('UNDERSCORE_PATH', USERS_PATH . '_/');
}

// Copiar logs a stderr (necesario para Render)
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', true);
}

// Crear directorios si no existen
foreach ([LOGS_PATH, USERS_PATH, SYSTEM_PATH, UNDERSCORE_PATH, TMP_PATH] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}
