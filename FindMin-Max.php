<html> 
<head><title> Find Min Max Average </title></head>
    <body>
  <center>
    <h2>HW1 : Find Min Max Average</h2>

        <form method="get">
            Num 1 : <input type="number" name="num1"><br><br>
            
            Num 2 : <input type="number" name="num2"><br><br>
      
            Num 3 : <input type="number" name="num3"><br><br>

            <input type="radio" name="operator" value="Minimum"> Minimum <br><br>
            <input type="radio" name="operator" value="Maximum"> Maximum <br><br>
            <input type="radio" name="operator" value="Average"> Average <br><br>
            
            <input type="submit" name = "submit">
        </form>

    <?php
    
        if(isset($_GET["submit"])){

            $x = $_GET["num1"];
            $y = $_GET["num2"];
            $z = $_GET["num3"];
            $oparator = $_GET["operator"];
            
            if($oparator == "Minimum"){
                if($x < $y && $x < $z){
                    echo "Minimum Number = ", $x;
                }
                else if($y < $x && $y < $z){
                    echo "Minimum Number = ", $y;
                }
                else {
                    echo "Minimum Number = ", $z;
                }
            }     
            if($oparator == "Maximum"){
                if($x > $y && $x > $z){
                    echo "Maximum Number = ", $x;
                }
                else if($y > $x && $y > $z){
                    echo "Maximum Number = ", $y;
                }
                else {
                    echo "Maximum Number = ", $z;
                }
            }

            if($oparator == "Average"){
                echo "Average Number = ", ($x + $y + $z) / 3;
            }
            
        }

    ?>
    </body>
</html>