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
        $bigQuestion = BigQuestion::where('id','=', $id)->first();
        // $bigQuestion = BigQuestion::find($id);
        // $bigQuestion = BigQuestion::all();
        //var_dumpと一緒dump$die
        // $choices= Choice::where('big_question_id','=',$id)->gruopBy('question_id')->get('question_id');
        // $choices= Choice::where('big_question_id','=',$id)->get();

        // dd($choices);

        $correct_choices= Choice::where('valid','=','1')->get();
        // dd($correct_choices);
        // dd($correct_choices);

        // dd(compact('bigQuestion','choices'));

        
        
        return view('quizy',compact('bigQuestion','correct_choices'));
        // return view([‘id’ => $id, ‘bigQuestions’ => $bigQuestions, ‘choices’ => $choices]);
        

    }
}