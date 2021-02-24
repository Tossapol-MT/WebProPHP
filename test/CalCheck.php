<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Number</title>
</head>
<body>
    <center>
    <table>
        <td>
            <form medthod = "get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                ค่าเริ่มต้น : <input type="number" value = "number" name = "start"> <br><br>
                ค่าสุดท้าย : <input type="number" value = "number" name = "end"> <br><br>
                ตัวเลขที่จะนำไปหาร : <input type="number" value = "number" name = "div"> <br><br>
                </center>
                <input type="submit" value="Check Num" name = "check">
            </form>
        </td>
   </table>

    <?php
    if(isset($_GET["check"])){
        $start = $_GET["start"];
        $end = $_GET["end"];
        $div = $_GET["div"];
        $count = 0;
        $sum = 0;


    function checkNum(){
        global $start;
        global $end;
        global $div;
        global $count;
        global $sum;

        for($start ; $start <= $end ; $start++ ){
            if($start % $div == 0){
                echo $start;
                echo ",";
                countNum($count);
                sumNum($start);
            }
        }
    }

    function countNum(&$count){
        $count++;
        
    }

    function sumNum($start){
        global $start;
        global $sum;
        $sum += $start;

    }
    
    function printCount(){
        global $count;
        echo "<br>";
        echo "จำนวนที่หารลงตัว = ".$count." ตัว";
    }

    function printSum(){
        global $sum;
        echo "<br>";
        echo "ผลรวมของตัวเลขที่หารลงตัว = ".$sum;
        
    }
    echo checkNum();
    echo printCount();
    echo printSum();
    }

    ?>

</body>
</html>