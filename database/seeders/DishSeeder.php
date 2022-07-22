<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dish = new \App\Models\Dish();
        $dish->title = "Plovas";
        $dish->price = '15eur';
        $dish->image = 'https://www.lamaistas.lt/uploads/modules/recipes/thumb300x224/40252.jpg';
        $dish->restaurant_id = 1;
        $dish->save();

        $dish2 = new \App\Models\Dish();
        $dish2->title = "Užkandis";
        $dish2->price = '5eur';
        $dish2->image = 'https://www.lamaistas.lt/uploads/modules/recipes/thumb300x224/32375.jpg';
        $dish2->restaurant_id = 1;
        $dish2->save();

        $dish3 = new \App\Models\Dish();
        $dish3->title = "Užkepėlė";
        $dish3->price = '13eur';
        $dish3->image = 'https://www.lamaistas.lt/uploads/modules/recipes/thumb300x224/39018.jpg';
        $dish3->restaurant_id = 1;
        $dish3->save();
    }
}
