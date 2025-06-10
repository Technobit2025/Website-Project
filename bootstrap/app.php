<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\JsonResponse; // Import JsonResponse
use Laravel\Sanctum\Http\Middleware\CheckAbilities;
use Laravel\Sanctum\Http\Middleware\CheckForAnyAbility;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'abilities' => CheckAbilities::class,
            'ability' => CheckForAnyAbility::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (ValidationException $e, $request) {
            if ($request->wantsJson()) {
                return new JsonResponse([
                    'message' => 'Validation Error',
                    'errors' => $e->errors(),
                ], 422); // Use 422 Unprocessable Entity
            }
            return null;
        });
    })
    ->withSchedule(function (Schedule $schedule) {
        $schedule->call(function () {
            \App\Models\AndroidOtpToken::where('expires_at', '<', now())->delete();
        })->everyMinute();
    })->create();
