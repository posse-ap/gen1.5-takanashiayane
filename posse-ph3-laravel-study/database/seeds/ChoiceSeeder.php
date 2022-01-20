<?php

use Illuminate\Database\Seeder;
use App\Models\Choice;


class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Choice::create([
            'question_id'    => 1,
            'name' => 'たかなわ',
            'valid' => true,
        ]);
        Choice::create([
            'question_id'    => 1,
            'name' => 'たかわ',
            'valid' => false,
        ]);
        Choice::create([
            'question_id'    => 1,
            'name' => 'こうわ',
            'valid' => false,
        ]);
        Choice::create([
            'question_id'    => 2,
            'name' => 'かめいど',
            'valid' => true,
        ]);
        Choice::create([
            'question_id' => 2,
            'name' => 'かめと',
            'valid' => false,
        ]);
        Choice::create([
            'question_id' => 2,
            'name' => 'かめど',
            'valid' => false,
        ]);
        Choice::create([
            'question_id' => 3,
            'name' => 'むきひら',
            'valid' => false,
        ]);
        Choice::create([
            'question_id' => 3,
            'name' => 'むこうひら',
            'valid' => false,
        ]);
        Choice::create([
            'question_id' => 3,
            'name' => 'むかいなだ',
            'valid' => true,
        ]);
    }
}
