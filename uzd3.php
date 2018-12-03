
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
<atsakymas>
<?php

$sk1 = $_REQUEST["a"];
$sk2 = $_REQUEST["b"];

echo "Jusu skaiciu $sk1 ir $sk2 suma: ".($sk1 + $sk2)." , skirtumas: ".($sk1 - $sk2);


?>
</atsakymas>
</body>
</html>
