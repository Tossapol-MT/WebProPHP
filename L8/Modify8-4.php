<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Random </title>
    <style>
    table {
        width: 5rem;
    }
    </style>
</head>
    <body style= "background-color : aqua ">

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <center>
            Row : <input type="text" name="row" ><br><br>
            Column : <input type="text" name="col" ><br><br>
            Start Num : <input type="number" name="start" ><br><br>
            End Num : <input type="number" name="end" ><br><br> 
            <input type="submit" name="submit" value="Submit">
            <input type="reset" value="Clear">
        </form>

        <?php
        if(isset($_POST['submit'])){
        $row = $_POST['row'];
        $col = $_POST['col'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        
        // declare function checker
        function show_checker($row, $col, $bgcolor1, $bgcolor2,$start,$end)
        {
            echo "<p align='center'> Row = $row , Column = $col </p>";
            echo '<table align="center" border="1">';
            $sum = 0;
            $count = 0;
            
            for ($r = 1; $r <= $row; $r++) {
                echo '<tr>';
                for ($c = 1; $c <= $col; $c++) {
                    if ($r % 2 == 1) {
                        echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor1 : $bgcolor2) . '">';
                    } else {
                        echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
                    }
                    
                    $randd = rand($start,$end);
                    $sum = $sum + $randd;
                    $count ++; 
                    echo $randd.'</td>';
                    if($count == 1){
                        $max = $min = $randd;
                    }
                    else {
                        $min = Minn($min,$randd);
                        $max = Maxx($max,$randd);
                    }
                }
                echo '</tr>';  
            }
            echo '</table>';
            if ($row == $col) $message = "This is Square";
            else $message = "This is Rectangle";
            echo "<p align='center'> $message </p>";
            echo "Min = ".$min."<br>";
            echo "Max = ".$max."<br>";
            avg($count,$sum);
        }

        //function Min
        function Minn($min,$randd){
            return(min($min,$randd));
        }
        //function Max
        function Maxx($max,$randd){
            return(max($max,$randd));
        }
        //function Average
        function avg($count,$sum){
            
            echo "Average = ".round($sum/$count,2);
        }
        }
        show_checker($row, $col,"33ff99","ffff99",$start,$end);
        ?>
    </body>
</html> 