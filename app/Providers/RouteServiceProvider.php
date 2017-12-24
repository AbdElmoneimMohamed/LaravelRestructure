<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapBackendRoutes();
        $this->mapFrontendRoutes();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    /**
     * Define the "Backend" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapBackendRoutes()
    {
        $dirs = \File::directories(base_path('modules\Backend'));
        foreach ($dirs as $dir) {
            $namespace = explode("modules", $dir);
            Route::middleware(['web', 'admin'])
                ->prefix('admin')
                ->namespace('Modules' . $namespace[1] . '\Http\Controllers')
                ->group($dir . '\routes.php');
        }
    }

    /**
     * Define the "Frontend" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapFrontendRoutes()
    {
        $dirs = \File::directories(base_path('modules\Frontend'));
        foreach ($dirs as $dir) {
            $namespace = explode("modules", $dir);
            Route::middleware('web')
                ->prefix('frontend')
                ->namespace('Modules' . $namespace[1] . '\Http\Controllers')
                ->group($dir . '\routes.php');
        }
    }
}
