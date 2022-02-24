<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/quizy.css') }}">
    <title>{{ $quiz->title }}の難読地名クイズ一覧</title>
    
</head>
<body>
    <button class="button"><a href="{{ route('admin.edit',['admin'=>$quiz->id]) }}" class="edit">編集</a></button>
    <button class="button"><a href="{{ route('admin.create',['quiz_id'=>$quiz->id]) }}" class="edit">新規作成</a></button>
    <button class="button"><a href="{{ route('admin.destroy_show',['quiz_id'=>$quiz->id]) }}" class="edit">削除</a></button>
    <h1>{{ $quiz->title }}の難読地名クイズ</h1>
    @foreach ($quiz->questions as $question)
    <h2 class="monndai">{{ $loop->index + 1 }}.{{ $question->statement }}</h2>
                <div class="img">
                    {{-- <img src="{{ asset('/img/' . $bigQuestion->id . '_' . $loop->iteration . '.png') }}" alt='高輪の写真'> --}}
                    <img src="{{ asset('storage/img/' .$question->img_path) }}" alt='高輪の写真'>
                </div>
                <ul>
                    @foreach ($question->choices as $choice)
                        <li id="choice{{ $loop->parent->iteration }}_{{ $loop->index }}_{{ $choice->valid }}" class="list list{{ $question->id }}" onclick="check({{ $loop->parent->iteration }},{{ $loop->index }},{{ $choice->valid }})">
                        {{ $choice->name }}
                    </li>
                    @endforeach
                </ul>
    @endforeach
</body>
</html>