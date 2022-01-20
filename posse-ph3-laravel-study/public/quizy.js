function check(question_number,choice,valid){
    // var clicked = document.getElementById(this);
    // clicked_json =clicked.textContent;

    // var judge = document.getElementById('choice'+question_number+"_"+choice+"_1");
    // judge_json =judge.textContent;

    let correct_choice=document.getElementById("choice"+question_number+"_"+choice+"_1");
    let miss_choice=document.getElementById("choice"+question_number+"_"+choice+"_0");
    // let miss_choice2=document.getElementById("choice"+question_number+"_2");
    var answer = document.getElementById( 'answer'+question_number );
    // answers = Array.from( answers) ;
    var wrong_answer = document.getElementById( 'wrong_answer'+question_number );
    // wrong_answers = Array.from( wrong_answers ) ;

    if(valid==1){
        correct_choice.classList.add("seikai");
        answer.style.display = "block";
                
    }else{
        miss_choice.classList.add("miss");
        wrong_answer.style.display = "block";
    }
    $(".list"+question_number).addClass("cantclick");
}


    // if(clicked_json==judge_json){
    //     correct_choice.classList.add("seikai");
    //     answer.style.display = "block";
            
    // }else{
    //     miss_choice1.classList.add("miss");
    //     wrong_answer.style.display = "block";
    // }
    // $(".list").addClass("cantclick");



