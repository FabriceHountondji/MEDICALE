<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdonnancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ordonnances')->insert([

            [
                'prescription' => 'dire un truc comme presciption, dose medoc',
                'note' => 'mat et soir/ une fois par jour',
                'patient_id' => '1'
            ],
        ]);
    }
}
