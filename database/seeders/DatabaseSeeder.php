<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RestaurantSeeder::class);
        $this->call(DishSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);


    }
}
