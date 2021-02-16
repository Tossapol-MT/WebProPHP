<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Find Ascii</title>
    </head>
    <body>
        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <center>
            <h1>HW2-2 : Find Ascii</h1>
            Your Text : <input type="text" name="mes" ><br><br>
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

                foreach(count_chars($message,1) as $key => $value){ 
                    if(($key > 64 && $key < 91) ||($key > 96 && $key < 123)){
                        echo chr($key)." Ascii =".$key."<br>";
                    }
                }
            }
        ?>
        </center>
    </body>
</html>

