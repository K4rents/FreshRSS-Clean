<?php
declare(strict_types=1);

// Cargar constantes primero
require(__DIR__ . '/constants.php');

// Librerías base
require(__DIR__ . '/lib/lib_rss.php');

// Núcleo de la aplicación
require(__DIR__ . '/app/FreshRSS.php');

// Inicializar FreshRSS
FreshRSS::main();
