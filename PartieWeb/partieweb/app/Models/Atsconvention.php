<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atsconvention extends Model
{
    use HasFactory;
    //declaration de la table de document du convention de stage
    protected $table = 'convention_stage';

    //declaration de ses colonnes
    protected $fillable = [
        'email',
        'apogee',
        'cin',
        'nom',
        'nom_societe',
        'adr_societe',
        'tel_societe',
        'email_societe',
        'nom_rep_societe',
        'qualite_rep_societe',
        'encadrant_societe',
        'annee_etude',
        'filiere',
        'date_debut',
        'date_fin',
        'encadrant_padagogique',
        'sujet_stage',
        'status',
        'document',
        'motif',
    ];

    protected $dates = ['date'];
}


