<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([ 
            'name' => 'nama',
            'email' => 'faradila@gmail.com',
            'password' => bcrypt('12345'),
            'foto' => ''
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        product::create([
            'name' => 'Kursi',
            'price' => '100.00',
            'stok' => '10',
            'foto' => 'Parsons_______-__6_-_-removebg-preview (1).png',
        ]);
        product::create([
            'name' => 'Jam',
            'price' => '50.00',
            'stok' => '10',
            'foto' => 'jam.png',
        ]);
        product::create([
            'name' => 'Sofa',
            'price' => '90.00',
            'stok' => '10',
            'foto' => 'Harga-Sofa-Minimalis-Jepara-Kursi-Kerang-Untuk-Santai-Beautiful-Detail-TTJ-2367-removebg-preview.png',
        ]);
        product::create([
            'name' => 'Cermin',
            'price' => '40.00',
            'stok' => '10',
            'foto' => 'Irregular_Wavy_Wall_Mirror___Aesthetic_Room_Decor_-roomtery-removebg-preview.png',
        ]);
        product::create([
            'name' => 'Rak',
            'price' => '70.00',
            'stok' => '10',
            'foto' => 'download__4_-removebg-preview.png',
        ]);
        product::create([
            'name' => 'Sofa',
            'price' => '200.00',
            'stok' => '10',
            'foto' => 'La_Redoute_Interieurs_-_2-sitzer-sofa_Jimi__Strukturgewebe-removebg-preview.png',
        ]);
}
}
