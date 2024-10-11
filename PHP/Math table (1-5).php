<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-30</title>
</head>
<body>
    <table border=3 cellspacing=4 cellpadding=4>
        <?php
            for($i=1;$i<=10;$i++){
                if($i%2==0){
                    echo "<tr style='background-color:rgb(255, 25, 83)'>";
                    for($j=1;$j<=5;$j++){
                        echo "<td>";
                        echo $j." * ".$i." = ".$i*$j;
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                else{
                    echo "<tr style='background-color:#0e786d'>";
                    for($j=1;$j<=5;$j++){
                        echo "<td>";
                        echo $j." * ".$i." = ".$i*$j;
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>