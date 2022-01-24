<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Quiz;
use \App\Models\Question;
use \App\Models\Choice;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quiz = Quiz::All();
        // return view('top',compact('quiz'));
        return view('quiz_edit', compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = Quiz::where('id', '=', $id)->first();
        // dd($quiz);
        return view('questions_list', compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz = Quiz::where('id', '=', $id)->first();
        // dd($quiz);
        return view('questions_edit', compact('quiz'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request['question_statement1']);
        Quiz::where('id', $id)->update([
            'title' => $request['quiz_title']
        ]);
        // ('からむ名',検索したい値])
        // アップロードされたファイルの取得
        $question_statement_id = $request['question_statement_id'];
        
        foreach ($question_statement_id as $key => $value) {
            if ($request['question_img' . $value]) {
                $file_name = 'question_img' . $value.'.png';
                $request->file('question_img'. $value)->storeAs('public/img',$file_name);

                Question::where('id', (int)$value)->update([
                    'statement' => $request['question_statement'][$key],
                    'img_path' => $file_name,
                    
                    ]);
                    //画像を保存する
            } else {
                Question::where('id', (int)$value)->update([
                    'statement' => $request['question_statement'][$key]
                ]);
            }
        };
        return redirect(route('admin.show', ['admin' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
