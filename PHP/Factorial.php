<html>
<head>
    <title>Practical-32</title>
</head>
<body>
    <form action="Practical-32.php" method="post">
    Enter Number to find the Factorial of it: <input type="number" name="num1" id="num1">
    <input type="submit" name="submit" value="Submit">
    </form>
    <br>
    <?php
        function Factorial($n){
            if($n==1 || $n==0){
                return 1;
            }
            elseif($n>1){
                return $n * Factorial($n-1);
            }
            else{
                return "Enter Valid Number.";
            }
        }
        if(isset($_POST['submit'])){
            $Number=$_POST['num1'];
            echo "Answer :- ";
            echo Factorial($Number);
        }
    ?>
</body>
</html>