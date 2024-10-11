<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-37</title>
</head>
<body>
    <form action="Practical-37.php" method="post">
        Enter First Number : <input type="number" name="num1">
        Enter Second Number: <input type="number" name="num2">
        Enter Third Number : <input type="number" name="num3"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        $Num1=$_POST['num1'];
        $Num2=$_POST['num2'];
        $Num3=$_POST['num3'];
        $result;
        ($Num1>$Num2 && $Num1>$Num2) ? ($result=$Num1) :(($Num2>$Num3) ? ($result=$Num2) : ($result=$Num3));
        echo $result." is largest Number.";
    ?>
</body>
</html>