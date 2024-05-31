<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Conge extends Model
{
  protected $fillable =[
    'employee_id',
    'first_name',
    'last_name',
    'start_date',
    'end_date',
    'status',
    'comment',
    'annual_conge_days',
];
    
        public function employee()
        {
            return $this->belongsTo(Employee::class);
        }
}
