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

<h2>PHP gauna du skaičius ir atspausdina jų skirtumą bei sumą.</h2>

<atsakymas>
    <?php

    class Task3 {
        private $a;
        private $b;
        private $sum;
        private $sub;

        public function setValues ($value1, $value2) {
            $this->a = $value1;
            $this->b = $value2;
        }

        public function doSum (){
            $this->sum = $this->a + $this->b;
            echo "<br>$this->a ir $this->b suma: $this->sum";
        }
        public function doSub (){
            $this->sub = $this->a - $this->b;
            echo "<br>$this->a ir $this->b skirtumas: $this->sub";
        }


    }

    if (isset($_REQUEST["a"]) && isset($_REQUEST["b"])) {
        $a = $_REQUEST["a"];
        $b = $_REQUEST["b"];

        $obj = new Task3();
        $obj->setValues($a, $b);
        $obj->doSum();
        $obj->doSub();
    }
    ?>
</atsakymas>
</body>
</html>