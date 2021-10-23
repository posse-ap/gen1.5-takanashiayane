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
            'Red',
            'Yellow',
            'Blue',
            'みきはる'
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
                "#0AD2FF",
                "#e6b422"
            ],
            data: [45, 32, 18, 5],//グラフのデータ
            cutoutPercentage: 30
        }],
        labels: [
            'N予備',
            'ドットインストール',
            'Blue',
            'みきはる'
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