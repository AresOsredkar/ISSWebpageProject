<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
<table>
<?php 
    echo "Potence števila dva";
    for($i = 0;$i<=32;$i++){
        echo "potenca: " . $i . " Rezultat: " . pow(2,$i) . "<br>";
    }
?>
</table>
</body>
</html>