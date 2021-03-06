<?php
date_default_timezone_set('Europe/Amsterdam');

$year = (isset($_GET['year'])) ? $_GET['year'] : date("Y");
$week = (isset($_GET['week'])) ? $_GET['week'] : date('W');
if($week > 52) {
    $year++;
    $week = 1;
} elseif($week < 1) {
    $year--;
    $week = 52;
}

$today = date('Y-m-j');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <ul class="navbar">     
            <li class="nav"><a href="agenda.php">maand</a></li>
            <li class="nav"><a href="agendaweek.php" class="active">week</a></li>
            <li class="nav"><a href="dag.php">dag</a></li>
            <li class="nav"><a href="afspraken.php">afspraken</a></li>
            <li class="nav"><a href="index.html">Home</a></li>
        </ul>
    <div>
<ul class="list-inline">
<li class="list-inline-item"><a href="<?php echo $_SERVER['PHP_SELF'].'?week='.($week == 1 ? 52 : $week -1).'&year='.($week == 1 ? $year - 1 : $year); ?>">vorige week</a></li>
<li class="list-inline-item"><a href="<?php echo $_SERVER['PHP_SELF'].'?week='.($week == 52 ? 1 : 1 + $week).'&year='.($week == 52 ? 1 + $year : $year); ?>">volgende week</a></li>
</ul>
</div>
<table class="table">
    <tr>
<?php
if($week < 10) {
    $week = '0'. $week;
}
for($day= 1; $day <= 7; $day++) {
    $d = strtotime($year ."W". $week . $day);

    echo "<td>". date('l', $d) ."<br>". date('d M', $d) ."</td>";
}
?>
    </tr>
</table>
</div>
</body>
</html>
