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
<h2>Sukurti puslapį, kuris paprašytų vartotojo įvesti žodžius, atskirtus kableliais. Paspaudus submit, įvesti žodžiai
    turi būti atvaizduojami, kiekvienas žodis naujoje eilutėje. Hint: "a,b".split(",") duoda ["a","b"], php: 💣</h2>

<form action="#" method="get">
    <input type="text" name="zodziai">
    <input type="submit">
</form>

<?php
if (isset($_REQUEST["zodziai"])) {
    echo "<atsakymas>";
    $zodziai = $_REQUEST["zodziai"];
    $masyvas = explode(",", $zodziai);
    foreach ($masyvas as $zodis) {
        echo "<br> $zodis";
    }
    echo "</atsakymas>";
}
?>
</body>
</html>