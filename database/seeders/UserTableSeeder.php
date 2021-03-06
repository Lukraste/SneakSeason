<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'email' => 'admin@example.com',
                'password' => bcrypt('Ifosup2022!'),
                'role' => 'admin',
                'rgpd' => 1
            ],
            [
                'email' => 'pierre.dpt@example.com',
                'password' => bcrypt('Ifosup2022!'),
                'role' => 'admin',
                'rgpd' => 1
            ]
        ]);

        User::factory()
        ->times(50)
        ->create();
    }
}
