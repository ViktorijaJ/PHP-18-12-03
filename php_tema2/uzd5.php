<html>
<head>
    <?php
    // pradedam php sesija
    session_start();
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php
include("../fragments/menu2.php");
?>
<h2>Papildykite 4 programą kuri neleistų įvesti ne skaičius, jei vartotojas įveda ne skaičių programa prašo, kad įvestas
    ne skaičius.</h2>
<form action="#" method="get">
    <input type="text" name="sk">
    <input type="submit">
</form>
<?php
// sesijos kintamajam "sakinys" duodama pradine reiksme
if (!isset($_SESSION["suma"])) {
    $_SESSION["suma"] = 0;
}
if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";
    // pasiimam sk is request ir is teksto padarom skaiciu
    $sk = floatval($_REQUEST["sk"]);
    if ($sk != 0) {
        // jeigu sk ne 0, prideti prie sesijos kintamojo sk ir ji parodyti
        $_SESSION["suma"] += $sk;
        echo $sk;
    } else {
        // jeigu sk 0, parodyti kas saugoma sesijos sumoje ir valyti sesija
        echo "Suma: " . $_SESSION["suma"];
        $_SESSION["suma"] = 0;
    }
    echo "</atsakymas>";
}
?>
</body>
</html>
