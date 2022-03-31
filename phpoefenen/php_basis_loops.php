<?php

echo "Opdracht 1<br>";

$teller =("0");

$teller = 0;while($teller < 100) {echo $teller;$teller++;}



echo "<p>Opdracht 2<br></p>";
$teller =("100");

$teller = 100;while($teller > 0) {echo $teller;$teller--;}



echo "<p>Opdracht 3<br></p>";
$boodschappen = array("Melk", "Kaas", "Worst", "Brood", "Thee");
$zoek = "Worst";

for ($boodschappen = 10; $boodschappen < 100; $boodschappen++) {echo $boodschappen;}
if($boodschappen = $zoek){
    echo "$zoek staat op de lijst";
}




echo "<p>Opdracht 4<br></p>";

$totaal=("0");

for ($teller = 0; $teller < 1000; $teller++) {echo $teller;
$totaal =($totaal + $teller);}
echo"<br>";


echo"totaal=$totaal";


echo "<p>Opdracht 5<br></p>";
$teller = ("0");
$teller = 0;while($teller < 101){
if($teller++ %2!=0){
    echo $teller."<br>";}
}


echo "<p>Opdracht 6<br></p>";


$teller = ("0");
$teller = 0;while($teller < 101){
if($teller++ %2!=1){
    echo $teller."<br>";}
}



echo "<p>Opdracht 7<br></p>";
$starttime= microtime(true);


for ($number = 3; $number < 100; $number++) {

    if (is_prime($number)) {
        //echo $number;
        //echo "<br>";

    }

}
$endtime = microtime(true);
$eindtime = $endtime - $starttime;
echo "<br>tijd:$eindtime";


function is_prime($number){
    if ( $number == 1 ) {
        return false;
    }
    if ( $number == 2 ) {
        return true;
    }
    $x = sqrt($number);
    $x = floor($x);
    for ( $i = 2 ; $i <= $x ; ++$i ) {
        if ( $number % $i == 0 ) {
            break;
        }
    }
    if( $x == $i-1 ) {
        return true;
    } else {
        return false;
    }

}



echo "<p>Opdracht 9<br></p>";

$list = array("auto", "fiets", "trein","driewieller","vliegtuig");
foreach($list as $transport) {echo "$transport<br>";}

echo "<p>Opdracht 10<br></p>";
$n=5;
for($i=1; $i<=$n; $i++)
{
for($j=1; $j<=$i; $j++)
{
echo " * ";
}
echo "<br>";
}





?>