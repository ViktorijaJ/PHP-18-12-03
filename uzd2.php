<?php

include("fragments/menu.php");

// Parasyti koda, kuris gauna per parametrus zodi r atspausdna zodzio simbolu skaiciu..

$zodis = $_REQUEST ["zodis"];

$ilgis = strlen($zodis); //ras simboliu skaiciu

echo "Jusu pateiktas zodis $zodis turi $ilgis simbolius/-iu";

?>