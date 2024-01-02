<?php

namespace Database\Seeders;

use App\Models\Reclamations;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReclamationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Reclamations::create([
            'name' => 'Omar Ali',
            'email' => 'omar.ali@etu.uae.ac.ma',
            'apogee' => 22032103,
            'cin' => 'B123456',
            'description' => 'Bonjour, je veux changer la date de stage dans la convention de stage.',
        ]);
        Reclamations::create([
            'name' => 'Mariam Khalidi',
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'description' => 'Bonjour, je veux changer la date de stage dans la convention de stage.',
        ]);
        Reclamations::create([
            'name' => 'Omar Ali',
            'email' => 'omar.ali@etu.uae.ac.ma',
            'apogee' => 22032103,
            'cin' => 'B123456',
            'description' => 'Bonjour, j\'ai une reclamation concernant la demande de releve de notes.',
        ]);
        Reclamations::create([
            'name' => 'Omar Ali',
            'email' => 'omar.ali@etu.uae.ac.ma',
            'apogee' => 22032103,
            'cin' => 'B123456',
            'description' => 'Bonjour, est-ce que je peux recuperer l\'attestation de reussite?',
        ]);
    }
}
