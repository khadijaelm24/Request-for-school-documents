<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students'; 

    protected $fillable = [
        'apogee',
        'email',
        'cin',
        'fullname',
        'filiere',
        'annee_universitaire',
        'niveau',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
