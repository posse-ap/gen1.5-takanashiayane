// 棒グラフ
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['1日', '2日', '3日', '4日', '5日', '6日', '7日', '1日', '2日', '3日', '4日', '5日', '6日', '7日', '1日', '2日', '3日', '4日', '5日', '6日', '7日'],
        datasets: [
            {
                label: 'C店 来客数',
                data: [33, 45, 62, 55, 31, 45, 38, 100],
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
                    stepSize: 10,
                    // callback: function (value, index, values) {
                    //     return value + '人'
                    // }
                }
            }]
        },
    }
});

// ドーナツグラフ 学習言語

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
            'Red',
            'Yellow',
            'Blue',
            'みきはる'
        ],
        position:"buttom"
    },
    options: {
        
        // cutout: 30,
        // pieceLabel: {
        //     render: 'percentage', // 表示対象 'label', 'value', 'percentage', 'image' 省略時 'percentage'
        //     precision: 0,         // percentageのときの小数点以下桁数 省略時 0
        //                      // 表示のフォント
        //     fontSize: 12,         // 文字サイズ 省略時 12
        //     fontColor: '#fff',    // 色 省略時 '#fff'。[配列]にして個別に変えることが可能
    
        //     fontStyle: 'normal',  // フォントPieceLabel
        //     fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
        //                      // 表示位置
        //     position: 'default', // 表示位置  'default'（グラフ内）, 'border'（周辺）'outside'（外） 省略時 'default'
            // arc: true,           // 'border'のとき、円弧に沿って表示するか 省略時 true  
            // outsidePadding: 4,   // 'outside'のとき、グラフとのパディング 省略時 4
        // }
    }
});
