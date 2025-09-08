<?php
declare(strict_types=1);

// Cargar constantes
require(__DIR__ . '/constants.php');

// Cargar librerías y núcleo
require(__DIR__ . '/lib/lib_rss.php');
require(__DIR__ . '/app/FreshRSS.php');

// Iniciar la aplicación
$controller = new Minz_FrontController();
$controller->run();
