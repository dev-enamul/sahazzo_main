<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuickLink;

class QuickLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quickLinkData = [
            'title' => 'Sample Quick Link',
            'subtitle' => 'Sample Subtitle',
            'btn_text' => 'Sample Button Text',
            'btn_link' => '/about',
        ];
 
        QuickLink::create($quickLinkData);
    }
}
