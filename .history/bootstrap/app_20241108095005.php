<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\APIMiddleware;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        'APIMiddleware' => \App\Http\Middleware\APIMiddleware::class,

        $middleware->register(APIMiddleware::class), // Register your APIMiddleware here

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();