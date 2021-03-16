<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
    <body>
        <form method="get" >
        <center>จำนวนนักเรียน : <input type="number" name = "num"></center>
        <center><input type="submit" value="OK" name="submit"></center>
        </form>
        <?php
        if(isset($_GET["submit"])){
            $student = $_GET["num"];
            $MaxStudent = $student;
            $score = array(); //ยังไม่ต้องกำหนดขนาดของ array
            $numgrade = array(0,0,0,0,0);

            for($n = 0 ; $n < $MaxStudent; $n++) {
                $score[$n] = rand(0, 100);
            }
            echo '<center><font size="4" color="blue"> Grade Report </font></center>';
            echo "<table border=1 align=center>";
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
            echo '<tr><td colspan="3" align="center">  A : ' .$numgrade[0]. '</td></tr>';
            echo '<tr><td colspan="3" align="center">  B : ' .$numgrade[1]. '</td></tr>';
            echo '<tr><td colspan="3" align="center">  C : ' .$numgrade[2]. '</td></tr>';
            echo '<tr><td colspan="3" align="center">  D : ' .$numgrade[3]. '</td></tr>';
            echo '<tr><td colspan="3" align="center">  F : ' .$numgrade[4]. '</td></tr>';
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
            global $numgrade;
            if($score >= 80 ){
                $grade = "A";
                $numgrade[0] += 1;
                
            }else if($score >= 70){
                $grade = "B";
                $numgrade[1] += 1;
                
            }else if($score >= 60){
                $grade = "C";
                $numgrade[2] += 1;
            }else if($score >= 50){
                $grade = "D";
                $numgrade[3] += 1;
            }else {
                $grade = "F";
                $numgrade[4] += 1;
            }
            return ($grade);
        }

        ?>
    </body>
</html>