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

<h2>Parasyti koda, kuris gauna per parametrus skaicius ir atspausdina ju suma.</h2>
<atsakymas><?php


    function suma($belekoks1, $belekoks2)
    {
        echo "$belekoks1 ir $belekoks2 suma yra: " . ($belekoks1 + $belekoks2)."<br>";
    }

    function skirtumas($belekoks1, $belekoks2)
    {
        echo "$belekoks1 ir $belekoks2 skirtumas yra: " . ($belekoks1 - $belekoks2)."<br>";
    }

    if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
        $a = $_REQUEST["a"];
        $b = $_REQUEST["b"];

        suma($a, $b);
        skirtumas($a, $b);
    }

    ?></atsakymas>
</body>
</html>
