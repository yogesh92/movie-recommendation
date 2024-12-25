<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'Inception',
                'description' => 'A mind-bending thriller about dreams within dreams.',
                'genre' => 'Sci-Fi',
                'release_date' => '2010-07-16',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'A gripping tale of Batman battling Joker in Gotham City.',
                'genre' => 'Action',
                'release_date' => '2008-07-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}