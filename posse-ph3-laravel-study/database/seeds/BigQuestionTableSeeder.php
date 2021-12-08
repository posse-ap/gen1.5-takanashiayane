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
            'title'     => '東京',
        ]);
        $big_quiestion = BigQuestion::create([
            'title'     => '広島',
        ]);
    }
}
