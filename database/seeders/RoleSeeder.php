<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->role = 'Admin';
        $role->save();

        $role1 = new Role();
        $role1->role = 'Thủ thư';
        $role1->save();
    }
}
