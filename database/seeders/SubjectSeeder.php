<?php

namespace Database\Seeders;


use App\Models\Subject;

class SubjectSeeder
{
    public function run()
    {
        Subject::factory()->count(35)->create();
    }
}
