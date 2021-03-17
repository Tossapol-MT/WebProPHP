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
    ชื่อฐานข้อมูล ที่มีอยู่ <input type="text" name = "nameDB"><br><br>
    ชื่อตารางข้อมูล <input type="text" name = "nameTB"><br><br>
    
    <input type="submit" name = "submit" value="ยืนยัน">
    <br><br><br>
    </form>
</body>
</html>


<?php
if(isset($_GET['submit'])){
    $servername = "localhost";
    $username = "root";
    $password = "1610200";
    @$dbname = $_GET['nameDB'];
    @$nametb = $_GET['nameTB'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    // sql to create table
    $sql = "CREATE TABLE $nametb (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    if ($conn->query($sql) === TRUE) {
    echo "Table $nametb created successfully";
    } else {
    echo "Error creating table: " . $conn->error;
    }
    $conn->close();
}
?>