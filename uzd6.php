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
    svoris/(ugis*ugis). KMI skaičiavimas turi būti atskiroje funkcijoje.</h2>

<atsakymas>
    <?php


    function kmi($belekas1, $belekas2)
    {
        echo "Jusu ugis: " .$belekas1.". Jusu svoris: " .$belekas2. ". Jusu KMI yra: ".($belekas2 / ($belekas1 * $belekas1));
    }

    if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
        $ugis = $_REQUEST["ugis"];
        $svoris = $_REQUEST["svoris"];

        kmi($ugis,$svoris);
    }


    ?>

</atsakymas>

</body>
</html>