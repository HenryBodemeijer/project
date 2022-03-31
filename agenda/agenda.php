<?php
date_default_timezone_set('Europe/Amsterdam');

if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    $ym = date('Y-m');
}

$timestamp = strtotime($ym . '-01');  // the first day of the month
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}


$today = date('Y-m-j');

// Title (Format:August, 2018)
$title = date('F, Y', $timestamp);

// Create prev & next month link
$vorige = date('Y-m', strtotime('-1 month', $timestamp));
$volgende = date('Y-m', strtotime('+1 month', $timestamp));

// Number of days in the month
$day_count = date('t', $timestamp);

// 1:Mon 2:Tue 3: Wed ... 7:Sun
$str = date('N', $timestamp);

// Array for calendar
$weeks = [];
$week = '';

// Add empty cell(s)
$week .= str_repeat('<td></td>', $str - 1);

for ($day = 1; $day <= $day_count; $day++, $str++) {

    $date = $ym . '-' . $day;

    if ($today == $date) {
        $week .= '<td class="today">';
    } else {
        $week .= '<td>';
    }
    $week .= $day . '</td>';

    if ($str % 7 == 0 || $day == $day_count) {

        
        if ($day == $day_count && $str % 7 != 0) {
            
            $week .= str_repeat('<td></td>', 7 - $str % 7);
        }

        $weeks[] = '<tr>' . $week . '</tr>';

        $week = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calendar</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <ul class="navbar">     
            <li class="nav"><a href="agenda.php" class="active">maand</a></li>
            <li class="nav"><a href="agendaweek.php">week</a></li>
            <li class="nav"><a href="dag.php">dag</a></li>
            <li class="nav"><a href="afspraken.php">afspraken</a></li>
            <li class="nav"><a href="index.html">Home</a></li>
        </ul>
    
        <div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="?ym=<?= $vorige; ?>" class="btn btn-link">&lt; vorige</a></li>
            <li class="list-inline-item"><span class="title"><?= $title; ?></span></li>
            <li class="list-inline-item"><a href="?ym=<?= $volgende; ?>" class="btn btn-link">volgende &gt;</a></li>
        </ul>
        </div>
        <table class="table">
                <tr>
                    <th>M</th>
                    <th>D</th>
                    <th>W</th>
                    <th>D</th>
                    <th>V</th>
                    <th>Z</th>
                    <th>Z</th>
                </tr>
                <?php
                    foreach ($weeks as $week) {
                        echo $week;
                    }
                ?>          
        </table>
    </div>
</body>
</html>