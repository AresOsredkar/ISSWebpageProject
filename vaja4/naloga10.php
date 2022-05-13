<!DOCTYPE html>
<html>
    <head>
        <style>
            td {width:20px;
            border:2px black solid;
        }
        </style>
    </head>
    <body>
<table>
<?php 
    for($i = 1;$i<=10;$i++){
        echo "<tr>";
        for($j = 1;$j<=10;$j++){
            echo "<td>" . ($j*$i) . "</td>";
        }
        echo "</tr>";
    }
?>
</table>
</body>
</html>