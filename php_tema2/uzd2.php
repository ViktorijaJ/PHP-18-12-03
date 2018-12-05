<html>
<head>
    <?php
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php
include("../fragments/menu2.php");
?>

<h2>Sukurti puslapį, kuris paprašytų sveiko skaičiaus ir pasakytų ar tas skaičius dalijasi iš 3 arba 5 arba 7.</h2>

<h4>Iveskite skaiciu:</h4>

<form action="#" method="get">
    <input type="text" name="sk" placeholder="Iveskite skaiciu">
    <input type="submit">
</form>

<?php

if (isset($_REQUEST["sk"])) {
    echo "<atsakymas>";

    $skaicius = $_REQUEST["sk"];
    if ($skaicius % 3 == 0) {
       echo "<br> Skaicius $skaicius dalinasi is 3";
    }
    if ($skaicius % 5 == 0) {
        echo "<br> Skaicius $skaicius dalinasi is 5";
    }
    if ($skaicius % 7 == 0) {
        echo "<br> Skaicius $skaicius dalinasi is 7";
    }

    echo "</atsakymas>";

} ?>
</body>
</html>

