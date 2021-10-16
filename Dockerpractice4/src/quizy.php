<?php
require('./dbconnect.php');
$id = $_GET['id'];
if ($id == 1) {
    $stmt= $db ->query("SELECT * FROM tokyo_questions");
    $tokyo_questions=$stmt->fetchAll();
    // $questions_id = $tokyo_questions[0]['id'];
    print_r($questions_id);
    echo "東京の難読地名";
}else if($id==2){
    "SELECT * FROM hiroshima_questions";
    echo "広島の難読地名";
}else{
    $stmt= $db ->query("SELECT * FROM tokyo_questions");
    $tokyo_questions=$stmt->fetchAll();
    echo "東京の難読地名";
}


// $id=$_GET['id'];
// print_r($id);
// $stmt="SELECT * FROM tokyo_questions"
?>



<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizy制作</title>
    <link rel="stylesheet" href="./quizy.css">
</head>

<body>
<?php foreach($tokyo_questions as $tokyo_question){
    $question_id=$tokyo_question['id']?>
    <div class="contenainer">
        <div> 
            <h2 class="monndai">
            
            <?php echo  $question_id;?>.この地名はなんて読む？
            </h2>
        </div>
        <div class="img">
            <img src='../img/<?php echo  $question_id;?>.png' alt="<?php echo $question_id;?>問目の写真">
        </div>

        <ul>
            <li id="choice<?php echo $question_id;?>_1" class="list" onclick="check(<?php echo $question_id;?>,1)"><?php echo ($tokyo_question['choice1']);?></li>
            <li id="choice<?php echo $question_id;?>_2" class="list" onclick="check(<?php echo $question_id;?>,2)"><?php echo ($tokyo_question['choice2']);?></li>
            <li id="choice<?php echo $question_id;?>_3" class="list" onclick="check(<?php echo $question_id;?>,3)"><?php echo ($tokyo_question['choice3']);?></li>
        </ul>
        <div id="answer<?php echo ($question_id+1);?>" class="answer">
            <div class="correct_show">正解！
            </div>
            <p class="answer_show">正解は「<?php echo $tokyo_question['choice1'];?>」です!</p>
        </div>
        <div id="wrong_answer<?php echo ($question_id+1);?>" class="wrong_answer">
            <div class="wrong_show">不正解!！</div>
            <p class="answer_show">正解は「<?php echo $tokyo_question['choice1'];?>」です!</p>
        </div>
    </div>
    </div>
    <?php };?>
    <!-- <div class = "contenainer">
        <div>
            <h3 class="monndai">1.この地名はなんて読む？</h3>  -->
    <!-- TODO:名前直す h2にする -->

    <!--             
            <div class="img">
                <img src="https://d1khcm40x1j0f.cloudfront.net/quiz/34d20397a2a506fe2c1ee636dc011a07.png" alt='高輪の写真'>
            </div>
            
            <ul>
                <li id = 'miss1_1'>たかわ</li>
                <li id ='miss1_2'>こうわ</li>
                <li id ='seikai1_1'> たかなわ</li>
                
            </ul>
            
            <div id ="answer" class = "answer">
                <div class = "correct_show">正解！</div>
                <p  class = "answer_show">正解は「たかなわ」です!</p>
            </div>

            <div id ="wrong_answer" class = "wrong_answer">
                <div class = "wrong_show">不正解！</div>
                <p class = "answer_show">正解は「たかなわ」です!</p>
            </div>
        </div>



        
        <h3 class='monndai'>2.この地名はなんて読む？</h3>
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
        </ul>
    </div> -->
    <script src="quizy.js"></script>
</body>

</html>