<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
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
        Blade::directive('route', function ($expression) {
            return "<?php echo route ($expression); ?>";
});

Paginator::useBootstrap();

Blade::directive('nl2br', function ($string) {
return "<?php echo nl2br($string); ?>";
});
}
}