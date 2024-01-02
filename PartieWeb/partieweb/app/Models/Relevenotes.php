<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relevenotes extends Model
{
    use HasFactory;

    protected $table = 'releve_notes'; 

    protected $fillable = [
        'email',
        'apogee',
        'cin',
        'nom_module',
        'semestre',
        'note',
        'statut',
        'points_jury',
        'status',
        'document',
        'motif',
    ];

    protected $casts = [
        'note' => 'float',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
