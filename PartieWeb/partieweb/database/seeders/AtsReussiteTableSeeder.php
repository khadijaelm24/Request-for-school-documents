<?php

namespace Database\Seeders;

use App\Models\Atsreussite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtsReussiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        Atsreussite::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom' => 'Mariam Khalidi',
            'status' => 'en cours',
        ]);
        
        Atsreussite::create([
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'apogee' => 18032103,
            'cin' => 'A123456',
            'nom' => 'Karim Rizqi',
            'status' => 'en cours',
        ]);
        
        Atsreussite::create([
            'email' => 'laila.khalid@etu.uae.ac.ma',
            'apogee' => 21032103,
            'cin' => 'C123456',
            'nom' => 'Laila Khalid',
            'status' => 'en cours',
        ]);
        
        Atsreussite::create([
            'email' => 'omar.ali@etu.uae.ac.ma',
            'apogee' => 22032103,
            'cin' => 'B123456',
            'nom' => 'Omar Ali',
            'status' => 'en cours',
        ]);
    }
}
