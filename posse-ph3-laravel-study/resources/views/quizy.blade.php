<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $bigQuestion->title }}の難読地名クイズ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/quizy.css') }}">
</head>

<body>
    <div class="contenainer">

        <div>

            @foreach ($bigQuestion->questions as $question)
                <h3 class="monndai">{{ $loop->index + 1 }}.この地名はなんて読む？</h3>
            <!-- 
                {{-- @foreach ($bigQuestions as $bigQuestion)
            <p>{{$bigQuestion->id}}の難読地名クイズ</p>
            @endforeach --}}
                {{-- @foreach ($choices as $choice)
                <p>{{ $choice->id }}</p>
            @endforeach
            @foreach ($bigQuestions as $bigQuestion)
                <p>{{ $bigQuestion->id }}</p>
            @endforeach --}} -->

                <div class="img">
                    <img src="{{ asset('/img/' . $bigQuestion->id . '_' . $loop->iteration . '.png') }}" alt='高輪の写真'>
                </div>
                <ul>
                    @foreach ($question->choices as $choice)
                        <li id="choice{{ $loop->parent->iteration }}_{{ $loop->index }}_{{ $choice->valid }}" class="list list{{ $question->id }}" onclick="check({{ $loop->parent->iteration }},{{ $loop->index }},{{ $choice->valid }})">
                        {{  $choice->choice}}
                    </li>
                    @endforeach
                </ul>
                
                <div id="answer{{ $loop->iteration }}" class="answer">
                    <div class="correct_show">正解！</div>
                    <p class="answer_show">正解は「{{ $correct_choices[$question->id -1]->choice}}」です!</p>
                </div>
            
                <div id="wrong_answer{{ $loop->iteration }}" class="wrong_answer">
                    <div class="wrong_show">不正解！</div>
                    <p class="answer_show">正解は「{{  $correct_choices[$question->id -1]->choice }}」です!</p>
                </div>

            @endforeach
        </div>

        <!-- <h3 class='monndai'>2.この地名はなんて読む？</h3>
        <div class=img>
            <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/512b8146e7661821c45dbb8fefedf731.png">
        </div>
        <ul>
            <li>かめいど</li>
            <li>かめと</li>
            <li>かめど</li>
            <li>正解は「かめいど」です！</li>
        </ul>
        <h3 class='monndai'> 3.この地名はなんて読む？</h3>
        <div class=img>
            <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/ad4f8badd896f1a9b527c530ebf8ac7f.png">
        </div>
        <ul>
            <li>おかとまち</li>
            <li>こうじまち</li>
            <li>かゆまち</li>
            <li>正解は「</li>
        </ul>
        <h3 class='monndai'>4.この地名はなんて読む？</h3>
        <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/ee645c9f43be1ab3992d121ee9e780fb.png">
        <ul>
            <li>おなりもん</li>
            <li>ごせいもん</li>
            <li>おかどもん</li>
        </ul> -->
    </div>
    <script src="{{ asset('/quizy.js') }}"></script>
</body>

</html>
