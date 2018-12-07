<?php
include_once "DBConn.php";
$obj = new DBConn();
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];

    switch ($action) {
        case "add":
            $nr = $_REQUEST["nr"];
            $marke = $_REQUEST["marke"];
            $modelis = $_REQUEST["modelis"];
            $metai = $_REQUEST["metai"];
            $lGreitis = $_REQUEST["lGreitis"];
            $fGreitis = $_REQUEST["fGreitis"];
            $bauda = isset($_REQUEST["bauda"]) ? $_REQUEST["bauda"] : "0";
            $sumoketa = isset($_REQUEST["sumoketa"]) ? $_REQUEST["sumoketa"] : "0";

            if ($bauda == "") {
                $bauda = ($fGreitis - $lGreitis) * 2.3;

            }

            $obj->prideti($nr, $marke, $modelis, $metai, $lGreitis, $fGreitis, $bauda, $sumoketa);
            break;
        case "delete":
            $obj->delete($_REQUEST["id"]);
            break;
        case "save":
            $id = $_REQUEST["id"];
            $nr = $_REQUEST["nr"];
            $marke = $_REQUEST["marke"];
            $modelis = $_REQUEST["modelis"];
            $metai = $_REQUEST["metai"];
            $lGreitis = $_REQUEST["leistgreitis"];
            $fGreitis = $_REQUEST["fiksgreitis"];
            $bauda = isset($_REQUEST["bauda"]) ? $_REQUEST["bauda"] : "";
            $sumoketa = isset($_REQUEST["sumoketa"]) ? $_REQUEST["sumoketa"] : "0";
            $obj->save($id, $nr, $marke, $modelis, $metai, $lGreitis, $fGreitis, $bauda, $sumoketa);
            break;

    }
}


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
<table name="title">
    <tr>
        <td>ID</td>
        <td>Automobilio numeriai</td>
        <td>Automobilio markė</td>
        <td>Automobilio modelis</td>
        <td>Automobilio pagaminimo metai</td>
        <td>Leistinas greitis</td>
        <td>Fiksuotas greitis</td>
        <td>Bauda</td>
        <td>Ar sumokėta?</td>

    </tr>
</table>
<?php
$result = $obj->getAutoInfo();
$obj->printAnyTable($result);
?>
<hr width="100%">

<h3>Duomenis rikiuoti pagal: </h3>
<form action="#" method="get">
<input type="radio" name="action" value="BD">Baudos dydį<br>
<input type="radio" name="action" value="VG">Viršytą greitį<br>
<input type="radio" name="action" value="PM">Pagaminimo metus<br>
<input type="radio" name="action" value="SUM">Ar bauda sumokėta<br>
<br>

<input type="submit" value="Rikiuoti">
</form>

<hr width="100%"
<br>
<br>
<h3>Pridėti naują informaciją: </h3>
<form action="#" method="get">
    <input type="text" name="nr" class="info" placeholder="Automobilio numeriai">
    <input type="text" name="marke" class="info" placeholder="Automobilio markė">
    <input type="text" name="modelis" class="info" placeholder="Automobilio modelis">
    <input type="text" name="metai" class="info" placeholder="Automobilio pagaminimo metai">
    <input type="text" name="lGreitis" class="info" placeholder="Leistinas greitis">
    <input type="text" name="fGreitis" class="info" placeholder="Fiksuotas greitis">
    <input type="text" name="bauda" class="info" placeholder="bauda">
    <input type="text" name="sumoketa" class="info" placeholder="ar sumoketa">

    <br>
    <input type="submit" name="action" value="add">
</form>
<?php
$nr = $_REQUEST["nr"];
$marke = $_REQUEST["marke"];
$modelis = $_REQUEST["modelis"];
$metai = $_REQUEST["metai"];
$lGreitis = $_REQUEST["lgreitis"];
$fGreitis = $_REQUEST["fGreitis"];

$obj = new DBConn();
$obj->setValues($nr, $marke, $modelis, $metai, $lGreitis, $fGreitis);
$obj->prideti();
?>

<br>


<hr width="100%">
<br>
<br>
<h3>Nurodykite ID ir informaciją, kurią norite pakeisti:</h3>
<input type="text" name="id" class="info" placeholder="ID">
<input type="text" name="Rnr" class="info" placeholder="Automobilio numeriai">
<input type="text" name="Rmarke" class="info" placeholder="Automobilio markė">
<input type="text" name="Rmodelis" class="info" placeholder="Automobilio modelis">
<input type="text" name="Rmetai" class="info" placeholder="Automobilio pagaminimo metai">
<input type="text" name="RlGreitis" class="info" placeholder="Leistinas greitis">
<input type="text" name="RfGreitis" class="info" placeholder="Fiksuotas greitis">

<br>
<input type="submit" onclick="redaguoti()" value="REDAGUOTI INFORMACIJĄ">
<br>

<hr width="100%">
<br>
<br>
<h3>Nurodykite ID eilutės, kurios duomenis norite pašalinti: </h3>
<input type="text" name="Did" class="info" placeholder="Iveskite ID">

<br>
<input type="submit" onclick="trinti()" value="TRINTI EILUTĘ">
<br>

</body>
</html>