<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Formation;
use App\Models\Conge;
use App\Models\Actualite;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $user = session('user');
      
        // Récupérer les deux dernières formations
        $derniereformations = Formation::latest()->take(2)->get();
        
        // Récupérer la dernière demande de congé
        $derniereConge = Conge::latest()->first();

        $derniereActualite = Actualite::latest()->first();

        // Partager les données avec toutes les vues
        View::share([
            'derniereformations' => $derniereformations,
            'derniereConge' => $derniereConge,
            'derniereActualite' => $derniereActualite,
            'user'  => $user,
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
