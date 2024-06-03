<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    protected $fillable = ['titre', 'contenu', 'auteur', 'date_de_publication'];
}
