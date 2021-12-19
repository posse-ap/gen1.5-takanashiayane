<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\BigQuestion;
use \App\choice;
use LengthException;

class QuizyController extends Controller
{
    //
    function show($id){
        $bigQuestion = BigQuestion::find($id);
        // $bigQuestion = BigQuestion::all();
        //var_dumpと一緒dump$die
        // $choices= Choice::where('big_question_id','=',$id)->gruopBy('question_id')->get('question_id');
        $choices= Choice::where('big_question_id','=',$id)->get();

        // dd($choices);
        $choice_numbers= Choice::where('big_question_id','=',$id)->where('valid','=','1')->get();
        // dd(compact('bigQuestion','choices'));
        
        
        return view('quizy',compact('bigQuestion','choices','choice_numbers'));
        // return view([‘id’ => $id, ‘bigQuestions’ => $bigQuestions, ‘choices’ => $choices]);
        

    }
}