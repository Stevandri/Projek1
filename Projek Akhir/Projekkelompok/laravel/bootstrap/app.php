<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Middleware as MiddlewareConfig; 

use App\Http\Middleware\UpdateLastSeenAt;
use App\Http\Middleware\IsAdmin;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )

        ->withMiddleware(function (MiddlewareConfig $middleware) { 
        
        $middleware->alias([
            'isAdmin' => IsAdmin::class,
        ]);

        $middleware->appendToGroup('web', [ 
            UpdateLastSeenAt::class,
        ]);
        })

        ->withExceptions(function (Exceptions $exceptions) {
            })->create();
