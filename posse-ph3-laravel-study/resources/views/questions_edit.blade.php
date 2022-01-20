<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>クイズ編集画面</title>
</head>

<body>
    {{-- <form method="post" action="{{ route('admin.update', $admin) }}"> --}}
        {{ $quiz->title }}の難読地名クイズ
        <div>
            <label class="col-md-2" for="title">クイズ名</label>
            <div>
                <input type="text" class="form-control" name="quiz_title" value="{{ $quiz->title }}">
            </div>
            @foreach ($quiz->questions as $question)


                <label class="col-md-2" for="title">問題文</label>
                <div>
                    <input type="text" class="form-control" name="quiz_title" value="{{ $question->statement }}">
                </div>
                <label class="col-md-2" for="title">画像</label>
                <div>
                    <input type="file" class="form-control" name="quiz_title" accept="image/jpeg, image/png"
                        value="{{ $question->img_path }}">
                </div>
                <label class="col-md-2" for="title">選択肢</label>
                <div>
                    @foreach ($question->choices as $choice)
                        <input type="text" class="form-control" name="quiz_title" value="{{ $choice->name }}">
                    @endforeach
                </div>


            @endforeach
    {{-- </form> --}}
    </div>
</body>

</html>
