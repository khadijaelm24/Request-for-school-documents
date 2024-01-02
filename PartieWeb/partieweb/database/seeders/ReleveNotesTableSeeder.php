<?php

namespace Database\Seeders;

use App\Models\Relevenotes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReleveNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'analyse 1',
            'semestre'=>'S1',
            'note'=>'14.00',
            'statut'=>'valide',
            'points_jury'=>'14.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'algebre 1',
            'semestre'=>'S1',
            'note'=>'15.00',
            'statut'=>'valide',
            'points_jury'=>'15.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'physique 1',
            'semestre'=>'S1',
            'note'=>'13.00',
            'statut'=>'valide',
            'points_jury'=>'13.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'mecanique 1',
            'semestre'=>'S1',
            'note'=>'13.00',
            'statut'=>'valide',
            'points_jury'=>'13.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'info 1',
            'semestre'=>'S1',
            'note'=>'12.00',
            'statut'=>'valide',
            'points_jury'=>'12.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'LC 1',
            'semestre'=>'S1',
            'note'=>'14.00',
            'statut'=>'valide',
            'points_jury'=>'14.00',
            'status'=>'en cours',
        ]);
        
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'analyse 2',
            'semestre'=>'S2',
            'note'=>'14.00',
            'statut'=>'valide',
            'points_jury'=>'14.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'algebre 2',
            'semestre'=>'S2',
            'note'=>'13.00',
            'statut'=>'valide',
            'points_jury'=>'13.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'physique 2',
            'semestre'=>'S2',
            'note'=>'11.00',
            'statut'=>'valide',
            'points_jury'=>'11.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'LC 2',
            'semestre'=>'S2',
            'note'=>'14.00',
            'statut'=>'valide',
            'points_jury'=>'14.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'chimie',
            'semestre'=>'S2',
            'note'=>'13.00',
            'statut'=>'valide',
            'points_jury'=>'13.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'apogee' => 20032103,
            'cin' => 'L123456',
            'nom_module'=>'MAO',
            'semestre'=>'S2',
            'note'=>'12.00',
            'statut'=>'valide',
            'points_jury'=>'12.00',
            'status'=>'en cours',
        ]);

        
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'analyse 1',
            'semestre'=>'S1',
            'note'=>'9.00',
            'statut'=>'non valide',
            'points_jury'=>'9.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'algebre 1',
            'semestre'=>'S1',
            'note'=>'11.00',
            'statut'=>'valide',
            'points_jury'=>'11.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'physique 1',
            'semestre'=>'S1',
            'note'=>'10.00',
            'statut'=>'valide',
            'points_jury'=>'10.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'info 1',
            'semestre'=>'S1',
            'note'=>'12.00',
            'statut'=>'valide',
            'points_jury'=>'12.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'mecanique 1',
            'semestre'=>'S1',
            'note'=>'8.00',
            'statut'=>'non valide',
            'points_jury'=>'8.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'LC 1',
            'semestre'=>'S1',
            'note'=>'15.00',
            'statut'=>'valide',
            'points_jury'=>'15.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'analyse 2',
            'semestre'=>'S2',
            'note'=>'12.00',
            'statut'=>'valide',
            'points_jury'=>'12.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'algebre 2',
            'semestre'=>'S2',
            'note'=>'10.00',
            'statut'=>'valide',
            'points_jury'=>'10.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'physique 2',
            'semestre'=>'S2',
            'note'=>'9.00',
            'statut'=>'non valide',
            'points_jury'=>'9.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'chimie',
            'semestre'=>'S2',
            'note'=>'11.00',
            'statut'=>'valide',
            'points_jury'=>'11.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'MAO',
            'semestre'=>'S2',
            'note'=>'10.00',
            'statut'=>'valide',
            'points_jury'=>'10.00',
            'status'=>'en cours',
        ]);
        Relevenotes::create([
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'apogee' => 23032103,
            'cin' => 'D123456',
            'nom_module'=>'LC2',
            'semestre'=>'S2',
            'note'=>'14.00',
            'statut'=>'valide',
            'points_jury'=>'14.00',
            'status'=>'en cours',
        ]);
    }
}
