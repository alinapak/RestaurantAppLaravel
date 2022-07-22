<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rest = new \App\Models\Restaurant();
        $rest->title = "Taluti";
        $rest->city = 'Kaunas';
        $rest->address = 'Laisves. al';
        $rest->work_time = 'Mon-Fri 10-15';
        $rest->save();

        $rest2 = new \App\Models\Restaurant();
        $rest2->title = "Macdonalds";
        $rest2->city = 'Klaipeda';
        $rest2->address = 'Taikos pr.';
        $rest2->work_time = 'Mon-Fry 10-17';
        $rest2->save();
        
        $rest3 = new \App\Models\Restaurant();
        $rest3->title = "Berneliu Uzeiga";
        $rest3->city = 'Kaunas';
        $rest3->address = 'Laisves al.';
        $rest3->work_time = 'Sat-Sun 10-12';
        $rest3->save();
    }
}
