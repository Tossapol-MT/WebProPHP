<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $fruit = $_GET["fruit"];
        $width =$_GET["width"];
        $kg = $_GET["kg"];

        if($fruit === "Banana"){
            echo "<center><img src = image/banana.jpg width = ".$width." px><br>";
            echo 'ราคาต่อกิโลกรัม = 100 บาท / Kilogram.<br>จำนวนกิโลกรัม = '.$kg.' Kilogram.<br>ราคารวม = '.(100*$kg).' บาท';
        }else if($fruit === "Coconut"){
            echo "<center><img src = image/coconut.jpg width = ".$width." px><br>";
            echo 'ราคาต่อกิโลกรัม = 200 บาท / Kilogram.<br>จำนวนกิโลกรัม = '.$kg.' Kilogram.<br>ราคารวม = '.(200*$kg).' บาท';
        }else if($fruit === "Rambutan"){
            echo "<center><img src = image/rambutan.jpg width = ".$width."px><br>";
            echo 'ราคาต่อกิโลกรัม = 300 บาท / Kilogram.<br>จำนวนกิโลกรัม = '.$kg.' Kilogram.<br>ราคารวม = '.(300*$kg).' บาท';
        }

    ?>











</body>
</html>