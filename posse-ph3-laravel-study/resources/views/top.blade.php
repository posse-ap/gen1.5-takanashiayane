<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>ホーム</title>
</head>
<body>
    <ul>
        @foreach($quiz as $quiz)
        <li><a href="{{ route('quiz.show',['quiz'=>$quiz->id]) }}">{{ $quiz->title }}</a></li>
        @endforeach
    </ul>
</body>
</html>