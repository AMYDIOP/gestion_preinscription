<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $departements = [
            ['nom' => 'Genie informatique'],
            ['nom' => 'Reseaux et systemes'],
            ['nom' => 'Gestion et management']

        ];

        DB::table('departements')->insert($departements);
    }
}
