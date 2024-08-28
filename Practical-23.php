<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-23</title>
</head>
<body>
    <table border=1 cellpadding=2 cellspacing=2>
        <th colspan=2>Loops in PHP</th>
        <tr>
            <td>
            <?php
                for($i=1;$i<=8;$i++){
                    for($j=1;$j<=$i;$j++){
                        echo($j);
                    }
                    echo("<br>");
                }
            ?>
            </td>
            <td>
                <?php
                    for($i=1;$i<=5;$i++){
                        for($j=1;$j<=$i;$j++){
                            if($j%2==0){
                                echo("*");
                            }
                            else{
                                echo($j);
                            }
                        }
                        echo("<br>");
                    }
                ?>
            </td>
        </tr>
        <tr>
            <td>
            <?php
                echo("<table border=1>");
                for($i=1;$i<=5;$i++){
                    echo("<tr>");
                    for($j=1;$j<=$i;$j++){
                        echo("<td>");
                        echo($j);
                        echo("</td>");
                    }
                    //echo("<br>");
                    echo("</tr>");
                }
                echo("</table>");
            ?>
            </td>
            <td>
            <?php
                $a=1;
                for($i=1;$i<=4;$i++){
                    for($j=1;$j<=$i;$j++){
                        echo($a." ");
                        $a++;
                    }
                    echo("<br>");
                }
            ?>
            </td>
        </tr>
    </table>
</body>
</html>