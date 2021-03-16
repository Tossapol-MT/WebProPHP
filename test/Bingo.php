<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bingo !!</title>
</head>
<body> 
    
    <?php
    $maxrow = 5;
    $maxcol = 5;
    $arr = array();

    echo "<center style = 'font-size: 50px' >  BINGO GAME";
    function checkNum(){
    
    $check = rand(0,99);
    return $check; 

    }
    for($r = 0 ; $r < $maxrow ; $r++){
        echo "<table border='1'> ";
        echo    "<tr align='center' style= 'width:200px'>";
            for($c = 0 ; $c < $maxcol ; $c++){
                echo "<td align='center' style= 'width:200px'>".checkNum()."</td>";
            }
        echo    "</tr>";
        echo "</table>";
    }

    ?>
    <form medthod = "get">
        <br>
        <input  style =  'font-size: 50px; background-color : #3399FF; color : #ffffff'  type="submit" value="START GAME" name = "submit">
    </form>

    <?php
    if(isset($_GET['submit'])){
        

    }


    ?>

</body>
</html>