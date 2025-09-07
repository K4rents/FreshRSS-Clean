<?php
declare(strict_types=1);

// Configuración de FreshRSS
$configFile = __DIR__ . '/data/config.custom.php';
if (file_exists($configFile)) {
    require $configFile;
}

// Cargar la aplicación FreshRSS
require __DIR__ . '/index.php';
