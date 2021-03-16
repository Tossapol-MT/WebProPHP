<?php //เรียงข้อมูล อาร์เรย์
    $a=array ("Beer","Bom","Wat","Mai","Tle","Pim","James","Zow");
    $b =array("a"=>1,"b"=>2,"c"=>3,"d"=>4,"e"=>5);
    $c =array("b"=>1,"a"=>2,"d"=>3,"e"=>4,"c"=>5);
    sort($a);//เรียงข้อมูลในอาร์เรย์
    asort($b);//เรียงข้อมูลในอารร์เรย์แบบจับคู่ เรียงตาม Value
    ksort($c);// เรียงข้อมูลในอาร์เรย์ แบบจับคู่ เรียงตาม keyforeach ($a as $value)
    foreach ($a as $value){
        echo $value."<br>\n";// แสดง $a
    }
    echo "<br> shuffle";
    shuffle($a);
    foreach ($a as $value){
        echo $value."<br>\n";// แสดง $a
    }

    echo "<br> เรียงตาม value";
    foreach ($b as $key => $val) {
        echo "$key=$val<br>\n";//แสดง $b
    }

    echo "<br> เรียงตาม Key ";
    foreach ($c as $key => $value) {
        echo "$key=$value<br>\n";//แสดง $c
    }
    echo "<hr>";
?>