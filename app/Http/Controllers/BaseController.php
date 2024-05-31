<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class BaseController extends Controller
{
    public function __construct()
{
    $formations = Formation::latest()->take(2)->get(); // Récupérer les deux dernières formations
    view()->share('partials.notif_formation', $formations); // Modifier 'partials.notif_formation' par le nom correct de votre vue partielle
}
}