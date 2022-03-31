<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <ul class="navbar">
            <img id="logo" src="Afbeeldingen/logo.png" alt="logo">
            <li><a href="index.html">Home</a></li>
            <li><a href="recepten.html">recepten</a></li>
            <li><a href="Bmi.html">BMI calc.</a></li>
            <li><a href="informatie.html">Informatie</a></li>
            <li><a href="vragenlijst.html" class="active">vragenlijst</a></li>
            
        </ul>
    </div>
    <div id="vragenlijstresultaten">
        <h1>Vragenlijst resultaten</h1>
    

    <?php
$fruit = $_POST['fruit'];
$kantine = $_POST['kantine'];
$etenkantine = $_POST['etenkantine'];
$frisdrank = $_POST['frisdrank'];
$ontbijt = $_POST['ontbijt'];
$eten = $_POST['eten'];
$bmi = $_POST['bmi'];
$score = $fruit + $kantine + $etenkantine + $frisdrank + $ontbijt + $eten + $bmi;




echo"Bedankt voor het invoeren van de vragenlijst.<br> u score van  $score <br>";
if($score == 7){
    echo"Dat is het laagste mogelijk dat je kan krijgen. <br> U bent erg ongezond";
}

if($score >7 && $score <12){
    echo"Dat is een erge lage score. <br> U bent erg ongezond u kan beter wat gezonder gaan leven";
}

if($score >11 && $score <18){
    echo"U score is erg gemmiddeld. <br> U bent niet erg gezond, maar ook niet erg ongezond. <br> U kunt nog altijd gezonder gaan leven";
}

if($score >17 && $score <21){
    echo"U heeft een erg hoge score. <br> U heeft bijna het hoogst. <br> U bent best gezond ga zo door.";
}

if($score == 21){
    echo"U heeft de allerhoogste score. <br> u bent erg gezond blijf zo leven en dan blijf je gezond";
}

?>

    </div>
    
</body>
<footer>
    <ul class="terug">
        <li><a href="vragenlijst.html">Terug</a></li>
    </ul>
</footer>
</html>

