<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>クイズ編集画面</title>
    <link rel="stylesheet" href="{{ asset('/quizy_admin.css') }}">
</head>

<body>
    <form method="POST" action="{{ route('admin.update', ['admin' => $quiz->id]) }}"enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        {{ $quiz->title }}の難読地名クイズ
        <div>
            <label class="col-md-2" for="title">クイズ名</label>
            <div>
                <input type="text" class="form-control" name="quiz_title" value="{{ $quiz->title }}">
            </div>
            @foreach ($quiz->questions as $question)


                <label class="col-md-2" for="title">問題文</label>
                <div>
                    <input type="text" class="form-control" name="question_statement[]" value="{{ $question->statement }}">
                    <input type="hidden" class="form-control" name="question_statement_id[]" value={{ $question->id}}>
                </div>
                <label class="col-md-2" for="title">画像</label>
                <div>
                    <input type="file" class="form-control" name="question_img{{ $question->id }}" accept="image/jpeg, image/png"
                        value="{{ $question->img_path }}">
                </div>
                <label class="col-md-2" for="title">選択肢 ※赤い枠のところに正解の選択肢を入力してね</label>
                <div id='target{{ $loop->iteration }}'>
                    @foreach ($question->choices as $choice)
                        <input type="text" class="{{ $loop->index == 0 ? 'correct_choice_input' : 'b' }}"
                            name="choice{{ $loop->parent->iteration }}_{{ $loop->iteration }}" value="{{ $choice->name }}">
                    @endforeach
                    <input type="button" id="btn{{ $loop->iteration }}" onclick=button() value="入力欄追加">
                </div>


            @endforeach
            <button type="submit">完了</button>

    </form>

    </div>
    <script src="{{ asset('/quizy_admin.js') }}"></script>
</body>

</html>
