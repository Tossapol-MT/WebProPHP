<?php
 $x = 6; //global scope 

function myTest(){
   // $x = 0; //local scope
    global $x ; //ต้องประกาศในฟังก์ชั่นด้วย
    echo "<p>Variable x inside function is: $x  </p>";
}
myTest(); 
//$x = 4;
//using x outside the function will generate an erroe
echo "<p>Variable x outside function is: $x</p>"

?>