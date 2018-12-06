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
<h2>Sukurti puslapį, kuris prašo vartotojo įvesti skaičių n ir suskaičiuoja sumą visų skaičių nuo vieno iki n. Jeigu
    įvestas skaičius mažesnis nei vienas, programa turi informuoti apie blogą įvestį. Padaryti su rekursija(bonus
    points)</h2>

<form action="#" method="get">
    <input type="text" name="sk"><br><br>

    <input type="radio" name="action" value="+">+<br><br>
    <input type="radio" name="action" value="*">*<br>

    <input type="submit">

</form>
<?php


// patikrinti ar request viduje yra kintamasis sk

if (isset($_REQUEST["sk"]) && (isset($_REQUEST["action"]))) {
    echo "<atsakymas>";
    $sk = $_REQUEST["sk"];
    $action = $_REQUEST["action"];

    if (is_numeric($sk) && floatval($sk) >= 1) {
        $ats = 1;
        $n = floatval($sk);
        for ($i = 2; $i <= $n; $i++) {
            switch ($action) {
                case "+":
                    $ats += $i;
                    break;
                case "*":
                    $ats *= $i;
                    break;
            }
        }
        echo "$ats";
        }
    else {
            echo "NaN";
        }
    }
echo "</atsakymas>";

?>
</body>
</html>