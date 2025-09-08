<?php
declare(strict_types=1);

const APP_NAME = 'FreshRSS';
const FRESHRSS_VERSION = '1.25.0';

define('FRESHRSS_PATH', __DIR__);
define('LIB_PATH', __DIR__ . '/lib');
define('APP_PATH', __DIR__ . '/app');
define('DATA_PATH', __DIR__ . '/data');
define('EXTENSIONS_PATH', __DIR__ . '/extensions');

// USERS_PATH apunta a data/users, no a "_"
define('USERS_PATH', DATA_PATH . '/users');

// System namespace dentro de "_/system"
define('SYSTEM_NAMESPACE_PATH', USERS_PATH . '/_/system');

// Log de FreshRSS
define('LOG_FILENAME', USERS_PATH . '/_/freshrss.log');
