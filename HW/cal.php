<html>
    <body>
        <?php
            $x = $_GET["X"];
            $y = $_GET["Y"];
            $oparator = $_GET["opera"];

            echo"showresult <br>";
            echo "X = ".$x."<br>";
            echo "Y = ".$y."<br>";
            echo "oparator = ".$oparator."<br>";     
            

            switch ($oparator) {
                case "+":
                    echo " x + y = ".($x + $y). "<br>";
                    break;
                case "-":
                    echo " x - y = ".($x - $y). "<br>";
                    break;
                case "*":
                    echo " x * y = ".($x * $y). "<br>";
                    break;
                case "/":
                    echo " x / y = ".($x / $y). "<br>";
                    break;
            }
        ?>
    </body>
</html>
