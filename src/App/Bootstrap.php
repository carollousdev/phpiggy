<?php

#App

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use Framework\App;
use App\Config\paths;

use function App\Config\registerRoutes;

$app = new App(paths::SOURCE . "/App/container-definitions.php");
registerRoutes($app);
return $app;
