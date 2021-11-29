<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChambreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chambres')->insert([

            [
                'label' => 'Chambre 11',
                'prix' => '37.400',
                'nombrePlace' => '5'
            ],
        ]);
    }
}
