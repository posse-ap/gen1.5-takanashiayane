<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BigQuestion extends Model
{
    protected $table = 'big_questions';
    public function questions()
    {
        return $this->hasMany('App\Question');
    }
}
