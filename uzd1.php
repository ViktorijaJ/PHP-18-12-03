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

<h2>Parasyti koda, kuris gauna per parametrus vartotojo varda ir ji atspausdina penkis kartus.</h2>
<atsakymas>

<?php
$name = $_REQUEST ["name"];
echo "$name<br>$name<br>$name<br>$name<br>$name";
?>

</atsakymas>
</body>
</html>
