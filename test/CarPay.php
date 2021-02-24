<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Pay</title>
</head>

<body>
    <center>
        <form method = "GET" action = "CarSell.php">
            <table border : 2px solid black>
                <tr>
                    <td>ชื่อ นามสกุล ลูกค้า : </td>
                    <td><input type="text" name="name"></td>

                </tr>
                <tr>
                    <td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด :</td>
                    <td><input type="text" name="money"></td>

                </tr>
                <tr>
                    <td>จำนวนงวด ที่ต้องหาร :</td>
                    <td>
                        <select name="paid">
                        <option>36</option>
                        <option>40</option>
                        <option>60</option>
                        <option>72</option>
                        </select>
                    </td>
                </tr>
                <tr >
                    <td colspan = "2">  <center><input type="submit" value="ซื้อรถ" name = "byecar"></center></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>