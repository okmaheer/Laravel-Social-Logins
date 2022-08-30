<?php

namespace Database\Seeders;

use App\Models\Accounts;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        DB::table('users')->insert([
            [
                'name' => 'Super Admin',
                    'email' => 'super@theoptimumtech.com',
                'password' => Hash::make('Super@78601'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            //Admins
            [
                'name' => 'Optimum Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
               
            ],
            [
                'name' => 'Devsbeta Admin',
                'email' => 'admin_beta@gmail.com',
                'password' => Hash::make('123456'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
              
            ],
            //Accountants
            [
                'name' => 'Optimum Accountant',
                'email' => 'accounts_optimum@gmail.com',
                'password' => Hash::make('123456'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'Devsbeta Accountant',
                'email' => 'accounts_beta@gmail.com',
                'password' => Hash::make('123456'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
               
            ],
            //HR
            [
                'name' => 'Optimum HR',
                'email' => 'hr_optimum@gmail.com',
                'password' => Hash::make('123456'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
               
            ],
            [
                'name' => 'Devsbeta HR',
                'email' => 'hr_beta@gmail.com',
                'password' => Hash::make('123456'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            //Data Entry Operator
            [
                'name' => 'Optimum Data Operator',
                'email' => 'operator_optimum@gmail.com',
                'password' => Hash::make('123456'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
              
            ],
            [
                'name' => 'Devsbeta Data Operator',
                'email' => 'operator_beta@gmail.com',
                'password' => Hash::make('123456'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ],
            [
                'name' => 'POS Admin',
                'email' => 'posadmin@gmail.com',
                'password' => Hash::make('POS@78601'),
                'active' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
               
            ],
        ]);
    }
}
