<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Sell</title>
</head>
<body>
    <?php
        if(isset($_GET["byecar"])){
            $name = $_GET["name"];
            $paid = $_GET["paid"];
            $money = $_GET["money"];
            $sum = $paid * $money;
        
            function carCheck($sum){
                if($sum >= 749000){
                    echo "<tr><td colspan = 2> รุ่นรถที่ท่านสามารถเลือกซื้อได้</td></tr>";
                } else {
                    echo "<tr><td colspan = 2>ยอดรวมเงินของท่านไม่เพียงพอ ที่จะซื้อรถยนต์ได้!</td></tr>";
                }
                
                if($sum >= 1799000){  
                    echo "<tr><td><img width = 300px src= img/Accord.png><img width = 200px src = img/logo-accord.png></td>";
                    echo "<td align  = center>ราคา 1,799,000 บาท</td></tr>";
                }
                if($sum >= 1149000){  
                    echo "<tr><td><img width = 400px src= img/Civic.png><img width = 200px src = img/logo-civic.png></td>";
                    echo "<td align  = center>ราคา 1,149,000 บาท</td></tr>";
                }
                if($sum >= 849000){  
                    echo "<tr><td><img width = 300px src= img/Jazz.png><img width = 200px src = img/logo-jazz.png></td>";
                    echo "<td align  = center>ราคา 849,000 บาท</td></tr>";
                }
                if($sum >= 749000){  
                    echo "<tr><td><img width = 400px src= img/City.png><img width = 200px src = img/logo-city.png></td>";
                    echo "<td align  = center>ราคา 749,000 บาท</td></tr>";
                }
            }  
        }
    ?>
    <center>
        
        <table border : 2px solid black>
            <tr>
                <td>ชื่อลูกค้า : </td>
                <td><?php echo $name ?></td>
                
            </tr>
            <tr>
                <td>ผ่อนงวดละ : </td>
                <td><?php echo number_format($money) ?></td>
                
            </tr>
            <tr>
                <td>จำนวนงวด : </td>
                <td><?php echo number_format($paid) ?></td>
                
            </tr>
            <tr>
                <td>ยอดรวมเงิน : </td>
                <td><?php echo number_format($sum) ?></td>
            </tr>
            <tr>
                <?php echo carCheck($sum); ?>
            </tr>
            <tr>
                <td  colspan = "2" ><a href="CarPay.php"><center><button> Back to Home </button></center></a></td>
            </tr>
           
        </table>
    </center>

</body>
</html>