<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        Admin::create([
            'email' => 'ilham.adbib@etu.uae.ac.ma',
            'password' => 'ilham123',
        ]);
        
        Admin::create([
            'email' => 'ayoub.ettass@etu.uae.ac.ma',
            'password' => 'ayoub123',
        ]);

    }
}
