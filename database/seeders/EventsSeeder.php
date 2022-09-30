<?php

namespace Database\Seeders;
use App\Models\Events;
use Illuminate\Database\Seeder;

class EventsSeeder
{
    public function run()
    {
        Events::factory()->count(35)->create();
    }
}
;
