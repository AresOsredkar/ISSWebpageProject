<?php
    $a = 15;
    $b = 17;
    $c = 16;
    if($a>$b && $a>$c){
        echo $a;
    }
    else if($b>$a && $b>$c){
        echo $b;
    }
    else if($c>$a && $c>$b){
        echo $c;
    }
    else{
        echo $a . " in " . $b . " in " . $c;
    }
?>