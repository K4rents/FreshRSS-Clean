<?php
declare(strict_types=1);

// Directorios principales
define('FRESHRSS_VERSION', '1.21'); // o la versión que tengas
define('APP_DIR', __DIR__ . '/../app');
define('LIB_DIR', __DIR__ . '/../lib');
define('DATA_DIR', __DIR__); // si tu constants.php está en data
define('EXTENSIONS_DIR', __DIR__ . '/../extensions');

// Configuración de cache y logs
define('CACHE_DIR', DATA_DIR . '/cache');
define('LOG_DIR', DATA_DIR . '/log');

// URLs y paths base (ajusta si es necesario)
define('BASE_URL', '/p'); // si tu FreshRSS corre en /p
