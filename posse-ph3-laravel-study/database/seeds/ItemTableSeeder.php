<?php

use Illuminate\Database\Seeder;
use App\Item;


class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = Item::create([
            'big_question_id'    => 1,
            'question_id' => 1,
            'choice' => 'たかなわ',
            'valid' => 1,
        ]);
        $item = Item::create([
            'big_question_id'    => 1,
            'question_id' => 1,
            'choice' => 'たかわ',
            'valid' => 0,
        ]);
        $item = Item::create([
            'big_question_id'    => 1,
            'question_id' => 1,
            'choice' => 'こうわ',
            'valid' => 0,
        ]);
        $item = Item::create([
            'big_question_id'    => 1,
            'question_id' => 2,
            'choice' => 'かめいど',
            'valid' => 1,
        ]);
        $item = Item::create([
            'big_question_id'    => 1,
            'question_id' => 2,
            'choice' => 'かめと',
            'valid' => 0,
        ]);
        $item = Item::create([
            'big_question_id'    => 1,
            'question_id' => 2,
            'choice' => 'かめど',
            'valid' => 0,
        ]);
    }
}
