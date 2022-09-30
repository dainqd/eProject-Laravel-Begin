<?php

namespace Database\Seeders;

use Database\Factories\EventsFactory;
use Database\Factories\NewsFactory;
use Database\Factories\SubjectFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            GroupSeeder::class,
            FeedbackSeeder::class,
            ScoreSeeder::class,
            SubjectFactory::class,
            NewsFactory::class,
            EventsFactory::class,
        ]);
    }
}
