<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('role_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('role_user')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ],
            //Admins
            [
                'user_id' => 2,
                'role_id' => 2
            ],
            [
                'user_id' => 3,
                'role_id' => 2
            ],
            //Accountants
            [
                'user_id' => 4,
                'role_id' => 3
            ],
            [
                'user_id' => 5,
                'role_id' => 3
            ],
            //HR
            [
                'user_id' => 6,
                'role_id' => 4
            ],
            [
                'user_id' => 7,
                'role_id' => 4
            ],
            //HR
            [
                'user_id' => 8,
                'role_id' => 5
            ],
            [
                'user_id' => 9,
                'role_id' => 5
            ],
        ]);
    }
}
