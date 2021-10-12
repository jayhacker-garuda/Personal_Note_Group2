<?php

namespace App\Providers;

use App\Models\Personal;
use App\Models\Reminder;
use App\Models\Todo;
use Illuminate\Support\Facades\View as FacadesView;
use Illuminate\Support\ServiceProvider;

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
    
        
        FacadesView::share('pNote', Personal::where('note_category_id', '=','1')->orderBy('created_at', 'desc')->first());
        FacadesView::share('rNote', Reminder::where('note_category_id', '=','1')->orderBy('created_at', 'desc')->first());
        FacadesView::share('tNote', Todo::where('note_category_id', '=','1')->orderBy('created_at', 'desc')->first());
    }
}