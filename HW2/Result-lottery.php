<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result-Lottery</title>
</head>
<body>
    <?php
    $rand_number = rand(0,99);
    //$rand_number = 50; //fixเพื่อทดสอบเงื่อนไข  
    $btn_submit = $_POST["btn_submit"];
    $num = $_POST["number"];
    $money = $_POST["price"];
    $reward = $money*60;
     if($num == ""){
        header( "location:Lottery.php" );
     }
     else{
        if($num != $rand_number){
            echo "เสียใจด้วยคุณไม่ถูกรางวัล";
            echo "<br><a href = Lottery.php><button>back</button></a>";
            echo "<br><br>รางวัล เลขที่ออก คือ : $rand_number";
        }
        else{
            echo "ยินดีด้วยคุณถูกรางวัล";
            echo "คุณได้เงินรางวัล $reward บาท";
            echo "<br><a href = Lottery.php><button>back</button></a>";
            echo "<br><br>รางวัล เลขที่ออก คือ : $rand_number"; 
        }
    }
    ?>
</body>
</html>