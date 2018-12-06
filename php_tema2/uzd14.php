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
<h2>Parašyti metodą kuris per parametrus pasiimtų masyvą, o grąžintų apsuktą masyvą ([1, 2, 3, 4, 5] -> [5, 4, 3, 2,
    1]). Užuomina: sukurti antrą tokio paties dydžio masyvą ir jam priskirti skaičius nuo galo.</h2>

<form action="#" method="get">
    <input type="text" name="skaiciai" placeholder="Iveskite skaicius, atskirtus kableliais">
    <input type="submit">
</form>
<?php

if (isset($_REQUEST["skaiciai"])) {
    echo "<atsakymas>";
    $skaiciai = $_REQUEST["skaiciai"];
    $masyvas = explode(",", $skaiciai);
    $naujasMas = [];

    for ($i = 0; $ <count($skaiciai);$i++) {
        $naujasMas[count($masyvas)-1 -$i]= $masyvas[$i];
    }
    echo "<br>";
    print_r($masyvas);
    echo "<br>";
    echo "<br>";
    print_r($naujasMas);
    echo "</atsakymas>";
    }
    ?>
</body>
</html>