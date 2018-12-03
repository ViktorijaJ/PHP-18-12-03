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

<h2>PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais. Išvesti kūno masės indeksą pagal formulę: KMI =
    svoris/(ugis*ugis).</h2>

<atsakymas>
    <?php
    $ugis = $_REQUEST["ugis"];
    $svoris = $_REQUEST["svoris"];

    echo "Jusu ugis: " . $ugis . ". Jusu svoris: " . $svoris . ". Jusu KMI yra: " . ($svoris / ($ugis * $ugis));

    ?>
</atsakymas>

</body>
</html>