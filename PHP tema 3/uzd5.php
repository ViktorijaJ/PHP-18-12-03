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

<h2>PHP gauna du kintamuosius: ūgis metrais ir svoris kilogramais. Išvesti kūno masės indeksą pagal formulę: KMI =
    svoris/(ugis*ugis).</h2>

<atsakymas>
    <?php

    class Task5 {
        private $ugis;
        private $svoris;
        private $KMI;

        public function setValues ($value1, $value2) {
            $this->ugis = $value1;
            $this->svoris = $value2;
        }

        public function doKMI(){
            $this->KMI = $this->svoris / ($this->ugis * $this->ugis);
            echo "<br> Jusu ugis: $this->ugis Jusu svoris: $this->svoris <br> Jusu KMI yra: $this->KMI";
        }

    }
    if (isset($_REQUEST["ugis"]) && isset($_REQUEST["svoris"])) {
        $ugis = $_REQUEST["ugis"];
        $svoris = $_REQUEST["svoris"];

        $obj = new Task5();
        $obj->setValues($ugis, $svoris);
        $obj->doKMI();
    }
    ?>
</atsakymas>

</body>
</html>