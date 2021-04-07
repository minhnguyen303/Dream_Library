<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = new User();
        $user->name = "Admin";
        $user->phone = "0123456789";
        $user->email = "Admin@gmail.com";
        $user->address = "Admin address";
        $user->avatar = "dist/img/avatar.png";
        $user->password = Hash::make('Admin1234');
        $user->role_id = 1;
        $user->save();
    }
}
