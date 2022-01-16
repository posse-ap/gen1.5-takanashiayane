<?php

use Illuminate\Database\Seeder;
use App\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = Question::create([
            'big_question_id' => 1,
        ]);
        $questions = Question::create([
            'big_question_id' => 1,
        ]);
    }
}
