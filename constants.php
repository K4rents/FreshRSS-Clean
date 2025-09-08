<?php
declare(strict_types=1);

// ----------------------------
// Constants for FreshRSS
// ----------------------------

// Paths
define('USERS_PATH', __DIR__ . '/data/users');
define('SYSTEM_PATH', USERS_PATH . '/system');
define('LOGS_PATH', __DIR__ . '/data/logs');
define('TMP_PATH', __DIR__ . '/data/tmp');

// Ensure directories exist
$dirs = [USERS_PATH, SYSTEM_PATH, LOGS_PATH, TMP_PATH];
foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
}

// Log file
define('LOG_FILENAME', LOGS_PATH . '/freshrss.log');

// Prevent PHP errors if syslog constants are missing
if (!defined('COPY_SYSLOG_TO_STDERR')) {
    define('COPY_SYSLOG_TO_STDERR', false);
}

// Other optional FreshRSS constants
// define('FEVER_ENABLE', true); // Uncomment if using Fever API
// define('FEED_CONTENT_CUTOFF', 0); // Number of days to keep feed content
