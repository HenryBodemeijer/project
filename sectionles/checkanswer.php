<?php

$answer=  $_POST["answer"];

if (!isset($_SESSION)) {
    session_start();
}

if($answer == "Amsterdam"){
    $_SESSION["correct"] = true;
    //echo "goed";
}else{
    $_SESSION["correct"] = false;
    //echo "fout";
}

//



header("Location: user.php");

?>