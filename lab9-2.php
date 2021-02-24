<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
    <body>
        <form action="" method="get" >
        <center>จำนวนนักเรียน : <input type="number" name = "num"></center>
        <center><input type="submit" value="OK" name="submit"></center>

        
        </form>

        
        <?php
        if(isset($_GET["submit"])){
            $student = $_GET["num"];
            $MaxStudent = $student;
            $score = array(); //ยังไม่ต้องกำหนดขนาดของ array







            for($n = 0 ; $n < $MaxStudent; $n++) {
                $score[$n] = rand(0, 100);
            }
            echo '<center><font size="4" color="blue"> Grade Report </font></center>';

            echo '<table border="1" align="center">';
            echo '<tr><td align="center" width="90">Student No.</td>';
            echo '<td align="center" width="90">Score</td>';
            echo '<td align="center" width="90">Grade</td></tr>';
            
            for($n = 0 ; $n < $MaxStudent; $n++) {
                echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
                echo '<td align="center" width="90">' . $score[$n] . '</td>';
                echo '<td align="center" width="90">' .checkG($score[$n]). '</td>/<tr>';
                
            }
            echo '<tr><td colspan="3" align="center"> Average Score : '.average( $score, $MaxStudent).'</td></tr>' ;
            echo '<tr><td colspan="3" align="center"> Score Max : '. max($score) . '</td></tr>';
            echo '<tr><td colspan="3" align="center">  Score Min : ' . min($score) . '</td></tr>';
            echo '<tr><td colspan="3" align="center">  Grade A : ' . checkA($score) . 'คน</td></tr>';
            echo '<tr><td colspan="3" align="center">  Garde B : ' . checkB($score) . 'คน</td></tr>';
            echo '<tr><td colspan="3" align="center">  Garde C : ' . checkC($score) . 'คน</td></tr>';
            echo '<tr><td colspan="3" align="center">  Garde D : ' . checkD($score) . 'คน</td></tr>';
            echo '<tr><td colspan="3" align="center">  Garde F : ' . checkF($score) . 'คน</td></tr>';
            echo '</td></tr></table>';
            
            
        }
        
        function average($data, $max) {
            $total = 0;
            for($n = 0 ; $n < $max; $n++) {
                $total += $data[$n];
            }
                return( $total / $max );
            }
        function checkG($score){
            $grade = "";
            if($score > 80 ){
                $grade = "A";
            }else if($score > 70){
                $grade = "B";
            }else if($score > 60){
                $grade = "C";
            }else if($score > 50){
                $grade = "D";
            }else {
                $grade = "F";
                
            }
            return ($grade);
        }
        function checkA($score){
            $countA = 0;
            for($A = 0 ; $score > 80 ; $A++){
                $countA ++;
            }
            return ($countA);
        }
        function checkB($score){
            $countB = 0;
            for($B = 0 ; $score > 70 ; $B++){
                $countB ++;
            }
            return ($countB);
        }
        function checkC($score){
            $countC = 0;
            for($C = 0 ; $score > 60 ; $C++){
                $countC ++;
            }
            return ($countC);
        }
        function checkD($score){
            $countD = 0;
            for($D = 0 ; $score > 50 ; $D++){
                $countD ++;
            }
            return ($counDt);
        }
        function checkF($score){
            $countF = 0;
            for($F = 0 ; $score < 50 ; $F++){
                $countF ++;
            }
            return ($countF);
        }
        ?>
    </body>
</html>