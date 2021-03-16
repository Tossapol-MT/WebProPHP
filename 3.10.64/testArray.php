<?php
    $funArray = array ('A','B','C','D','E','F','G');
    for($i = 0 ; $i < count($funArray);$i++){
        echo "index[".$i."] = ".$funArray[$i]."<br>";
        
    }
    echo "<br> Test for each";
    foreach($funArray as $value){
        echo "<br>";
        echo $value."<br>";
    }

?>