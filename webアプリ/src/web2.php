<?php
// include('./dbconnect.php');
include($_SERVER['DOCUMENT_ROOT'] . "/dbconnect.php");

$stmt = $db->query("SELECT sum(hour) FROM logs WHERE date=CURDATE()");
$today_hour = $stmt->fetchAll();
$stmt = $db->query("SELECT sum(hour) FROM logs WHERE DATE_FORMAT(date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')");
$month_hour = $stmt->fetchAll();
$stmt = $db->query("SELECT sum(hour) FROM logs");
$all_hour = $stmt->fetchAll();
// $stmt= $db ->query("SELECT sum(hour) FROM logs GROUP BY CURDATE()");
// $day_hour=$stmt->fetchAll();
$stmt = $db->query("SELECT DATE_FORMAT(date, '%Y%m%d') AS time,  SUM(hour) AS sum FROM logs WHERE DATE_FORMAT(date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m') GROUP BY DATE_FORMAT(date, '%Y%m%d')");
$day_hour = $stmt->fetchAll();
// foreach($day_hour as $day_hour){
//     $day_hour_sum[]=$day_hour["sum"];
// };
$day_hour_sum =array_column( $day_hour, "sum" ) ;


$day=date('t');

// $month_day[]
// print_r($day_hour_sum);
// print_r($day_hour_sum);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webアプリ</title>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="web2.css">
    <!-- 棒グラフ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <!-- ドーナツグラフ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
</head>

<body>
    <header>
        <div class="header_left">
            <img src="./img/posselogoss.png" alt="posseのロゴ" class="header_img">
            <p class="week">4th week
                <p>
        </div>
        <button class="button" id="modal_open_btn">記録・投稿</button>
    </header>
    <main>
        <div class="container">
            <div class="left">
                <div class="boxes">
                    <div class="box">
                        <p class="period">Today</p>
                        <p class="number"><?php echo $today_hour[0][0]??0;?></p>
                        <p class="hour">hour</p>

                    </div>
                    <div class="box">
                        <p class="period">Month</p>
                        <p class="number"><?php if ($month_hour[0][0] == null) {
                                                echo '0';
                                            } else {
                                                echo ($month_hour[0][0]);
                                            } ?></p>
                        </p>
                        <p class="hour">hour</p>
                    </div>
                    <div class="box">
                        <p class="period"> Total</p>
                        <p class="number"><?php if ($all_hour[0][0] == null) {
                                                echo '0';
                                            } else {
                                                echo ($all_hour[0][0]);
                                            } ?></p>
                        <p class="hour">hour</p>
                    </div>
                </div>
                <div class="pin_graf">
                    <canvas id="myBarChart"></canvas>

                </div>
            </div>
            <div class="right">
                <div class="right_box">
                    <p class="contents_name">学習言語</p>
                    <canvas id="myDoughnutChart" width="100" height="100">
                    </canvas>
                </div>
                <div class="right_box">
                    <p class="contents_name">学習コンテンツ</p>
                    <canvas id="myDoughnutChart2" width="100" height="100">
                    </canvas>
                </div>
            </div>
        </div>


        <!-- モーダル -->
        <div class="popup" id="modal">
            <div class="popup-inner">
                <div class="close-btn" id="modal_close_btn"><i class="fas fa-times"></i></div>
                <div class="modal1" id="modal1">
                    <div class="modal_wrap">
                        <div class="modal_left">
                            <div class="modal_left_wrap">
                                <label class="label_name">学習日</label>
                                <input class="date_input_area" type="date">

                                <label class="label_name">学習コンテンツ（複数選択可）</label>
                                <div class="lists">
                                    <label class="list">
                                        <input type="checkbox" class="checkbox">
                                        <span class="checkbox_fontas"></span>N予備<br>
                                    </label>
                                    <label class="list">
                                        <input type="checkbox" class="checkbox">
                                        <span class="checkbox_fontas"></span>ドットインストール<br>
                                    </label>
                                    <label class="list">
                                        <input type="checkbox" class="checkbox">
                                        <span class="checkbox_fontas"></span>POSSE課題
                                    </label>
                                </div>

                                <label class="label_name">学習言語（複数選択可）</label>
                                <div class="lists">
                                    <label class="list">
                                        <input type="checkbox" class="checkbox">
                                        <span class="checkbox_fontas"></span>HTML
                                    </label>
                                    <label class="list">
                                        <input type="checkbox" class="checkbox">
                                        <span class="checkbox_fontas"></span>CSS
                                    </label>
                                    <label class="list">
                                        <input type="checkbox" class="checkbox">
                                        <span class="checkbox_fontas"></span>Javascript
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal_right">
                            <div class="modal_left_wrap">
                                <p>学習時間</p>
                                <input class="hour_input_area" type="tel">

                                <p>Twitter用コメント</p>
                                <textarea maxlength="140"></textarea>
                            </div>
                            <label>
                                <input type="checkbox" class="twitterCheckbox">
                                <span class="twitterCheckbox_fontas"></span>Twitterに自動投稿する
                            </label>
                        </div>
                    </div>
                    <button class="modal_check_btn" id="modal_check_btn" data-target="#modal2" onclick="modal_change()">記録・投稿</button>
                </div>
                <div class="modal2" id="modal2">
                    <p>成功！</p>
                </div>
            </div>
            <div class="black-background" id="nodal_black_bg"></div>
        </div>
    </main>
    <footer>
    </footer>
    <script>
        // const hoge = JSON.parse('<?php echo $today_hour ?>');
        const day_hour_sum = JSON.parse('<?php echo json_encode($day_hour_sum) ?>');
        const day = date('t');
    </script>
    <script src="web2.js"></script>
    <!-- <script src="chart.php" type="text/javascript"></script> -->

</body>

</html>