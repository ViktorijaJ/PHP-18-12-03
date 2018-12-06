<html>
<head>
    <?php
    include("../fragments/styles.php");
    ?>
</head>
<body>
<?php

include("../fragments/menu3.php");
?>

<h2>Parasyti koda, kuris gauna per parametrus zodi ir atspausdina kiek simboliu yra tame zodyje.</h2>

<atsakymas>
<?php

class Task2 {
    private $zodis;
    private $ilgis;

    public function doAction ($value) {
        $this->zodis= $value;
        $this->ilgis = strlen($this->zodis);

        echo "Jusu pateiktas zodis $this->zodis turi $this->ilgis simbolius/-iu";
    }
}
if (isset($_REQUEST["zodis"])) {
    $zodis = $_REQUEST["zodis"];
    $obj = new Task2();
    $obj->doAction($zodis);
}
?>

</atsakymas>
</body>
</html>

