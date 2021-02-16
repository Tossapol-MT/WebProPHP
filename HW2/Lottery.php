<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lottery </title>
</head>
<body style = "background-color :aqua ">
    
    <form method="POST" action="Result-lottery.php" >
    <center>   
    <h1 style = "color : #6D31FF"><font size = "6px"> โปรแกรม ตรวจ เลขท้าย 2 ตัว </font></h1>
    <h2 style = "color : #E02A1A" ><font size = "5px"> รางวัลเมื่อถูกเลขท้าย 2 ตัว (ต้นทุน ซื้อ X 60 เท่า)</font></h2>   
    <h3 style = "color : #E02A1A"><font size = "5px">เช่น ถ้าซื้อ 10 บาท ถูกรางวัล รับเงิน 600 บาท</font></h3>   
    
    <h4 style = "color : #E02A1A"><font size = "5px"> 
        เลขเสี่ยงโชค [0 - 99] 
        <input style= "width: 8rem" min = "0" max = "99" type="number" name="number" >
    </font></h4>
    
    <h5 style = "color : #E02A1A"><font size = "6px"> *ซื้อได้ตั้งแต่ 10 - 500 บาท เท่านั้น </font></h5>

    <h6 style = "color : #E02A1A"><font size = "6px"> 
            จำนวนเงินที่คุณต้องการซื้อ [10 - 500] 
            <input style= "width: 8rem" min = "10" max = "500" type="number" name="price" >
    </font></h6>

    <input type="submit" value="ตรวจรางวัล" name="btn_submit">

    
    </form>

</body>
</html>