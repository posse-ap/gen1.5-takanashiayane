<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Quiz;
use \App\Models\Question;
use \App\Models\Choice;
use Carbon\Carbon;

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
    public function create(Request $request,$quiz_id)
    {
        $quiz = Quiz::find($quiz_id); 
        return view('new_quiz', compact('quiz'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$quiz_id)
    {
        // dd($request);
        $date = Carbon::now();
        $file_name=$date->timestamp.'.png'; 
        $param = [
            'quiz_id' =>$quiz_id, //取得したいデータをinput要素のname属性
            'statement' => $request->question_statement, //取得したいデータをinput要素のname属性
            'img_path' => $file_name,
            //取得したいデータをinput要素のname属性
            
            // 'img_path' => $request->new_question_img,
            // 'name' => $request->correct_answer,
            // 'name' => $request->text,
        ];
        
        $request->file('question_img')->storeAs('public/img', $file_name);
        
        $question=Question::create($param);
        
        $correct_choice=[
            'question_id' => $question->id ,
            'name'=> $request->correct_answer,
            'valid'=>1,
        ];
        Choice::create($correct_choice);
        
        // for($i=0;$i<5;$i++){
        // };
        foreach($request->uncorrect_choice as $uncorrect_choice_name){
            if($uncorrect_choice_name!=null){
                $uncorrect_choice=[
                    'question_id' => $question->id ,
                    'name'=> $uncorrect_choice_name,
                    'valid'=>0,
                ];
                Choice::create($uncorrect_choice);
            };
    }
    
    
    return redirect(route('admin.show',['admin'=>$quiz_id]));
}

public function quiz_store(Request $request){
    $new_quiz=[
        'title'=>$request->quiz_title,
    ];
    Quiz::create($new_quiz);
    return redirect(route('admin.index'));
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
        // dd($request);
        Quiz::where('id', $id)->update([
            'title' => $request['quiz_title']
        ]);
        // ('からむ名',検索したい値])
        // アップロードされたファイルの取得
        $question_statement_id = $request['question_statement_id'];

        foreach ($question_statement_id as $key => $value) {
            if ($request['question_img' . $value]) {
                $file_name = 'question_img' . $value . '.png';
                $request->file('question_img' . $value)->storeAs('public/img', $file_name);

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
        $question_number=(int)$request['question_number'];
        $count=0;
        
        for ($i = 1; $i < $question_number+1; $i++) {
            // echo (int)$request['choice_number'. $i]+1;
            for($l=1;$l<(int)$request['choice_number'. $i]+1;$l++){
                Choice::where('id',$request['choice_id'][$count] )->update([
                    'name' => $request['choice'.$i.'_'.$l]
                ]);
                
                $count++;
            };
        };
        // dd($request);


        // Quiz::where('id', $id)->update([
        //     'title' => $request['quiz_title']
        // ]);
        // dd($request);
        return redirect(route('admin.show', ['admin' => $id]));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_show($quiz_id)
    {
        $quiz = Quiz::find($quiz_id);
        return view('questions_destroy', compact('quiz'));
    }

    public function destroy($quiz_id,$question_id)
    {
        $post = Question::find($question_id);
        $post->delete();
        return redirect()->route('admin.show', ['admin' => $quiz_id]);
    }
}
