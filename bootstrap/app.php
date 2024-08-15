<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // $middleware->alias([
        //     'auth_check' => \App\Http\Middleware\isSuperAdmin::class,
        // ]);
        $middleware->web(append:[
            App\Http\Middleware\Localization::class,
        ]);

        // $middleware->append();
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
