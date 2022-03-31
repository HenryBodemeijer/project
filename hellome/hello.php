<html>
<head>
    <title>Formulie output</title>
</head>
<body>

<h2>Je invoer</h2>

<?php

$voornaam = $_Post['voornaam'];
$achternaam = $_Post['achternaam'];
$leeftijd = $_Post['leeftijd'];

echo "Hallo $voornaam $achternaam";
<br>
echo "leeftijd $leeftijd";
<br>

echo "goedendag";
?>