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
        //polnenje
        $a = array();
        for($i=0;$i<1000;$i++){
            array_push($a, Nak());
        }
        $b = array();
        //stetje
        $coun=0;
        for($i=1;$i<=100;$i++){
            $coun=0;
            for($k=0;$k<count($a);$k++){
                if($a[$k]==$i)
                {$coun++;}
            }
            $b[$i] = $coun;
        }
        arsort($b);
        //izpis
        foreach($b as $x => $x_value){
            echo $x . " se ponovi " . $x_value . "krat <br>";
        }
    ?>
</table>
</body>
</html>