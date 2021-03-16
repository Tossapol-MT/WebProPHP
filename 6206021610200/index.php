<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Paid</title>
</head>
<body>
        <center>
        <form action="calculateCar.php" method="get">
            <img src= "Pic/headerr.jpg" width = "50%" >
            <fieldset style = "width: 70% ">
            <legend style = " margin : 0 auto;">Car Model</legend>
            เลือกรุ่นรถยนต์ 

            <select name="car" >
                <option value="Accord">Accord</option>
                <option value="Civic">Civic</option>
                <option value="Jazz">Jazz</option>
                <option value="City">City</option>
            </select>
            <input type="submit" value="submit" name = "submit">
        </form>
        
        

        <table border = '1'  width = "80%" >
            <tr  align = "center">
                <td>ภาพรถต์ยนต์</td>
                <td>รุ่นรถยนต์</td>
                <td>ราคารถยนต์ (บาท)</td>
                <td>อัตราดอกเบี้ย ต่อปี (ร้อยละ, %)</td>
            </tr>
            <tr align = "center" >
                <td><img src= "Pic/Accord.png" width = "30%" ></td>
                <td>Accord</td>
                <td>1,799,000</td>
                <td>2.00</td>
            </tr>
            <tr align = "center">
                <td><img src= "Pic/Civic.png" width = "30%" ></td>
                <td>Civic</td>
                <td>1,145,000</td>
                <td>2.00</td>
            </tr>
            <tr align = "center">
                <td><img src= "Pic/Jazz.png" width = "30%" ></td>
                <td>Jazz</td>
                <td>754,000</td>
                <td>4.00</td>
            </tr>
            <tr align = "center">
                <td><img src= "Pic/City.png" width = "30%" ></td>
                <td>City</td>
                <td>749,000</td>
                <td>4.00</td>
            </tr>
        </table>
    </fieldset>
</body>
</html>