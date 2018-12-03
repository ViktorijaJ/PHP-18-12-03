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

<h2>PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais. Apskaičiuoti, kiek vidutiniškai sunaudojama
    kuro 100-tui kilometrų pagal formulę: vidurkis = litrai * 100 / atstumo. Kintamuosius iš $_REQUEST pasiimti vienoje
    funkcijoje, o skaičiavimą atlikti kitoje.</h2>

<atsakymas>
    <?php
    function skaiciavimas($bele1, $bele2)
    {
        $vidur = ($bele1 * 100) / $bele2;
        echo "Jusu sunaudotas kuro kiekis: " . $bele1 . "l., nuvaziuotas atstumas: " . $bele2 . "km., vidutinskai automobilio sunaudojamas kuro kiekis: " . $vidur . " l/km.";
    }

    function nuskaityti()
    {
        if (isset($_REQUEST["litrai"]) && isset($_REQUEST["km"])) {
            $litrai = $_REQUEST["litrai"];
            $km = $_REQUEST["km"];

            skaiciavimas($litrai, $km);
        }
    }

    nuskaityti();

    ?>
</atsakymas>

</body>
</html>