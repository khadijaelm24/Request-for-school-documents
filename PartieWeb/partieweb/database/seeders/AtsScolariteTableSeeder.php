<?php

namespace Database\Seeders;

use App\Models\Atsscolarite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtsScolariteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        Atsscolarite::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom' => 'Mariam Khalidi',
            'date_naissance' => '2002-02-12',
            'cne' => 'P123456789',
            'filiere' => 'GI1',
            'annee_univ' => '2022-2023',
            'status' => 'en cours',
        ]);
        
        Atsscolarite::create([
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'apogee' => 18032103,
            'cin' => 'A123456',
            'nom' => 'Karim Rizqi',
            'date_naissance' => '2000-05-12',
            'cne' => 'J123456789',
            'filiere' => 'SCM3',
            'annee_univ' => '2022-2023',
            'status' => 'en cours',
        ]);
        
        Atsscolarite::create([
            'email' => 'laila.khalid@etu.uae.ac.ma',
            'apogee' => 21032103,
            'cin' => 'C123456',
            'nom' => 'Laila Khalid',
            'date_naissance' => '2001-05-12',
            'cne' => 'M123456789',
            'filiere' => '2AP2',
            'annee_univ' => '2021-2022',
            'status' => 'en cours',
        ]);
    }
}
