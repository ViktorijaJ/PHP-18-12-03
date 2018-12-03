<html>
<head>
    <?php
    include("fragments/styles.php");
    ?>
</head>

<body>
<?php

include("fragments/menu.php");
?>

<h2>PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais, apskaičiuoti kiek vidutiniškai sunaudojama kuro
    100-tui kilometrų pagal formulę: Vidurkis = litrai * 100 / atstumo.</h2>

<atsakymas>
    <?php
    $litrai = $_REQUEST["litrai"];
    $km = $_REQUEST["km"];

    echo "Jusu sunaudotas kuro kiekis: " . $litrai . "l., nuvaziuotas atstumas: " . $km . "km., vidutinskai automobilio sunaudojamas kuro kiekis: " . (($litrai * 100) / $km)." l/km.";
    ?>
</atsakymas>

</body>
</html>