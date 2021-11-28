<?php

use Illuminate\Database\Seeder;
use App\BigQuestion;
class BigQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $big_quiestion = BigQuestion::create([
            'title'     => '東京の難読地名クイズ',
        ]);
        $big_quiestion = BigQuestion::create([
            'title'     => '広島の難読地名クイズ',
        ]);
    }
}
