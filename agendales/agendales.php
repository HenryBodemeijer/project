<?php

echo "agenda les";
echo "<br>";

$var1 = [];
$var1[] = "Amsterdam"; 
$var1[] = "Nederland"; 
$var1[] = "700000"; 

$hoofdstad0 = [
    "Amsterdam",
    "Nederland",
    700000
];
//echo $hoofdstad0[2];
//echo "<br>";
$hoofdstad1 = [
    "naam" => "Amsterdam",
    "land" => "Nederland",
    "inwoners" => 700000
];
//echo "<br>";
$hoofdstad2 = [
    "naam" => "Parijs",
    "land" => "Frankrijk",
    "inwoners" => 2000000
];
//echo $hoofdstad1["inwoners"];

$hoofdsteden = [];
$hoofdsteden[] = $hoofdstad1;
$hoofdsteden[] = $hoofdstad2;

//echo "<br>";
//print_r ($hoofdsteden);
echo "<br>";
$json = json_encode($hoofdsteden);
file_put_contents("data.txt", $json);

$json2 = file_get_contents("data.txt");
$hoofdsteden2 = json_decode($json2, true);
print_r ($hoofdsteden2);