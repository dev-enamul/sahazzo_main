<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'slider_title' => 'a bootstrap website template for business',
            'slider_photo' => '1.mp4', 
            'status' => rand(1), 
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
