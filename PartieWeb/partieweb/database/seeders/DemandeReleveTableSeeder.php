<?php

namespace Database\Seeders;

use App\Models\Demandereleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemandeReleveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        Demandereleve::create([
            'email' => 'omar.ali@etu.uae.ac.ma',
            'apogee' => 22032103,
            'cin' => 'B123456',
            'annee_universitaire' => '2022-2023',
            'status' => 'en cours',
        ]);
        
        Demandereleve::create([
            'email' => 'laila.khalid@etu.uae.ac.ma',
            'apogee' => 21032103,
            'cin' => 'C123456',
            'annee_universitaire' => '2021-2022',
            'status' => 'en cours',
        ]);
        
        Demandereleve::create([
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'apogee' => 18032103,
            'cin' => 'A123456',
            'annee_universitaire' => '2021-2022',
            'status' => 'en cours',
        ]);
        
        Demandereleve::create([
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'apogee' => 18032103,
            'cin' => 'A123456',
            'annee_universitaire' => '2020-2021',
            'status' => 'en cours',
        ]);
        
        Demandereleve::create([
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'apogee' => 18032103,
            'cin' => 'A123456',
            'annee_universitaire' => '2019-2020',
            'status' => 'en cours',
        ]);
        
        Demandereleve::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'annee_universitaire' => '2020-2021',
            'status' => 'en cours',
        ]);
        
        Demandereleve::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'annee_universitaire' => '2021-2022',
            'status' => 'en cours',
        ]);

    }
}
