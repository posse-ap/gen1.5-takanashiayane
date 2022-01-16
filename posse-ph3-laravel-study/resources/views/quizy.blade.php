<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$bigQuestion->title}}の難読地名クイズ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/quizy.css') }}">
</head>

<body>
    <div class="contenainer">
        
        <div>

            @foreach($bigQuestion->questions as $question)
            <h3 class="monndai">{{$question->id}}.この地名はなんて読む？</h3>
        
            

            {{-- @foreach($bigQuestions as $bigQuestion)
            <p>{{$bigQuestion->id}}の難読地名クイズ</p>
            @endforeach --}}

            
            {{-- @foreach ($choices as $choice)
                <p>{{ $choice->id }}</p>
            @endforeach
            @foreach ($bigQuestions as $bigQuestion)
                <p>{{ $bigQuestion->id }}</p>
            @endforeach --}}

            <div class="img">
                <img src="{{ asset('/img/' . $bigQuestion->id .'_'. $question->id .'.png') }}"  alt='高輪の写真'>
                {{-- <img src="{{ asset('/img/1_1.png') }}"  alt='高輪の写真'> --}}
            </div>

            <ul>
                
                @foreach($question->choices as $choice)
            <li id="'choice'.$question->id . '_'.$loop->index" class="list" onclick="check({{ $question->id}},{{ $loop->index }})">{{ $choice->choice }}</li>
                @endforeach
                {{-- <li id='choice1_2' class="list" onclick="check(1,2)">こうわ</li>
                <li id='choice1_1' class="list" onclick="check(1,3)"> たかなわ</li> --}}

            </ul>
            <div id="answer" class="answer">
                <div class="correct_show">正解！</div>
                <p class="answer_show">正解は「{{ $correct_choices[$question->id -1]->choice}}」です!</p>
            </div>
            <div id="wrong_answer" class="wrong_answer">
                <div class="wrong_show">不正解！</div>
                <p class="answer_show">正解は「たかなわ」です!</p>
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