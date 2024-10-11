<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-21</title>
    <style>
        .btn{
            background-color:#0e786d;
            font-color:#ffffff;
            font-style:bold;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="post">
        <table border=2 cellspacing=3 cellpadding=1>
            <caption>Basic Calculator</caption>
            <tr>
                <td><b>Enter First Number:</b></td>
                <td><input type="number" name="num1"></td>
            </tr>
            <tr>
                <td><b>Enter Second Number:</b></td>
                <td><input type="number" name="num2"></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td colspan=2>
                    <input type="submit" value="Addition" name="submit" class="btn">&nbsp;
                    <input type="submit" value="Substraction" name="submit" class="btn">&nbsp;
                    <input type="submit" value="Multiplication" name="submit" class="btn">&nbsp;
                    <input type="submit" value="Division" name="submit" class="btn">&nbsp;
                </td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $number1=$_POST['num1'];
            $number2=$_POST['num2'];
            $Result;
            $Submit_value=$_POST['submit'];
            echo "The result for ".$Submit_value." is ";
            if($Submit_value=='Addition'){
                $Result = $number1 + $number2;
                echo $Result;
            }
            if($Submit_value=='Substraction'){
                $Result = $number1 - $number2;
                echo $Result;
            }
            if($Submit_value=='Multiplication'){
                $Result = $number1 * $number2;
                echo $Result;
            }
            if($Submit_value=='Division'){
                if($number1 / $number2 == 0){
                    echo "Error";
                }
                else{
                    $Result = $number1 / $number2;
                    echo $Result;
                }
            }
        }
    ?>
</body>
</html>