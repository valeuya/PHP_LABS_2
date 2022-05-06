<?php

namespace Database\Seeders;

use App\Models\Article_Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Article_TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article_Tag::factory()->count(100)->create();
    }
}
