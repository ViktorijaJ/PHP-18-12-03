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
<h2>Parašyti metodą kurio parametras būtų sveikų skaičių masyvas. Metodas turi grąžinti mažiausią masyvo skaičių.</h2>

<?php

echo "<atsakymas>";
$masyvas = [66, 32, 3, 4, 6, 30, 3, 56, 7, 9];
$minNumber = $masyvas[0];
foreach ($masyvas as $theLegend27) {
    if ($theLegend27 < $minNumber) {
        $minNumber = $theLegend27;
    }
}
print_r($masyvas);
echo "<br>";
echo "Maziausias skaicius yra: $minNumber";
echo "</atsakymas>";
?>
</body>
</html>