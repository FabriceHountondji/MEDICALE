<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BonExamenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bon_examens')->insert([

            [
                'label' => 'Examen 1',
                'date' => '05/11/99',
                'motif' => 'Vérifier fracture orteil',
                'patient_id' => '1'
            ],
        ]);
    }
}
