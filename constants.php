<?php
// constants.php - FreshRSS mínimo para Render

// Directorio raíz de la instalación
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', __DIR__);
}

// Directorio de la librería
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

// Directorio de usuarios
if (!defined('USERS_PATH')) {
    define('USERS_PATH', DATA_PATH . 'users/');
}

// Directorio temporal
if (!defined('TMP_PATH')) {
    define('TMP_PATH', DATA_PATH . 'tmp/');
}

// Directorio system dentro de cada usuario
if (!defined('SYSTEM_PATH')) {
    define('SYSTEM_PATH', USERS_PATH . 'system/');
}

// Copiar logs al stderr (necesario para Render)
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', true);
}

// Asegurar que existan los directorios críticos
foreach ([LOGS_PATH, USERS_PATH, SYSTEM_PATH, TMP_PATH] as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}
