<?php include "includes/header.php";

$pagina = $_GET['pagina'];

if ($pagina == "home") {
    include "index.php";
}

if ($pagina == "camera") {
    include "camera.php";
}

if ($pagina == "koelkasten") {
    include "koelkasten.php";
}

if ($pagina == "lampen") {
    include "lampen.php";
}

if ($pagina == "stereo") {
    include "stereo.php";
}

if ($pagina == "wasmachines") {
    include "wasmachines.php";
}
?>

<h1>include opdracht</h1>

<?php include "includes/buttens.php"; ?>
 
<?php include "includes/footer.php"; 
 
?>