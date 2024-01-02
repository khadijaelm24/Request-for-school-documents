<?php

namespace Database\Seeders;

use App\Models\Atsconvention;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConventionStageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        Atsconvention::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom' => 'Mariam Khalidi',
            'nom_societe'=>'NTT DATA',
            'adr_societe'=>'TETOUAN SHORE, 93150, MARTIL',
            'tel_societe'=>'0539556677',
            'email_societe'=>'contact@nttdata.com',
            'nom_rep_societe'=>'.........................',
            'qualite_rep_societe'=>'.........................',
            'encadrant_societe'=>'.........................',
            'annee_etude'=>'2023-2024',
            'filiere'=>'GI2',
            'date_debut'=>'2024-06-25',
            'date_fin'=>'2024-08-25',
            'encadrant_pedagogique'=>'.........................',
            'sujet_stage'=>'Automation des tests des applications mobiles',
            'status' => 'en cours',
        ]);
        
        Atsconvention::create([
            'email' => 'laila.khalid@etu.uae.ac.ma',
            'apogee' => 21032103,
            'cin' => 'C123456',
            'nom' => 'Laila Khalid',
            'nom_societe'=>'Alten',
            'adr_societe'=>'TETOUAN SHORE, 93150, MARTIL',
            'tel_societe'=>'0539446677',
            'email_societe'=>'contact@alten.com',
            'nom_rep_societe'=>'.........................',
            'qualite_rep_societe'=>'.........................',
            'encadrant_societe'=>'.........................',
            'annee_etude'=>'2022-2023',
            'filiere'=>'GI1',
            'date_debut'=>'2024-06-25',
            'date_fin'=>'2024-08-25',
            'encadrant_pedagogique'=>'.........................',
            'sujet_stage'=>'Etude sur automation des tests des applications mobiles',
            'status' => 'en cours',
        ]);

    }
}
