
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
<table>
    <?php

        function Nak(){
            return rand(1,100);
        }
        $a = array();
        for($i=0;$i<1000;$i++){
            array_push($a, Nak());
            
        }
        $coun=0;
        for($i=1;$i<=100;$i++){
            $coun=0;
            for($k=0;$k<count($a);$k++){
                if($a[$k]==$i)
                {$coun++;}
            }
            echo $i . " se ponovi: " . $coun . "<br>";
        }
    ?>
</table>
</body>
</html>