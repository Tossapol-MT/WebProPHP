<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Find Character</title>
    </head>
    <body>
        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <center>
            <h1>HW2-1 : Find Character</h1>
            Your Text: <input type="text" name="mes" ><br><br>
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Clear">
            
            <br><br>
        </form>

        <?php
            if(isset($_GET["submit"])){
                echo "<h2>Count Char in Sentence</h2>";
                $message = $_GET["mes"];
                $len = strlen($message);
                $arr = array();
                for($n = 0 ; $n < $len ; $n++) {
                    $arr[$n] = ord($message[$n]);
                }
                
                $arr_count = array_count_values($arr);
                $arr = array_unique($arr);
                sort($arr);

                for($n = 0 ; $n < count($arr) ; $n++){
                    if($n % 5 == 0){
                        echo "<br>";
                    }

                    if($arr[$n] === 32){
                        echo "Space = ".$arr_count["$arr[$n]"]." , ";
                    }
                    else{
                            echo chr($arr[$n]). " = ". $arr_count["$arr[$n]"]." , ";
                    }
                }
            }
        ?>
        </center>
    </body>
</html>