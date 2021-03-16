<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    

    <form action ='#' method = 'post' >
    <table border = '1'>
    <?php
        for($i = 0 ; $i < 10 ; $i++){
            echo '<tr><td>';
            echo '<input name = cars[] placeholder = "Enter Car Name" >';
            echo '</td></tr>';
        }
    ?>  
    <tr><td>
            <input type="submit" name= 'submit' value = 'Submit Information'>
            </td></tr></form></table>
<?php
    if(isset($_POST['submit'])){
    $cars = $_POST['cars'];
    foreach($cars as $showCar){
        echo $showCar."<br>";
    }
    print_r($cars);
    }
?>






</body>
</html>