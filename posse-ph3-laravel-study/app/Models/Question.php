<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['quiz_id', 'img_path', 'statement']; 
    public function choices()
    {
        return $this->hasMany('App\Models\Choice');
    }
}
