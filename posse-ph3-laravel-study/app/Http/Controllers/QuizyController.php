<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizyController extends Controller
{
    //
    function show($id){
    // dd($id); //var_dumpと一緒dump$die
        $bigQuestions =\App\BigQuestion::find($id);
        $choices=\App\choice::where('big_question_id','=',$id)->get();
        return view('quizy',compact('id','bigQuestions','choices'));
    }
}