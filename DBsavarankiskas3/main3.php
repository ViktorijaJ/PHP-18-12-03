<?php
include_once "DBConn.php";
$obj = new DBConn();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <?php
    include("styles.php");
    ?>

</head>
<body>

<h1>Duomenų bazės informacija:</h1>
<table>
    <tr>
        <td>Automobilio numeriai</td>
        <td>Automobilio markė</td>
        <td>Automobilio modelis</td>
        <td>Automobilio pagaminimo metai</td>
        <td>Leistinas greitis</td>
        <td>Fiksuotas greitis</td>
        <td>Bauda</td>
        <td>Sumokėta</td>
        <td>Veiksmai</td>
    </tr>
    <tr>
        <form>
            <td><input type="text" placeholder="Automobilio numeriai" value="nr"></td>
            <td><input type="text" placeholder="Automobilio markė" value="marke"></td>
            <td><input type="text" placeholder="Automobilio modelis" value="modelis"></td>
            <td><input type="text" placeholder="Automobilio pagaminimo metai" value="metai"></td>
            <td><input type="text" placeholder="Leistinas greitis" value="Lgreitis"></td>
            <td><input type="text" placeholder="Fiksuotas greitis" value="Fgreitis"></td>
            <td>
                <div></div>
            </td>
            <td><input type="checkbox"></td>
            <td><input type="submit" value="Trinti" onclick="trinti()"> <input type="submit" value="Keisti"
                                                                               onclick="keisti"></td>
        </form>
    </tr>
</table>

<h1>Pridėti naują įrašą:</h1>
<form>
    <table>
        <tr>
            <td>Automobilio numeriai</td>
            <td>Automobilio markė</td>
            <td>Automobilio modelis</td>
            <td>Automobilio pagaminimo metai</td>
            <td>Leistinas greitis</td>
            <td>Fiksuotas greitis</td>
            <td>Bauda sumokėta</td>
            <td>Veiksmai</td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Numeriai" name="Pnr"></td>
            <td><input type="text" placeholder="Markė" name="Pmarke"></td>
            <td><input type="text" placeholder="Modelis" name="Pmodelis"></td>
            <td><input type="text" placeholder="Metai" name="Pmetai"></td>
            <td><input type="text" placeholder="Leistinas greitis" name="PLgreitis"></td>
            <td><input type="text" placeholder="Fiksuotas greitis" name="PFgreitis"></td>
            <td><input type="checkbox"></td>
            <td><input type="submit" value="Pridėti" onclick="prideti()"></td>
        </tr>
    </table>
</form>


<?php


?>


</body>
</html>