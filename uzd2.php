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

<h2>Parasyti koda, kuris gauna per parametrus zodi ir atspausdna zodzio simboliu skaiciu.</h2>
<atsakymas>


<?php

$zodis = $_REQUEST ["zodis"];

$ilgis = strlen($zodis); //ras simboliu skaiciu

echo "Jusu pateiktas zodis $zodis turi $ilgis simbolius/-iu";

?>

</atsakymas>
</body>
</html>

