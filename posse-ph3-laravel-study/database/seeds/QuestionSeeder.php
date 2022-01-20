<?php

use Illuminate\Database\Seeder;
use App\Models\Question;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([
            'quiz_id' => 1,
            'img_path' => '1_1.png',
            'statement' => 'この地名はなんて読む？',
        ]);
        Question::create([
            'quiz_id' => 1,
            'img_path' => '1_2.png',
            'statement' => 'この地名はなんて読む？',
        ]);
        Question::create([
            'quiz_id' => 2,
            'img_path' => '2_1.png',
            'statement' => 'この地名はなんて読む？',
        ]);
    }
}
