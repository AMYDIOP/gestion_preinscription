<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nom'=>' DIOP',
            'prenom'=>' AMY',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('passer@123'),
            'telephone'=>'778276162',
            'adresse'=>'ngor',
            'role_id'=>1,
            'pays_id'=>13,



        ]);
    }
}
