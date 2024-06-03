<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'description' => 'Default contact',
                'address' => '123 Main Street, City, Country',
                'phone_no' => '123-456-7890',
                'email' => 'contact@example.com',
                'twitter' => 'example_twitter',
                'fb' => 'example_facebook',
                'youtube' => 'example_google',
                'linkedin' => 'example_linkedin',
                'created_at' => now(),
                'updated_at' => now(),
            ], 
        ]);
    }
}
