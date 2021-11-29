<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FicheSoinsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fiche_soins')->insert([

            [
                'date' => '15/12/21',
                'temperature' => '37.4',
                'poids' => '100.4',
                'details' => 'Observation correcte,amelioration sante',
                'patient_id' => '1'
            ],
        ]);
    }
}
