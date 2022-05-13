<?php 
    $a = rand(0,9999) . "";
    $len = strlen($a);
    if($len==3){$a = "0" . $a;}
    else if($len==2){$a = "00" . $a;}
    else if($len==1){$a = "000" . $a;}
    echo $a . "<br>";
    echo "Tisočice: " . $a[0] . "<br>";
    echo "Stotice: " . $a[1] . "<br>";
    echo "Desetice: " . $a[2] . "<br>";
    echo "Enice: " . $a[3] . "<br>";
?>