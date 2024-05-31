<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Formation;
use App\Models\Conge;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Récupérer les deux dernières formations
        $derniereformations = Formation::latest()->take(2)->get();
        
        // Récupérer la dernière demande de congé
        $derniereConge = Conge::latest()->first();

        // Partager les données avec toutes les vues
        View::share([
            'derniereformations' => $derniereformations,
            'derniereConge' => $derniereConge
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
