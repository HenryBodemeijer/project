<?php 

$student_naam = "Johannes";
$student_leeftijd = "17";
$student_nummer = "103";
$student_klas = "2A";
$vak = "Nederlands";
$cijfer = "8.5";

echo "<h2>Mijn variabelen</H2>";
echo "Naam: " . $student_naam;
echo "<br>";
echo "Leeftijd: " . $student_leeftijd;
echo "<br>";
echo "Nummer: " . $student_nummer;
echo "<br>";
echo "Klas: " . $student_klas;
echo "<br>";
echo "Vak: " . $vak;
echo "<br>";
echo "Cijfer: " . $cijfer;
echo "<br>";
echo "<br>";

$bedrag = "120";
$korting = "10";
$eindbedrag = $bedrag - $korting;
echo $eindbedrag;

$huurbedrag = "85";
$dagen = "20";
echo "<br>";
echo "<br>";
echo "Het huurbedrag is: " . $huurbedrag;
echo "<br>";
echo "De duur is: " . $dagen;
echo "<br>";
echo "De totale kosten zijn: " . $huurbedrag * $dagen;
echo "<br>";
echo "<br>";

if ($student_leeftijd <18) {
    echo "leerplichtig";
} else if ($student_leeftijd >18) {
    echo "niet leerplichtig";
}
echo "<br>";
echo "<br>";

if ($cijfer >5.5) {
    echo "voldoende";
} else if ($cijfer <5.5) {
    echo "onvoldoende";
}

echo "<br>";
echo "<br>";
$snelheid = 140;
$max_snelheid = 130;

if ($snelheid > $max_snelheid) {
    echo "Helaas, u heeft een boete";
} else if ($snelheid <= $max_snelheid) {
    echo "Prime, uw snelheid was lager of gelijk aan de maximum snelheid";
}
echo "<br>";
echo "<br>";

$tijd = date('H');
if ($tijd> 20) {
    echo "goedenavond";
} else if ($tijd < 12) {
    echo "goedemorgen";
} else if ($tijd <12 && $tijd >20){
    echo "goedemiddag";
}
echo "<br>";
echo "<br>";

$maand = date('M');
echo $maand




?>