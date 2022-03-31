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
        <li><a href="Bmi.html" class="active">BMI calc.</a></li>
        <li><a href="informatie.html">Informatie</a></li>
        <li><a href="vragenlijst.html">vragenlijst</a></li>
    </ul>
</div>
<div id="bmiresultaten">
    <h1 id="bmititel">BMI resultaten</h1>
<?php
$name = $_POST['naam'];
$age = $_POST['leeftijd'];
$height = $_POST['lengte'];
$weight = $_POST['gewicht'];
$bmi = $weight / (($height / 100) * ($height / 100));


echo "Hallo $name $age jaar <br> "; 

 echo "Uw heeft een BMI van:  ";
 echo round($bmi. 1);

if ($bmi > 18 && $bmi < 25){
    echo '<br> U heeft goed gewicht <br>
    blijf vooral gezond eten en sport ook genoeg. <br> 
    Zodat u een goed gewicht behoud.<br>';
} else if($bmi < 18){
    echo '<br> U heeft ondergewicht <br>
    Uw gewicht is veel te laag blijf genoeg eten. <br>
    Te weinig eten is niet goed voor je zorg ervoor dat je weer een goed gewicht behaald. <br>
    Je kan ook de hulp van een hulpverlener vragen als het niet lukt <br>';
} else if($bmi > 25 && $bmi < 40){
    echo '<br> U heeft overgewicht <br>
    U heeft een te hoog gewicht eet niet te veel.<br>
    Als je te veel eet wordt je te dik dus eet minder, maar niet te weinig.<br>
    Ook kan je gaan afvallen door te gaan lijnen.<br>
    Sporten help ook om aftevallen en je wordt er ook fitter van.<br>';
} else if($bmi > 40){
    echo '<br>U heeft ZWAAR overgewicht (Obesitas) <br>
    Uw gewicht is veel te hoog <br>
    Overgewicht en obesitas verhogen het risico op hart- en vaatziekten, <br>
    maar ook op spier- en skeletaandoeningen en bepaalde vormen van kanker.<br>
    Ga op dieet en blijf vooral veel bewegen om af tevallen. <br>
    Het zal niet gelijk helpen maar als je er lang mee door blijft gaan val je heel veel af.
    Ook kan je om de hulp van een hulpverlener vragen als het je echt niet lukt. ';
}


?>
</div>    
</body>
<footer>
    <ul id="terug">
        <li><a href="bmi.html">Terug</a></li>
    </ul>
</footer>
</html>
