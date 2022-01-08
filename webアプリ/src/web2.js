'use strict'


// 棒グラフ

console.log(day_hour_sum);
// let date_array = [];
// for(let i=1;i<=day;i++){
//     date_array.push(i);
// }
console.log(date_array);
var day_array=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];


// day_arr.splice(day-1, 0, 'AAA', 'BBB', 'CCC');

var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: date_array,
        datasets: [
            {
                label: 'C店 来客数', 
                data: [],
                backgroundColor: "rgba(130,201,169,0.5)"
            }
        ]
    },
    options: {
        title: {
            display: true,
            // text: '支店別 来客数'
        },
        scales: {
            yAxes: [{
                ticks: {
                    suggestedMax: 120,
                    suggestedMin: 0,
                    stepSize: 10
                    // callback: function (value, index, values) {
                    //     return value + '人'
                    // }
                }
            }]
        },
    }
});

// ドーナツグラフ 学習言語
Chart.plugins.register({
    afterDatasetsDraw: function (chart, easing) {
        // To only draw at the end of animation, check for easing === 1
        var ctx = chart.ctx;

        chart.data.datasets.forEach(function (dataset, i) {
            var meta = chart.getDatasetMeta(i);
            if (!meta.hidden) {
                meta.data.forEach(function (element, index) {
                    // Draw the text in black, with the specified font
                    ctx.fillStyle = 'rgb(255, 255, 255)';

                    var fontSize = 16;
                    var fontStyle = 'normal';
                    var fontFamily = 'Helvetica Neue';
                    ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                    // Just naively convert to string for now
                    var dataString = dataset.data[index].toString();

                    // Make sure alignment settings are correct
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';

                    var padding = 3;
                    var position = element.tooltipPosition();
                    ctx.fillText(dataString + "%", position.x, position.y - (fontSize / 2) - padding);
                });
            }
        });
    }
});
var ctx = document.getElementById("myDoughnutChart");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            backgroundColor: [
                "#0740F5",
                "#0572C3",
                "#0AD2FF",
                "#e6b422"
            ],
            data: [45, 32, 18, 5],//グラフのデータ
            cutoutPercentage: 30
        }],
        labels: [
            'HTML',
            'CSS',
            'Javascript',
            'PHP'
        ],

    },
    options: {
        responsive: true,
        // maintainAspectRatio: false,
        legend: {
            position: "bottom"
        }
    }
});

Chart.plugins.register({
    afterDatasetsDraw: function (chart, easing) {
        // To only draw at the end of animation, check for easing === 1
        var ctx = chart.ctx;

        chart.data.datasets.forEach(function (dataset, i) {
            var meta = chart.getDatasetMeta(i);
            if (!meta.hidden) {
                meta.data.forEach(function (element, index) {
                    // Draw the text in black, with the specified font
                    ctx.fillStyle = 'rgb(255, 255, 255)';

                    var fontSize = 16;
                    var fontStyle = 'normal';
                    var fontFamily = 'Helvetica Neue';
                    ctx.font = Chart.helpers.fontString(fontSize, fontStyle, fontFamily);

                    // Just naively convert to string for now
                    var dataString = dataset.data[index].toString();

                    // Make sure alignment settings are correct
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';

                    var padding = 3;
                    var position = element.tooltipPosition();
                    ctx.fillText(dataString + "%", position.x, position.y - (fontSize / 2) - padding);
                });
            }
        });
    }
});
var ctx = document.getElementById("myDoughnutChart2");
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        datasets: [{
            backgroundColor: [
                "#0740F5",
                "#0572C3",
                "#0AD2FF"
            ],
            data: [50, 32, 18],//グラフのデータ
            cutoutPercentage: 30
        }],
        labels: [
            'N予備',
            'ドットインストール',
            'POSSE課題'
        ],

    },
    options: {
        responsive: true,
        // maintainAspectRatio: false,
        legend: {
            position: "bottom"
        }
    }
});

function modal() {
    var modal = document.getElementById('modal');
    if (!modal) return;

    var blackBg = document.getElementById('modal_black_bg');
    var closeBtn = document.getElementById('modal_close_btn');
    var showBtn = document.getElementById('modal_open_btn');

    closePopUp(blackBg);
    closePopUp(closeBtn);
    closePopUp(showBtn);
    function closePopUp(elem) {
        if (!elem) return;
        elem.addEventListener('click', function () {
            modal.classList.toggle('is-show');

        });

    }
}
modal(); 


// function modal_change(){
//     let modal1 =document.getElementById("modal1");
//     let modal2 =document.getElementById("modal2");
//     modal1.style.display="none";
//     modal2.style.display="block";
// }
modal_check_btn.onclick =function(){
    let modal1 =document.getElementById("modal1");
    let modal2 =document.getElementById("modal2");
    modal1.style.display="none";
    modal2.style.display="block";
}