<?php

namespace Database\Seeders;
// namespace Database\Seeders\QuizSeeder;
// namespace Database\Seeders\QuestionSeeder;
// namespace Database\Seeders\ChoiceSeeder;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    $this->call([
        QuizSeeder::class,
        QuestionSeeder::class,
        ChoiceSeeder::class,
    ]);
}

}
