<html>
<head>
    <?php
    include("fragments/styles.php");
    ?>
</head>

<body>
<?php

include("fragments/menu.php");

$a = isset ($_REQUEST["a"]) ? $_REQUEST["a"] : "";
$b = isset ($_REQUEST["b"]) ? $_REQUEST["b"] : "";
?>
<h2>Pasinaudojant forma parašyti skaičiuotuvą, kuris atlieka dviejų skaičių sumą, skirtumą, sandaugą, dalybą.</h2>

<form method="get" action="uzd10.php">
    <input type="text" name="a" placeholder="Iveskite skaiciaus a reiksme" value="<?php echo $a; ?>">
    <input type="text" name="b" placeholder="Iveskite skaiciaus b reiksme" value="<?php echo $b; ?>">

    <input type="button">
    <input type="submit" value="action">

</form>
<atsakymas> <?php
    if (isset($_REQUEST["a"]) && isset ($_REQUEST["b"]) && isset ($_REQUEST["action"]))

    ?></atsakymas>

</body>
</html>