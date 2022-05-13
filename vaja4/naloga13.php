<?php
    function Nak(){
        return rand(0,1000)/1000;
    }
    for($i=0;$i<10;$i++){
        echo $i+1 . ". " . Nak() . "<br>";
    }
?>