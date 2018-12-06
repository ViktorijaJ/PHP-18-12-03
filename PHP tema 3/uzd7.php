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

<h2>PHP gauna du kintamuosius: atstumas kilometrais ir sąnaudos litrais, apskaičiuoti kiek vidutiniškai sunaudojama kuro
    100-tui kilometrų pagal formulę: Vidurkis = litrai * 100 / atstumo.</h2>

<atsakymas>
    <?php

    class Task7
    {
        private $a;
        private $b;
        private $average;

        public function setValues($value1, $value2)
        {
            $this->a = $value1;
            $this->b = $value2;
            $this->doAverage(); // tos pacios funkcijos viduje iskvieciame private funkcija

        }

        private function doAverage() // private funkcija gali buti atvaizduota tik pacioje klaseje, todel iskvieciama per setValues
        {
            $this->average = ($this->a * 100) / $this->b;
        }

        public function showAverage()
        {
            echo "Jusu sunaudotas kuro kiekis: $this->a l., nuvaziuotas atstumas: $this->b km., vidutinskai automobilio sunaudojamas kuro kiekis: $this->average l/km.";
        }
    }

    if (isset($_REQUEST["litrai"]) && isset($_REQUEST["km"])) {
        $litrai = $_REQUEST["litrai"];
        $km = $_REQUEST["km"];

        $obj = new Task7();
        $obj->setValues($litrai, $km);
        $obj->showAverage();
    }
    ?>
</atsakymas>

</body>
</html>