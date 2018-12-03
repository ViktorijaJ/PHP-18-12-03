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
    100tui kilometrų pagal formulę: vidurkis = litrai * 100 / atstumo. Kintamuosius iš $_REQUEST pasiimti vienoje
    funkcijoje, o skaičiavimą atlikti kitoje. Abi funkcijas parašyti be parametrų ir pasidėti reikšmes į globalius
    kintamuosius, naudoti $_GLOBALS</h2>

<atsakymas>
    <?php
    function nuskaityti()
    {
        $GLOBALS['litrai'] = $_REQUEST["litrai"];
        $GLOBALS['km'] = $_REQUEST["km"];

    }

    function skaiciavimas()
    {
        $GLOBALS['vidur'] = ($GLOBALS['litrai'] * 100) / $GLOBALS['km'];
    }

    nuskaityti();
    skaiciavimas();

    echo "Jusu sunaudotas kuro kiekis: " . $GLOBALS['litrai'] . "l., nuvaziuotas atstumas: " . $GLOBLS['km'] . "km., vidutinskai automobilio sunaudojamas kuro kiekis: " . $GLOBALS['vidur'] . " l/km.";

    ?>
</atsakymas>

</body>
</html>