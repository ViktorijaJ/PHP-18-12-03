


<?php

include("fragments/menu.php");

// Parasyti koda, kuris gauna per parametrus du skaicius ir atspausdina ju suma.

$sk1 = $_REQUEST["a"];
$sk2 = $_REQUEST["b"];


$suma = $sk1 + $sk2; //ras skaiciu suma
$skirtumas = $sk1 - $sk2; //ras skaiciu skirtuma

echo "Jusu skaiciu $sk1 ir $sk2 suma: $suma , skirtumas: $skirtumas";

?>