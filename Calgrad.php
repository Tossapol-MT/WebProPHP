<html> 
<head><title>Calculator Grade</title></head>
    <body>
  <center>
    <h2>Calculator Grade</h2>

        <form method="get">
            Final : <input type="number" placeholder = "0-30" name="Final"> <br><br>
            
            Midterm : <input type="number"  placeholder = "0-30" name="Midterm"><br><br>
      
            Assignment : <input type="number"  placeholder = "0-20" name="Assignment"><br><br>

            Homework : <input type="number"  placeholder = "0-20" name="Homework"><br><br>

            <input type="submit" name = "submit">
        </form>

        <?php
        if(isset($_GET["submit"])){
          
            $f = $_GET["Final"];
            $m = $_GET["Midterm"];
            $a = $_GET["Assignment"];
            $h = $_GET["Homework"];
            
          if($f <= 30 && $m <= 30){

            if($a <= 20 && $h <= 20){

                $sum = $f + $m + $a + $h;
                echo "Final : $f <br>";
                echo "Midterm : $m <br>";
                echo "Assignment : $a <br>";
                echo "Homework : $h <br>";
                echo "Total Score $sum<br>";

                if($sum >= 80 && $sum <= 100){
                    echo "Your grade is : A";
                }
                else if($sum >= 75){
                    echo "Your grade is : B+";
                }
                else if($sum >= 70){
                    echo "Your grade is : B";
                }
                else if($sum >= 65){
                    echo "Your grade is : C+";
                }
                else if($sum >= 60){
                    echo "Your grade is : C";
                }
                else if($sum >= 55){
                    echo "Your grade is : D+";
                }
                else if($sum >= 50){
                    echo "Your grade is : D";
                }
                else{
                    echo "Your grade is : F";
                }
                
         }  
         else echo "Error"; 
    }
    else echo "Error";
}
        ?>
    </body>
</html>