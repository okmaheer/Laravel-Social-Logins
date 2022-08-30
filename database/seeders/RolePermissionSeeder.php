<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('permission_role')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $permissions = Permission::all();

        foreach($permissions as $permission) {
            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id' => 1,
            ]);

            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id' => 2,
            ]);

            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id' => 3,
            ]);

            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id' => 4,
            ]);

            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id' => 5,
            ]);
        }

    }
}
