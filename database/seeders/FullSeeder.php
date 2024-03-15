<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FullSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([[
            'name' => 'User 1',
        ],[
            'name' => 'User 2',
        ],[
            'name' => 'User 3',
        ]]);

        DB::table('companies')->insert([[
            'name' => 'Company 1',
        ],[
            'name' => 'Company 2',
        ],[
            'name' => 'Company 3',
        ]]);
    }
}
