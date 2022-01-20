<?php

use Illuminate\Database\Seeder;
use App\Choice;
class ChoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choice = Choice::create([
            'question_id'    => 1,
            'choice' => 'たかなわ',
            'valid' => 1,
        ]);
        $choice =Choice::create([
            'question_id'    => 1,
            'choice' => 'たかわ',
            'valid' => 0,
        ]);
        $choice = Choice::create([
            'question_id'    => 1,
            'choice' => 'こうわ',
            'valid' => 0,
        ]);
        $choice = Choice::create([
            'question_id'    => 2,
            'choice' => 'かめいど',
            'valid' => 1,
        ]);
        $choice = Choice::create([
            'question_id' => 2,
            'choice' => 'かめと',
            'valid' => 0,
        ]);
        $choice = Choice::create([
            'question_id' => 2,
            'choice' => 'かめど',
            'valid' => 0,
        ]);
        $choice = Choice::create([
            'question_id' => 3,
            'choice' => 'むきひら',
            'valid' => 0,
        ]);
        $choice = Choice::create([
            'question_id' => 3,
            'choice' => 'むこうひら',
            'valid' => 0,
        ]);
        $choice = Choice::create([
            'question_id' => 3,
            'choice' => 'むかいなだ',
            'valid' => 1,
        ]);
    }
}
