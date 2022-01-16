function check(question_number,choice){
    var clicked = document.getElementById(`choice${question_number}_${choice+1}`);
    clicked_json =clicked.textContent;

    var judge = document.getElementById(`choice${question_number}_0`);
    judge_json =judge.textContent;

    let correct_choice=document.getElementById("choice"+question_number+"_0");
    let miss_choice1=document.getElementById("choice"+question_number+"_1");
    let miss_choice2=document.getElementById("choice"+question_number+"_2");
    var answers = document.getElementsByClassName( 'answer' );
    answers = Array.from( answers) ;
    var wrong_answers = document.getElementsByClassName( 'wrong_answer' );
    wrong_answers = Array.from( wrong_answers ) ;

    if(clicked_json==judge_json){
        correct_choice.classList.add("seikai");
        answers.forEach(answer => {
            answer.style.display = "block";
        });
            
    }else{
        miss_choice1.classList.add("miss");
        wrong_answers.forEach(wrong_answer => {
            wrong_answer.style.display = "block";
        });
        // $(".wrong_answer").style.display = "block";
        // wrong_answers.style.display = "block";
    }
    $(".list").addClass("cantclick");
}


