<?php
declare(strict_types=1);

/**
 * FreshRSS constants.php listo para Render
 * Crea las carpetas necesarias y define todas las constantes críticas
 */

// ----------------------------
// Paths
// ----------------------------
define('BASE_PATH', __DIR__);                 // Ruta base de FreshRSS
define('LIB_PATH', BASE_PATH . '/lib');       // Librerías
define('DATA_PATH', BASE_PATH . '/data');     // Carpeta data
define('USERS_PATH', DATA_PATH . '/users');   // Carpeta de usuarios
define('SYSTEM_PATH', USERS_PATH . '/system');// Carpeta system
define('LOGS_PATH', DATA_PATH . '/logs');     // Carpeta logs
define('TMP_PATH', DATA_PATH . '/tmp');       // Carpeta temporal

// ----------------------------
// Crear carpetas si no existen
// ----------------------------
$dirs = [
    USERS_PATH,
    SYSTEM_PATH,
    LOGS_PATH,
    TMP_PATH
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);  // Solo crea si no existe
    }
}

// ----------------------------
// Archivo de logs
// ----------------------------
define('LOG_FILENAME', LOGS_PATH . '/freshrss.log');

// ----------------------------
// Evitar errores por constantes faltantes
// ----------------------------
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', false);
}

// ----------------------------
// Opcional: Depuración mínima
// ----------------------------
// error_reporting(E_ALL);
// ini_set('display_errors', '1');

