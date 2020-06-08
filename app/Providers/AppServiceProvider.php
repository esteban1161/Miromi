<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Admin\Menu;
use App\Models\Evento;
use App\Models\Seguridad\Usuario;

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
        View::composer("theme.lte.aside", function($view){
            $menus = Menu::getMenu(true);
            $view->with('menusComposer', $menus);
        });

        View::composer("theme.lte.aside", function($view){
            $usuario = Evento::ConsultaTerapeuta()->first();
            $view->with('eventoComposer', $usuario); 
        });
        View::share('theme', 'lte');

       /*  View::composer("theme.lte.aside", function($view){
            $usuario = Evento::ConsultaTerapeuta()->first()->identificacion;
            $view->with('eventoComposer2', $usuario); 
        });
        View::share('theme', 'lte'); */
    }
}
