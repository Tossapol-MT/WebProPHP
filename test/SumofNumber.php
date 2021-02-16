<html> 
<head><title> Sum of number </title></head>
    <body>
  <center>
    <h2>HW2 : Sum of number</h2>

        <form action="SumofNumber.php" method="get">
            Num 1 : <input type="number" name="num1"><br><br>
            Operator :
            
            <input type="radio" name="operator1" value="+"> + :
            <input type="radio" name="operator1" value="-"> - :
            <input type="radio" name="operator1" value="*"> * :
            <input type="radio" name="operator1" value="/"> / :
            <input type="radio" name="operator1" value="%"> % : <br><br>
            
            Num 2 : <input type="number" name="num2"><br><br>
            Operator :
            
            <input type="radio" name="operator2" value="+"> + :
            <input type="radio" name="operator2" value="-"> - :
            <input type="radio" name="operator2" value="*"> * :
            <input type="radio" name="operator2" value="/"> / :
            <input type="radio" name="operator2" value="%"> % : <br><br>
            Num 3 : <input type="number" name="num3"><br><br>
            
            <input type="submit" name = "submit">
        </form>

        <?php
        if(isset($_GET["submit"])){
            
            $x = $_GET["num1"];
            $y = $_GET["num2"];
            $z = $_GET["num3"];
            $operator1 = $_GET["operator1"];
            $operator2 = $_GET["operator2"];
        
            
            if($operator1 == "+"){
               $sum1 = $x + $y;
            }
            else if($operator1 == "-"){
                $sum1 = $x - $y;
            }
            else if($operator1 == "*"){
                $sum1 = $x * $y;
            }
            else if($operator1 == "/"){
                $sum1 = $x / $y;
            }

            if($operator2 == "+"){
                $sum2 = $sum1 + $z;
            }
            else if($operator2 == "-"){
                $sum2 = $sum1 - $z;
            }
            else if($operator2 == "*"){
                $sum2 = $sum1 * $z;
            }
            else if($operator2 == "/"){
                $sum2 = $sum1 / $z;
            }
            echo "Result = $sum2";  
            }
        ?>
    </body>
</html>