<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Students;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        Students::create([
            'apogee' => 20032103,
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'cin' => 'L123456',
            'fullname' => 'Mariam Khalidi',
            'filiere' => '2AP1',
            'annee_universitaire' => '2020-2021',
            'niveau' => '1ere annee',
        ]);

        Students::create([
            'apogee' => 20032103,
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'cin' => 'L123456',
            'fullname' => 'Mariam Khalidi',
            'filiere' => '2AP2',
            'annee_universitaire' => '2021-2022',
            'niveau' => '2eme annee',
        ]);

        Students::create([
            'apogee' => 20032103,
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'cin' => 'L123456',
            'fullname' => 'Mariam Khalidi',
            'filiere' => 'GI1',
            'annee_universitaire' => '2022-2023',
            'niveau' => '3eme annee',
        ]);

        Students::create([
            'apogee' => 20032103,
            'email' => 'mariam.khalidi@etu.uae.ac.ma',
            'cin' => 'L123456',
            'fullname' => 'Mariam Khalidi',
            'filiere' => 'GI2',
            'annee_universitaire' => '2023-2024',
            'niveau' => '4eme annee',
        ]);
        Students::create([
            'apogee' => 18032104,
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'cin' => 'A123456',
            'fullname' => 'Karim Rizqi',
            'filiere' => '2AP1',
            'annee_universitaire' => '2018-2019',
            'niveau' => '1ere annee',
        ]);

        Students::create([
            'apogee' => 18032104,
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'cin' => 'A123456',
            'fullname' => 'Karim Rizqi',
            'filiere' => '2AP2',
            'annee_universitaire' => '2019-2020',
            'niveau' => '2eme annee',
        ]);

        Students::create([
            'apogee' => 18032104,
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'cin' => 'A123456',
            'fullname' => 'Karim Rizqi',
            'filiere' => 'SCM1',
            'annee_universitaire' => '2020-2021',
            'niveau' => '3eme annee',
        ]);

        Students::create([
            'apogee' => 18032104,
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'cin' => 'A123456',
            'fullname' => 'Karim Rizqi',
            'filiere' => 'SCM2',
            'annee_universitaire' => '2021-2022',
            'niveau' => '4eme annee',
        ]);

        Students::create([
            'apogee' => 18032104,
            'email' => 'karim.rizqi@etu.uae.ac.ma',
            'cin' => 'A123456',
            'fullname' => 'Karim Rizqi',
            'filiere' => 'SCM3',
            'annee_universitaire' => '2022-2023',
            'niveau' => '5eme annee',
        ]);
        
        Students::create([
            'apogee' => 21032103,
            'email' => 'laila.khalid@etu.uae.ac.ma',
            'cin' => 'C123456',
            'fullname' => 'Laila Khalid',
            'filiere' => '2AP1',
            'annee_universitaire' => '2021-2022',
            'niveau' => '1ere annee',
        ]);

        Students::create([
            'apogee' => 21032103,
            'email' => 'laila.khalid@etu.uae.ac.ma',
            'cin' => 'C123456',
            'fullname' => 'Laila Khalid',
            'filiere' => '2AP2',
            'annee_universitaire' => '2022-2023',
            'niveau' => '2eme annee',
        ]);

        Students::create([
            'apogee' => 21032103,
            'email' => 'laila.khalid@etu.uae.ac.ma',
            'cin' => 'C123456',
            'fullname' => 'Laila Khalid',
            'filiere' => 'GI1',
            'annee_universitaire' => '2023-2024',
            'niveau' => '3eme annee',
        ]);

        Students::create([
            'apogee' => 22032103,
            'email' => 'omar.ali@etu.uae.ac.ma',
            'cin' => 'B123456',
            'fullname' => 'Omar Ali',
            'filiere' => '2AP1',
            'annee_universitaire' => '2022-2023',
            'niveau' => '1ere annee',
        ]);

        Students::create([
            'apogee' => 22032103,
            'email' => 'omar.ali@etu.uae.ac.ma',
            'cin' => 'B123456',
            'fullname' => 'Omar Ali',
            'filiere' => '2AP2',
            'annee_universitaire' => '2023-2024',
            'niveau' => '2eme annee',
        ]);

        Students::create([
            'apogee' => 23032103,
            'email' => 'aya.mahmoudi@etu.uae.ac.ma',
            'cin' => 'D123456',
            'fullname' => 'Aya Mahmoudi',
            'filiere' => '2AP1',
            'annee_universitaire' => '2023-2024',
            'niveau' => '1ere annee',
        ]);
    }
}
