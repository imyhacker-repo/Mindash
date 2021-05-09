<?php

namespace Arikun\Mindash;

use Illuminate\Support\ServiceProvider;

class MindashServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            // CONTROLLER
            __DIR__.'/../core/Controllers/HomeController.php' => app_path('Http/Controllers/HomeController.php'),

            // DASHBOARD
            __DIR__.'/../core/Dashboard/Index.blade.php' => resource_path('views/Dashboard/Index.blade.php'),

            // LAYOUTS DASH
            __DIR__.'/../core/ldsh/head.blade.php' => resource_path('views/layouts/ldsh/head.blade.php'),
            __DIR__.'/../core/ldsh/sidebar.blade.php' => resource_path('views/layouts/ldsh/sidebar.blade.php'),
            __DIR__.'/../core/ldsh/navbar.blade.php' => resource_path('views/layouts/ldsh/navbar.blade.php'),
            __DIR__.'/../core/ldsh/stats.blade.php' => resource_path('views/layouts/ldsh/stats.blade.php'),
            __DIR__.'/../core/ldsh/footer.blade.php' => resource_path('views/layouts/ldsh/footer.blade.php'),
            __DIR__.'/../core/ldsh/end.blade.php' => resource_path('views/layouts/ldsh/end.blade.php'),
            __DIR__.'/../core/ldsh/main/index.blade.php' => resource_path('views/layouts/ldsh/main/index.blade.php'),

        ]);
    }
}
