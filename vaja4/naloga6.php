<?php
    $a = 15;
    $b = 17;
    $c = 16;
    if($a>$b && $a>$c){
        echo "a:" . $a;
    }
    else if($b>$a && $b>$c){
        echo "b:" . $b;
    }
    else if($c>$a && $c>$b){
        echo "c:" . $c;
    }
    else{
        echo "Vsa števila so enaka:" . $a . " in " . $b . " in " . $c;
    }
?>