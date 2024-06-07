<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Formation extends Model
{
    use HasFactory;

    // Les attributs qui sont assignables
    protected $fillable = [
        'lieu',
        'date_debut',
        'date_fin',
        'titre',
        'description',
    ];

    public static function getFormationCount()
    {
        return self::count();
    }

    public function employes()
    {
        return $this->belongsToMany(Employe::class, 'formation_user')
            ->withPivot('nom', 'prenom', 'role', 'title')
            ->withTimestamps();
    }

    public function stagiaires()
    {
        return $this->belongsToMany(Stagiaire::class, 'formation_user')
            ->withPivot('nom', 'prenom', 'role', 'title')
            ->withTimestamps();
    }

   
    public function users()
    {
        return $this->belongsToMany(User::class, 'formation_user', 'formation_id', 'user_id')
            ->withPivot('nom', 'prenom', 'role', 'title')
            ->withTimestamps();
    }



   
}
