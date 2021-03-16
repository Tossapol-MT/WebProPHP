<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-1 </title>
</head>
    <body>
        <?php
        echo "<center>".date('d/D/M/Y')."</center>";
        $weekdays = array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
        echo '<center><font size="5" color="red">  เดือนที่ ๑ </font>';
        echo '<center><font size="4" color="blue">มกราคม ๒๕๖๔</font>';
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; //เคาะช่องว่าง
        echo '<font size="4" color="blue">January 2021</font></center>';
        echo '<table border="1" align="center">';
        echo '<tr>';
        for($n = 0 ; $n < 7; $n++) {
            echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
        }
        print_month();
        echo '</tr></table>';
        function print_month() {
        $day = -4; //เพราะต้องการให้วันอาทิตย์-พฤ เป็นค่าว่าง และ หลังวันที่ 31 เป็นค่าว่าง
        for($row = 1 ; $row <= 6; $row++) {
        echo '<tr>';
            for($col = 1 ; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= 31))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
                }
            }
        }


        echo '<center><font size="5" color="red">  เดือนที่ ๒ </font>';
        echo '<center><font size="4" color="blue">กุมภาพันธ์ ๒๕๖๔</font>';
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; //เคาะช่องว่าง
        echo '<font size="4" color="blue">February 2021</font></center>';
        echo '<table border="1" align="center">';
        echo '<tr>';
        for($n = 0 ; $n < 7; $n++) {
            echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
        }
        print_monthf();
        echo '</tr></table>';

        function print_monthf() {
            
        $day = 0; //เพราะต้องการให้วันอาทิตย์ เป็นค่าว่าง
        for($row = 1 ; $row <= 5; $row++) {
        echo '<tr>';
            for($col = 1 ; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= 28))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
                }
            }
        }
       
        echo '<center><font size="5" color="red">  เดือนที่ ๓ </font>';
        echo '<center><font size="4" color="blue">มีนาคม ๒๕๖๔</font>';
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; //เคาะช่องว่าง
        echo '<font size="4" color="blue">March 2021</font></center>';
        echo '<table border="1" align="center">';
        echo '<tr>';
        for($n = 0 ; $n < 7; $n++) {
            echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
        }
        print_monthm();
        echo '</tr></table>';

        function print_monthm() {
            
        $day = 0; //เพราะต้องการให้วันอาทิตย์ เป็นค่าว่าง
        for($row = 1 ; $row <= 5; $row++) {
        echo '<tr>';
            for($col = 1 ; $col <= 7; $col++) {
                if (($day >= 1) && ($day <= 31))
                    echo '<td align="center">' . $day . '</td>';
                else
                    echo '<td align="center"> </td>';
                $day++;
                }
            }
        }
        ?>
    </body>
</html>