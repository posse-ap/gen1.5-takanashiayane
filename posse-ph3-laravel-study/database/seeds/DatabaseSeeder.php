<?php

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
        // $this->call(UsersTableSeeder::class);
        $this->call(ChoiceTableSeeder::class);
        $this->call(BigQuestionTableSeeder::class);
        $this->call(QuestionSeeder::class);
    }
}
