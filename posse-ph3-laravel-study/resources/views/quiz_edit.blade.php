<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>クイズ編集画面</title>
</head>

<body>
    <ul>
        @foreach ($quiz as $quiz)
            <li><a href="{{ route('admin.show', ['admin' => $quiz->id]) }}">{{ $quiz->title }}</a></li>
        @endforeach
    </ul>
        <form method="POST" action="{{ route('admin.quiz_store') }}" enctype="multipart/form-data">
            @csrf
            <label class="col-md-2" for="title">新しいクイズを作る</label>
            <div>
                <input type="text" class="form-control" name="quiz_title" value="">
            </div>
            <button type="submit">完了</button>
        </form>
</body>

</html>
