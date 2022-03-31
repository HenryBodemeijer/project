<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkanswer.php" method="POST">
        <label>Hoofdstad van Nederland?</label>
        <input type="text" name="answer"></input>
        <input type="submit"></input>
    </form>

<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["correct"])) {
    if ($_SESSION["correct"] == true) {
        echo "Goed";
    } else {
        echo "fout"; 
    }
}
?>
</body>
</html>