<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/quizy_admin.css') }}">
</head>
<body>
    <form method="POST" action="{{ route('admin.store',['quiz_id' => $quiz->id]) }}"enctype="multipart/form-data">
        @csrf
        {{-- @method('PATCH') --}}
        {{ $quiz->title }}の難読地名クイズ
        <div>
                <label class="col-md-2" for="title">問題文</label>
                <div>
                    <input type="text" class="form-control" name="question_statement" value="">
                    {{-- <input type="hidden" class="form-control" name="question_id"value="{{ $loop-> }}" > --}}
                </div>
                <label class="col-md-2" for="title">画像</label>
                <div>
                    <input type="file" class="form-control" name="question_img" accept="image/jpeg, image/png"
                        value="">
                </div>
                <label class="col-md-2" for="title">選択肢 ※赤い枠のところに正解の選択肢を入力してね</label>
                <div id='target'>
                    <input type="hidden" class="form-control" name="question_number" >
                        <input type="text" class="correct_choice_input" name="correct_answer" value=""> 
                        
                        <input type="text"name="uncorrect_choice[]" value=""> 
                        <input type="text"name="uncorrect_choice[]" value=""> 
                        <input type="text"name="uncorrect_choice[]" value=""> 
                        <input type="text"name="uncorrect_choice[]" value=""> 
                        <input type="text"name="uncorrect_choice[]" value=""> 
                        {{-- <input type="hidden" class="form-control" name="choice_number{{ $loop->parent->iteration }}" value={{ $loop->iteration}}>
                        {{-- <input type="hidden" class="form-control" name="choice_id[]" value={{ $choice->id}}> --}} 
                    {{-- <input type="button" id="btn{{ $loop->iteration }}" onclick=button() value="入力欄追加"> --}}
                </div>


            <button type="submit">完了</button>

    </form>

    </div>
</body>
</html>