<?php

namespace Database\Seeders;

use App\Models\News;

class NewsSeeder
{
    public function run()
    {
        News::factory()->count(35)->create();
    }
}
