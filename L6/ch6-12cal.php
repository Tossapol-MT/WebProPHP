<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ผลลัพธ์ ตัวอย่าง Control statement ที่12 </title>
</head>
    <body>
        <?php
        $row = $_POST['row'];
        $column = $_POST['column'];
        $rowMax = intval( $row);
        $colMax = intval( $column);
            echo "<table align='center' border='4' width='300'>";
        for($r = 1; $r <= $rowMax ; $r++) { // ใช้สร้างแถว
            echo "<tr>"; // ใช้สร้างแถว
        for($c = 1; $c <= $colMax ; $c++) { //ใช้สร้างคอลัม
            $sum = rand(1,99);
            if ($sum % 2 == 0){
                echo  "<td align='center'><font color=blue> $sum </font>";
            }
            else if($sum % 2 == 1){
            echo "<td align='center'><font color= red> $sum </font>";
            }
        }
            echo "</tr>"; //ใช้ปิดการสร้างแถว
        }
            echo "</table>";
        ?>
        <a href='ch6-12.php'> Back </a>
    </body>
</html>