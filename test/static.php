<?php
function myTest(){
  //static $x = 0; ฟังก์ชั่นที่ทำงานเสร็จจะยังไม่คือนหน่วยความจำให้กับระบบ
    $x = 0; //มันจะคืนค่าหน่วยความจำให้กับระบบ
    echo $x." , ";
    $x++;
}

myTest(); //outpu = 0 , x = 1

myTest(); //outpu = 1 , x = 2

myTest(); //outpu = 2 , x = 3


?>