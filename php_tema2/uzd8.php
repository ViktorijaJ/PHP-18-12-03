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
<h2>Sukurti puslapį, kuris leistų įvesti skaičius atskirtus kableliais. Paspaudus submit, atvaizduoti tik tuos skaičius
    kurie buvo didesni nei 100.</h2>

<form action="#" method="get">
    <input type="text" name="skaiciai">
    <input type="submit">
</form>
<?php
// patikrinti ar request viduje yra kintamasis skaiciai
if (isset($_REQUEST["skaiciai"])) {
    echo "<atsakymas>";
    // jeigu yra kintamasis skaiciai, panaudoti bomba kad gauti skaiciu masyva
    $masyvas = explode(",", $_REQUEST["skaiciai"]);
    // pereiti per masyva ir imti elementa po viena
    foreach ($masyvas as $elementas) {
        // paemus masyvo elementa paversi ji skaicium ir pasideti i kintamaji sk
        $sk = floatval($elementas);
        // ar sk didesnis nei 100
        if ($sk > 100) {
            // atvaizduoti sk didesnius nei 100
            echo "<br> $sk";
        }
        echo "</atsakymas>";
    }
}
?>
</body>
</html>