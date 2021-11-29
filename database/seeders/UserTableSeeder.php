<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'HOUNTONDJI Fabrice',
                'phone' =>'96100999',
                'birthday' => '1999/11/05',
                'sex' => 'Masculin',
                'address' => 'Sos Calavi',
                'avatar' => 'img3.jpg',
                'email' => 'fab@gmail.com',
                'password' => bcrypt('admin'),
                'role_id' => '1',
                'chambre_id' => '2'
            ],

        ]);
    }
}
