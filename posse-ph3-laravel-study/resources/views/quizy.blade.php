<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quiz->title }}の難読地名クイズ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/quizy.css') }}">
</head>

<body>
    <div class="contenainer">

        <div>

            @foreach ($quiz->questions as $question)
                <h3 class="monndai">{{ $loop->index + 1 }}.{{ $question->statement }}</h3>

                <div class="img">
                    {{-- <img src="{{ asset('/img/' . $bigQuestion->id . '_' . $loop->iteration . '.png') }}" alt='高輪の写真'> --}}
                    <img src="{{ asset('storage/img/' .$question->img_path) }}" alt='高輪の写真'>
                </div>
                <ul>
                    @foreach ($question->choices as $choice)
                        <li id="choice{{ $loop->parent->iteration }}_{{ $loop->index }}_{{ $choice->valid }}" class="list list{{ $question->id }}" onclick="check({{ $loop->parent->iteration }},{{ $loop->index }},{{ $choice->valid }})">
                        {{  $choice->name}}
                    </li>
                    @endforeach
                </ul>
                
                <div id="answer{{ $loop->iteration }}" class="answer">
                    <div class="correct_show">正解！</div>
                    <p class="answer_show">正解は「{{ $correct_choices[$question->id -1]->name}}」です!</p>
                </div>
            
                <div id="wrong_answer{{ $loop->iteration }}" class="wrong_answer">
                    <div class="wrong_show">不正解！</div>
                    <p class="answer_show">正解は「{{  $correct_choices[$question->id -1]->name }}」です!</p>
                </div>

            @endforeach
        </div>

    
    </div>
    <script src="{{ asset('/quizy.js') }}"></script>
</body>

</html>
