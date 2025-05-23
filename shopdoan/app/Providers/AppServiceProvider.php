<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $categories=Category::all();
        View::share('categories',$categories);
        $menus=Menu::select('id','mn_name','mn_slug')->get();
        View::share('menus',$menus);
    }
}
