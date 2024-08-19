<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;  // Importez la classe Request

define('LARAVEL_START', microtime(true));

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

require __DIR__.'/../vendor/autoload.php';

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()  // Utilisation correcte de Request::capture()
)->send();

$kernel->terminate($request, $response);
