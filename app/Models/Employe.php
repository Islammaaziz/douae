<?php


namespace App\Models;


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'IsResponsable',
        'email_verified_at',
        'password',
        'date_embauche',
        'poste',
        'photo',
        'departement',
        'verification_token',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getEmployeeCount()
    {
        return self::count();
    }
    protected static function boot()
    {
        parent::boot();

        // Assign current date to 'date_embauche' if it's not set
        static::creating(function ($employe) {
            if (is_null($employe->Date_d_embauche)) {
                $employe->Date_d_embauche = Carbon::now();
            }
        });
    }
    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'formation_user')
            ->withPivot('nom', 'prenom', 'role', 'title')
            ->withTimestamps();
    }
    
    public function sendEmailVerificationNotification()
    {
        $this->notify(new \Illuminate\Auth\Notifications\VerifyEmail);
    }
}