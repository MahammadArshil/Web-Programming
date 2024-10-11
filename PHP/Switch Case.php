<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-27</title>
</head>
<body>
<form action="Practical-27.php" method="post">
    <table border=1 bgcolor="#95bb52">
        <caption>Arithmetic Operation</caption>
        <tr>
            <td colspan=2>Enter First Number:</td>
            <td colspan=2><input type="number" id="num1" name="num1"></td>
        </tr>
        <tr>
            <td colspan=2>Enter Second Number:</td>
            <td colspan=2><input type="number" id="num2" name="num2"></td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td colspan=4>
                <input type="submit" value="Addition" name="submit">
                <input type="submit" value="Substraction" name="submit">
                <input type="submit" value="Multiplication" name="submit">
                <input type="submit" value="Division" name="submit">
                <input type="submit" value="Remainder" name="submit">
            </td>
        </tr>
    </table>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $operator=$_POST['submit'];
            $Number1=$_POST['num1'];
            $Number2=$_POST['num2'];
            $result;
            switch ($operator) {
                case 'Addition':
                    $result = $Number1 + $Number2;
                    break;
                case 'Substraction':
                    $result = $Number1 - $Number2;
                    break;
                case 'Multiplication':
                    $result = $Number1 * $Number2;
                    break;
                case 'Division':
                    if (Number2 != 0) {
                        $result = $Number1 / $Number2;
                    } else {
                        echo "<h3>Error: Division by zero!</h3>";
                        exit;
                    }
                    break;
                case 'Remainder':
                    $result = $Number1 % $Number2;
                    break;
                default:
                    echo "Invalid operator!";
                    exit;
            }
            // Display the result
            echo "The ".$operator." of First Operand : ".$Number1." & Second Operand : ".$Number2." is :<b>".$result."</b>";
        }
    ?>
</body>
</html>