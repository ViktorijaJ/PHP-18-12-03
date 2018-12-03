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

<h2>Pasinaudojant forma parašyti skaičiuotuvą, kuris atlieka dviejų skaičių sumą, skirtumą, sandaugą, dalybą.</h2>

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

    echo "Jusu sunaudotas kuro kiekis: " . $GLOBALS['litrai'] . "l., nuvaziuotas atstumas: " . $GLOBALS['km'] . "km., vidutinskai automobilio sunaudojamas kuro kiekis: " . $GLOBALS['vidur'] . " l/km.";

    ?>
</atsakymas>

</body>
</html>