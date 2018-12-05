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

<h2>Sukurti puslapi, kuris leistu vartotojui ivesti norima skaiciu ir po to parasytu ar sis skaicius yra lyginis ar
    nelyginis. Uzuomina: panaudokite % ir operatoriu.</h2>

<form action="#" method="get">

    <input type="text" name="sk">
    <input type="submit">

</form>

<?php

//dvitaskis vietoj {, pabaigoj php rasom endif;


if (isset($_REQUEST["sk"])) {
echo "<atsakymas>";

$skaicius = $_REQUEST["sk"];
if ($skaicius % 2 == 0) {
    echo "$skaicius yra lyginis";
} else {
    echo "$skaicius yra nelyginis";
}

echo "</atsakymas>";

} ?>

</body>
</html>
