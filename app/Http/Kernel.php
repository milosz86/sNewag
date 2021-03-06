<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,

        ],

        'api' => [
            'throttle:60,1',
            'bindings',
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'auth' => \Illuminate\Auth\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'admin' => \App\Http\Middleware\Admin::class,
        'services_read' => \App\Http\Middleware\services\services_read::class,
        'services_create' => \App\Http\Middleware\services\services_create::class,
        'services_edit' => \App\Http\Middleware\services\services_edit::class,
        'services_delete' => \App\Http\Middleware\services\services_delete::class,
        'parts_read' => \App\Http\Middleware\parts\parts_read::class,
        'parts_create' => \App\Http\Middleware\parts\parts_create::class,
        'parts_edit' => \App\Http\Middleware\parts\parts_edit::class,
        'parts_delete' => \App\Http\Middleware\parts\parts_delete::class,
        'vehicles_read' => \App\Http\Middleware\vehicles\vehicles_read::class,
        'vehicles_create' => \App\Http\Middleware\vehicles\vehicles_create::class,
        'vehicles_edit' => \App\Http\Middleware\vehicles\vehicles_edit::class,
        'vehicles_delete' => \App\Http\Middleware\vehicles\vehicles_delete::class,
        'shipments_read' => \App\Http\Middleware\shipments\shipments_read::class,
        'shipments_create' => \App\Http\Middleware\shipments\shipments_create::class,
        'shipments_edit' => \App\Http\Middleware\shipments\shipments_edit::class,
        'shipments_delete' => \App\Http\Middleware\shipments\shipments_delete::class,
        'cars_read' => \App\Http\Middleware\cars\cars_read::class,
        'cars_create' => \App\Http\Middleware\cars\cars_create::class,
        'cars_edit' => \App\Http\Middleware\cars\cars_edit::class,
        'cars_delete' => \App\Http\Middleware\cars\cars_delete::class,
    ];
}
