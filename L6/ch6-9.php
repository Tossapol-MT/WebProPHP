<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 9 </title></head>
</head>
    <body>
        <form method="get">
                Start Num : <input type="number" name="start"><br><br>
                
                End Num : <input type="number" name="end"><br><br>
    
                Divide by : <input type="number" name="div"><br><br>
                
                <input type="submit" name = "submit">
            </form>

        <?php
            if(isset($_GET["submit"])){
            
            $start = $_GET["start"];
            $end = $_GET["end"];
            $div = $_GET["div"];
            echo "ผลลัพท์ของตัวเลขระหว่าง $start ถึง $end ที่หารด้วย $div ลงตัวคือ <br>";
            while($start < $end ){
                $found = false;

                    if ($start % $div == 0) {
                        $found = true;
                    }
                    
                    if($found){
                        echo $start." ," ;
                    }
                $start++;
                
            }    
            
            echo $start;
       
        } 
          ?>
    </body>
</html>