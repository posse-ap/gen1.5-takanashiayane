// const miss1_1 = document.getElementById('miss1_1') ;
// const miss1_2 = document.getElementById('miss1_2') ;
// const seikai1_1 = document.getElementById('seikai1_1') ;

const choice = [
    ['たかわ', 'こうわ', 'たかなわ'],
    ['かめど', 'かめと', 'かめいど'],
    ['おかとまち', 'かゆまち', 'こうじまち'],
    ['おかどもん', 'ごせいもん', 'おなりもん'],
    ['たたりき', 'たたら', 'とどろき'],
    ['せきこうい', 'いじい', 'しゃくじい'],
    ['ざっしょく', 'ざっしき', 'ぞうしき'],
    ['ごしろちょう', 'みとちょう', 'おかちまち'],
    ['ろっこつ', 'しこね', 'ししぼね'],
    ['こしゃく', 'こばく', 'こぐれ'],
];

const correct_choice = ['たかなわ', 'かめいど', 'こうじまち', 'おなりもん', 'とどろき', 'しゃくじい', 'ぞうしき', 'おかちまち', 'ししぼね', 'こぐれ'];

const newArray = [
    [], [], [], [], [], [], [], [], [], []
];

console.log(choice.length);
///////////////////////////////シャッフル処理//////////////////////////////////////
// window.onload = 
function shuffle() {
    for (var i = 0; i < 10; i++) {
        for (var k = choice[i].length; k > 0; k--) {
            var r = Math.floor(Math.random() * k);
            newArray[i].push(choice[i][r]);
            choice[i].splice(r, 1);
            // console.log(newArray);
            // console.log(choice[i]);

            

        }
    
    }
}
choice.map(shuffle);
console.log(newArray);

//     for(let i = 0;i<10;i++){

//         // const j = choice[i].length;
//         // const k = Math.floor(Math.random()*j);
//         // console.log(choice[i].length);
//     while(choice.length > 0){
//         // j = choice[i].length;
//         // console.log(choice.length);
//         // k = Math.floor(Math.random()*j);

//         newArray.push(choice[i][k]);
//         choice.splice(k,1);
//         // console.log(newArray);
//     // for(let k = 0; k <10; k++){
//     //     shuffle(choice);

//     }
// }
// }
// choice.map(shuffle);






// seikai1_1.onclick = function(){
//     seikai1_1.classList.add("seikai") ;
//     const answer = document.getElementById("answer");
//     answer.style.display ="block";
//     // (seikai1_1 && miss1_1 && miss1_2).classList.add("cantclick") ;
//     miss1_1.classList.add("cantclick") ;
//     miss1_2.classList.add("cantclick") ;
//     seikai1_1.classList.add("cantclick") ;
// }


for (let i = 0; i < 10; i++) {

 /////////////////////////////////シャッフル後正しい答えの位置////////////////////////////////////
    var result = newArray[i].indexOf(correct_choice[i]);

///////////////////////////////html//////////////////////////////////////
    let h =
        '<div class = "contenainer">'
        + '<div>'
        + `<h2 class="monndai">${i + 1}.この地名はなんて読む？</h2> `
        + '</div>'


        + '<div class="img">'
        + `<img src = '../img/${i + 1}.png' alt="${i + 1}問目の写真">`
        + '</div>'

        + '<ul>'
        
        + `<li id ="miss${i + 1}_1" class = "list" onclick="check(${i + 1},1,${result+1})">${newArray[i][0]}</li>`
        + `<li id ="miss${i + 1}_2" class = "list" onclick="check(${i + 1},2,${result+1})">${newArray[i][1]}</li>`
        + `<li id ="miss${i + 1}_3" class = "list" onclick="check(${i + 1},3,${result+1})">${newArray[i][2]}</li>`

        + '</ul>'

        + `<div id ="answer${i + 1}" class = "answer">`
        + ' <div class = "correct_show">正解！</div>'
        + ` <p  class = "answer_show">正解は「${correct_choice[i]}」です!</p>`
        + '</div>'

        + `<div id ="wrong_answer${i + 1}" class = "wrong_answer">`
        + ' <div class = "wrong_show">不正解！</div>'
        + ` <p  class = "answer_show">正解は「${correct_choice[i]}」です!</p>`
        + '</div>'
        + '</div>'
        + '</div>';

    document.write(h);
}

///////////////////////////////クリック処理//////////////////////////////////////
function check(question_number, number, place) {
    let first = document.getElementById('miss' + question_number + '_1'); //何問目
    let second = document.getElementById('miss' + question_number + '_2');
    let third = document.getElementById('miss' + question_number + '_3');
    let clicked = document.getElementById('miss' + question_number + '_' + number);  //何個目
    let correct_choice2 = document.getElementById('miss' + question_number + '_' + place);
    correct_choice2.classList.add("seikai");

    if (number == place) {
        let answer = document.getElementById('answer' + question_number);
        answer.style.display = "block";
    }
    else {
        clicked.classList.add("miss");
        let wrong_answer = document.getElementById('wrong_answer' + question_number);
        wrong_answer.style.display = "block";
    };
    // correct_choice2.classList.add("cantclick");
    first.classList.add("cantclick");
    second.classList.add("cantclick");
    third.classList.add("cantclick");


}












// miss1_1.onclick = function(){
//     // miss1_1.class ;
//     seikai1_1.classList.add("seikai") ;
//     miss1_1.classList.add("miss") ;
//     //押されたら不正解のdivを表示する
//     const answer = document.getElementById("wrong_answer");
//     answer.style.display ="block";
//     // (seikai1_1 && miss1_1 && miss1_2).classList.add("cantclick") ;
//     miss1_1.classList.add("cantclick") ;
//     miss1_2.classList.add("cantclick") ;
//     seikai1_1.classList.add("cantclick") ;
//     //&でつなげない

// }
// miss1_2.onclick = function(){
//     seikai1_1.classList.add("seikai") ;
//     miss1_2.classList.add("miss") ;
//     const answer = document.getElementById("wrong_answer");
//     answer.style.display ="block";
//     // (seikai1_1 && miss1_1 && miss1_2).classList.add("cantclick") ;
//     miss1_1.classList.add("cantclick") ;
//     miss1_2.classList.add("cantclick") ;
//     seikai1_1.classList.add("cantclick") ;
// }
// seikai1_1.onclick = function(){
//     seikai1_1.classList.add("seikai") ;
//     const answer = document.getElementById("answer");
//     answer.style.display ="block";
//     // (seikai1_1 && miss1_1 && miss1_2).classList.add("cantclick") ;
//     miss1_1.classList.add("cantclick") ;
//     miss1_2.classList.add("cantclick") ;
//     seikai1_1.classList.add("cantclick") ;
// }

// //TODO:tmlをjsに書き込む
