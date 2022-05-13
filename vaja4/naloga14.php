<?php

    function Nak(){
        return rand(0,1000)/1000;
    }
    $a = 0;
    for($i=0;$i<1000;$i++){
        $a += Nak();
    }
    echo "Povprečje: " . $a/1000;
?>