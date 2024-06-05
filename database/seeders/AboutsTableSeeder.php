<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        About::create([
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'image' => '150.jpg',
            'mission_text' => 'Our mission is to provide the best services to our customers.',
            'mission_image' => 'mission.jpg',
            'vission_text' => 'Our vision is to be the leading company in our industry.',
            'vission_image' => 'vission.jpg',
            'values_text' => 'Our values include integrity, excellence, and customer satisfaction.',
            'values_image' => 'values.jpg',
            'company_name' => 'Zoom IT',
            'company_logo' => 'logo.png'
        ]);
    }
}
