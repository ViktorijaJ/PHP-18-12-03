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
<h2>Parašyti kodą, kuris gauna per parametrus vartotojo vardą ir jį atspausdina penkis kartus.</h2>

<atsakymas>
    <?php

    class Task1 {
        private $vardas;
        public function spausdink5kartus($value){
            $this->vardas = $value;
            echo "<br> $this->vardas<br>";
            echo "$this->vardas<br>";
            echo "$this->vardas<br>";
            echo "$this->vardas<br>";
            echo "$this->vardas";
        }
    }


    if (isset($_REQUEST["name"])) {
        $name = $_REQUEST["name"];
        $obj = new Task1();
        $obj->spausdink5kartus($name);
    }
    ?>
</atsakymas>
</body>
</html>