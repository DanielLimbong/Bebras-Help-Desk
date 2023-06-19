<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProvinceSeeder::class,
            RegencySeeder::class,
            LevelSeeder::class,
            TagSeeder::class,
            DistrictSeeder::class,
            UserSeeder::class,
            QuestionSeeder::class,
            FaqSeeder::class,
            AnswerSeeder::class,
            FaqVoteSeeder::class,
            CommentSeeder::class,
            VoteSeeder::class,
            QuestionTagSeeder::class,
        ]);
    }
}
