<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <center>
    <h1>สร้างฐานข้อมูล</h1>
    <form action="#" method="get">
    ชื่อฐานข้อมูล <input type="text" name = "name"><br><br>
    
    <input type="submit" name = "submit" value="ยืนยัน">
    <br><br><br>
    </form>
</body>
</html>



<?php
    if(isset($_GET['submit'])){
        $name = $_GET['name'];
    $servername = "localhost";
    $username = "root";
    $password = "1610200";

    $conn = mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("Connection failed : ".mysqli_connect_error());
    }
    $sql = "CREATE DATABASE $name";
    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";
    } else {
        echo "Error creating database : ".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>