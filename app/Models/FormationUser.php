<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationUser extends Model
{
    use HasFactory;

    protected $table = 'formation_user';

    protected $fillable = [
        'formation_id',
        'user_id',
        'nom',
        'prenom',
        'role',
        'title',
    ];

    // Relation avec l'employé
    public function employee()
    {
        return $this->belongsTo(Employe::class, 'user_id');
    }

    // Relation avec le stagiaire
    public function stagiaire()
    {
        return $this->belongsTo(Stagiaire::class, 'user_id');
    }

    public function formation()
    {
        return $this->belongsTo(Formation::class, 'formation_id');
    }
}







