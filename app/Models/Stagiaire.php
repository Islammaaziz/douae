<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatablee;
use App\Models\Employe;

class Stagiaire extends Model
{
    use HasFactory, Notifiable;

    protected $guard = 'intern'; // Utilisation du guard 'intern' pour l'authentification des stagiaires
    protected $fillable = [
        'first_name', 'last_name', 'Tuteur', 'Duree_de_stage', 'Mission', 'phone', 'email', 'password','photo',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static function getStagiaireCount()
    {
        return self::count();
    }
    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'formation_user')
            ->withPivot('nom', 'prenom', 'role', 'title')
            ->withTimestamps();
    }
 
    public function user()
    {
        return $this->morphOne(User::class, 'profile');
    }
}
