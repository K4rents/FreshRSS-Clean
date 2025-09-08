<?php
define('BASE_PATH', __DIR__);
define('LIB_PATH', BASE_PATH . '/lib');
define('DATA_PATH', BASE_PATH . '/data');
define('LOG_PATH', DATA_PATH . '/logs');
define('LOG_FILENAME', LOG_PATH . '/freshrss.log');
define('USERS_PATH', DATA_PATH . '/users');
define('SYSTEM_PATH', USERS_PATH . '/system');
define('TMP_PATH', DATA_PATH . '/tmp');

if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', false);
}

// Crear carpetas si no existen
$folders = [LOG_PATH, USERS_PATH, SYSTEM_PATH, TMP_PATH];
foreach ($folders as $folder) {
    if (!file_exists($folder)) {
        mkdir($folder, 0777, true);
    }
    chmod($folder, 0777);
}
