<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-26</title>
</head>
<body>
    <form action="Practical-26.php" method="post">
    <table border=1 bgcolor="#95bb52">
        <caption>Find Addition.</caption>
        <tr>
            <td>Enter First Number:</td>
            <td><input type="number" id="num1" name="num1"></td>
        </tr>
        <tr>
            <td>Enter Second Number:</td>
            <td><input type="number" id="num2" name="num2"></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td align=center colspan=2>
                <input type="submit" value="Addition" name="submit">
            </td>
        </tr>
    </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $Num1=$_POST['num1'];
            $Num2=$_POST['num2'];
            echo "<h3>The sum of ".$Num1." & ".$Num2." is: ".Add($Num1,$Num2)."</h3>";
        }
        function Add($a,$b){
            $result=$a+$b;
            return $result;
        }
    ?>
</body>
</html>