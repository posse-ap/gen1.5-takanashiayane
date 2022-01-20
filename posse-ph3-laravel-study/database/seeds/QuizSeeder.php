<?php

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quiz::create([
            'title'     => '東京',
        ]);
        Quiz::create([
            'title'     => '広島',
        ]);
        }
    }
