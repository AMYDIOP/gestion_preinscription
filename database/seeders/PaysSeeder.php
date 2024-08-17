<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $pays = [
            ['nom' => 'Bénin', 'ville' => 'Porto-Novo'],
            ['nom' => 'Burkina Faso', 'ville' => 'Ouagadougou'],
            ['nom' => 'Cabo Verde', 'ville' => 'Praia'],
            ['nom' => 'Côte d\'Ivoire', 'ville' => 'Yamoussoukro'],
            ['nom' => 'Gambie', 'ville' => 'Banjul'],
            ['nom' => 'Ghana', 'ville' => 'Accra'],
            ['nom' => 'Guinée', 'ville' => 'Conakry'],
            ['nom' => 'Guinée-Bissau', 'ville' => 'Bissau'],
            ['nom' => 'Liberia', 'ville' => 'Monrovia'],
            ['nom' => 'Mali', 'ville' => 'Bamako'],
            ['nom' => 'Niger', 'ville' => 'Niamey'],
            ['nom' => 'Nigeria', 'ville' => 'Abuja'],
            ['nom' => 'Sénégal', 'ville' => 'Dakar'],
            ['nom' => 'Sierra Leone', 'ville' => 'Freetown'],
            ['nom' => 'Togo', 'ville' => 'Lomé'],
        ];
        

        

        DB::table('pays')->insert($pays);
    }
}
