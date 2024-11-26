<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            PersonSeeder::class,
            MovieSeeder::class,
            LanguageSeeder::class,
            MovieLanguageSeeder::class,
            WriterMovieSeeder::class,
            ActorMovieSeeder::class,
            UserSeeder::class,
        ]);
    }
}
