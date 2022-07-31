<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $role = new \App\Models\Role();
        $role->role = "admin";
        $role->save();

        $role = new \App\Models\Role();
        $role->role = "user";
        $role->save();
    }
}
