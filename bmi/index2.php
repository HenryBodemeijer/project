<?php
$name = $_POST['naam'];
$age = $_POST['leeftijd'];
$height = $_POST['lengte'];
$weight = $_POST['gewicht'];
$bmi = $weight / (($height / 100) * ($height / 100));


echo "Hallo $name $age jaar <br> "; 
if ($bmi > 18 && $bmi < 25){
    echo 'U heeft goed gewicht <br>';
} else if($bmi < 18){
    echo 'U heeft ondergewicht <br>';
} else if($bmi > 25 && $bmi < 40){
    echo 'U bent overgewicht <br>';
} else if($bmi > 40){
    echo 'U bent ZWAAR overgewicht (Obesitas) <br>';
}
 echo round($bmi. 1);

?>