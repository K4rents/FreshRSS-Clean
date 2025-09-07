<?php
declare(strict_types=1);

// Cargar constantes
require(__DIR__ . '/constants.php');

// Cargar librerías
require(__DIR__ . '/lib/lib_rss.php');
require(__DIR__ . '/app/FreshRSS.php');

// Inicializar la aplicación
$controller = new Minz_FrontController();
$controller->run();
