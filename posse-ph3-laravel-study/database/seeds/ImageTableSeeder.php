<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = Image::insert([
            'big_question_id'  => 1,
            'question_id' => 1,
            'image_path' => '1.png',
        ]);

        // DB::table('image')->insert([
        //     [
        //         'big_question_id'  => 1,
        //         'question_id' => 1,
        //         'image_path' => '1.png',
        //     ]

        // ])
    }
}
