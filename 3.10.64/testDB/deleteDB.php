<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeleteDB</title>
</head>
<body>
    <center>
    <h1>ลบฐานข้อมูล</h1>
    <form action="#" method="get">
    ชื่อฐานข้อมูล <input type="text" name = "name"><br><br>
    
    <input type="submit" name = "submit" value="ยืนยัน">
    <br><br><br>
    </form>


<?php
    $servername = "localhost";
    $username = "root";
    $password = "1610200";
    $show = "SHOW DATABASES";
    
    $link = mysqli_connect($servername,$username,$password) or
        die('Error connecting to mysql:' . mysqli_error($link).'\r\n');
    
    if(!($result = mysqli_query($link,$show))){
        printf("Error : %s\n", mysqli_error($link));
    }

    while($row = mysqli_fetch_row($result)){
        if(($row[0]!="information_schema") && ($row[0]!="mysql")){
            echo $row[0]."\r<br>";
        }
    }





    if(isset($_GET['submit'])){
        $name = $_GET['name'];
        

        
        $conn = mysqli_connect($servername,$username,$password);
        if(!$conn){
            die("Connection failed : ".mysqli_connect_error());
        }
        $sql = "DROP DATABASE $name";
        if(mysqli_query($conn,$sql)){
            echo "Database delete successfully";
        } else {
            echo "Error deleting database : ".mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
</body>
</html>