<html>
<head>
    <?php
    //pradedam php sesija
    session_start();
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php
include("../fragments/menu2.php");
?>

<h2>Sukurti puslapį, kuris paprašytų vartotojo įvesti žodį ir jį atvaizduotų. Jei vartotojas įveda žodį "pabaiga"
    puslapis parodo visus įvestus žodžius.</h2>

<h4>Iveskite zodi:</h4>

<form action="#" method="get">
    <input type="text" name="zodis" placeholder="Iveskite zodi"> <br>
    <input type="checkbox" name="clean">Valyti sesija <br>
    <input type="submit">

</form>

<?php
if (!isset($_SESSION["sakinys"])) {
    $_SESSION["sakinys"] = "";
}

if (isset($_REQUEST["zodis"])) {
    echo "<atsakymas>";

    $zodis = $_REQUEST["zodis"];
    if ($zodis != "pabaiga") {
        $_SESSION["sakinys"] .= "$zodis ";
        echo "$zodis";
    } else {
       echo $_SESSION["sakinys"];
    }

    echo "</atsakymas>";

}

if (isset($_REQUEST["clean"]) && $_REQUEST["clean"]=="on"){
    $_SESSION["sakinys"] = "";
}
?>
</body>
</html>

