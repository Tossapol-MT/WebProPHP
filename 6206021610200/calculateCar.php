<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="myStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculateCar</title>
    
</head>
<body>
    <?php
    session_start();

    if(isset($_GET['submit'])){
        
        $_SESSION['car'] = $_GET['car'];
    }
        $car =  $_SESSION['car'];
        $arr_mc = array(1799000, 1145000, 754000, 749000);
        $arr_interyear = array(0.02,0.02,0.04,0.04);
        $arr_car = array("Accord", "Civic", "Jazz", "City");
        $arr_no = array_search($car,$arr_car);

        echo "<center>";
        echo "<table width = '60%' >";
        echo "<tr>";
        echo "<td>";
        if($car == "City" || $car == "Civic"){
            echo "<img width = '200px' src= Pic/logo-".strtolower($car).".png><br><br><br>";
            echo "<img width = '600px' src= Pic/$car.png></center>";
        }else {
            echo "<img width = '500px' src= Pic/logo-".strtolower($car).".png><br><br><br>";
            echo "<img width = '500px' src= Pic/$car.png></center>";
        }
        echo "</center>";
        echo "</td> <td>";
        echo "<fieldset>";
        echo "<legend>เลือกเงินดาวน์</legend>";
        echo "<form action='#' medthod = 'get'>";
        echo "<input type = 'radio' name = 'choice' onclick = 'choose()'> ";
        echo "เงินดาวน์";
        echo "<select name= 'price_down'  id='check' disabled >
            <option value='15'>15%</option>
            <option value='20'>20%</option>
            <option value='25'>25%</option>
            <option value='30'>30%</option>
            </select>";
        echo "หรือ";
        echo "<input type = 'radio' name = 'choice' onclick ='choose1()'> ";
        echo "ระบุจำนวนเงิน";
        echo "<input type= 'text' name = 'money'  id='check1' disabled>";
        echo "</fieldset>";
        
        echo "<fieldset>";
        echo "<legend>เลือกระยะเวลาการผ่อนชำระ</legend>";
        echo "ระยะเวลา";
        echo "<select name='term'>
            <option value='36'>36</option>
            <option value='48'>48</option>
            <option value='60'>60</option>
            <option value='72'>72</option>
            </select>";
        echo "</fieldset>";
        echo "<center>";
        
        echo "<input type='submit' value = 'Calculate' name = 'sub'>";

        echo "</form>";
        echo "</center>";
        
        if(isset($_GET['sub'])){
            @$price_down = $_GET['price_down'];
            @$money = $_GET['money'];
            $term = $_GET['term'];
            $total  = 0;
            $install = 0;
            $interyear = 0;
            $intertotal = 0;
            $move = 0;

            if(empty($price_down)){
                $move = 1;
                $price_down = $money;
                $sum = ($price_down / $arr_mc[$arr_no])*100;
            } else {
                $sum = $price_down;
            }

            echo "<center>";
            echo "<table border = '1' width = '80%'>";
            echo "<tr>";
            echo "<td colspan = '2' align = 'center'>รายงานการคำนวณสินเชื่อผ่อนชำระ</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>รุ่นรถยนต์ : </td>";
            echo "<td>$car</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>ราคารถยนต์ : </td>";
            echo "<td> ".number_format($arr_mc[$arr_no])." บาท</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>(1) เงินดาวน์ : </td>";
            echo "<td>".number_format(DownPayment($arr_mc[$arr_no],$price_down,$total))." บาท (". round($sum)."%)</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>(2) จำนวนเงินที่ขอสินเชื่อ : </td>";
            echo "<td>".number_format(installment($arr_mc[$arr_no],$total,$install))." บาท</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>(3) ดอกเบี้ย ต่อปี : </td>";
            echo "<td>".number_format(interestYear($arr_interyear[$arr_no],$install,$interyear))." บาท (".($arr_interyear[$arr_no]*100)."% ต่อปี )</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>(4) ดอกเบี้ย ทั้งหมด ".($term/12)." ปี (".$term." งวด)  :</td>"; 
            echo "<td>".number_format(interestTotal($term,$interyear,$intertotal))." บาท</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>(5) จำนวนเงินที่ต้องผ่อน ต่อ 1 งวด :</td>";
            echo "<td>".number_format(payMonth($term,$install,$intertotal))." บาท</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan = '2' align = 'center' ><a href='index.php'><button>กลับไปหน้าแรก</button></a></td>";
            echo "</tr>";
            echo "</table>";
        }
        echo "</td>";
        echo "</tr>";
        echo "</table>";
        
    function DownPayment($arr_mc,$price_down,&$total){ //สำหรับคำนวณจำนวนเงินดาวน์ กรณีเลือกเงินดาวน์แบบ %
        global $move;
        $total = $price_down;
        if($move == 0){
            $total = $arr_mc * ($price_down/100);
        }   
        
       return $total; 
    }
    
     function installment($arr_mc , &$total, &$install){ //คำนวณ จำนวนเงินที่ขอสินเชื่อ
        
        $install = $arr_mc - $total;
        return $install;
    }

    function interestYear($arr_interyear,&$install,&$interyear){ //ดอกเบี้ยต่อปี = จำนวนเงินที่ขอสินเชื่อ * อัตราดอกเบี้ยต่อปี
        $interyear = $install * $arr_interyear;
        return $interyear;
        
    }
    
    function interestTotal($term,&$interyear,&$intertotal){ //เพื่อหาดอกเบี้ยทั้งหมด
        $intertotal = $interyear * ($term / 12);
        return $intertotal;

    }

    function payMonth($term,&$install,&$intertotal){ //เพื่อคำนวณ จำนวนเงินต่อ 1 งวด ที่ต้องผ่อนชำระ
        $paym = ($install + $intertotal) / $term;
        return $paym;

    }

    ?>

    <script>
        function choose(){
            document.getElementById("check").disabled = false;
            document.getElementById("check1").disabled = true;
        }

        function choose1(){
            document.getElementById("check1").disabled = false;
            document.getElementById("check").disabled = true;
        }

    </script>
</body>
</html>