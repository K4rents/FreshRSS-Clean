<?php
declare(strict_types=1);

require(__DIR__ . '/lib/lib_rss.php');
require(__DIR__ . '/app/FreshRSS.php');

FreshRSS::preInitialize();
FreshRSS::initialize();
FreshRSS::run();
