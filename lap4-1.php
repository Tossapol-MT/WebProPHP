<html>
<head>
    <title>การกำหนดค่าตัวแปร</title>
</head>
<body>
    <?php
        $x = 100;
        $y = "200";
        $z = '300';
        $add = $x + $y;
        $sub = $z - $x;
        $mul = $y * $z;
        $div = $mul / $z;
        $massage = "Hello World";
        echo "ผลบวก  ", $x , " + ", $y, " = " ,$add;            echo"<br />";
        echo "ผลลบ  ", $z , " - ", $x, " = " ,$sub;            echo"<br />";
        echo "ผลคูณ  ", $y , " * ", $z, " = " ,$mul;            echo"<br />";
        echo "ผลหาร  ", $mul , " / ", $z, " = " ,$div;            echo"<br />";
        echo $massage;        echo"<br />";
    
    
    
    ?>
</body>
</html>