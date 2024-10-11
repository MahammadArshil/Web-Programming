<html>
<head>
    <title>Practical-38</title>
</head>
<body>
    <form action="Practical-38.php" method="post">
    <h2>(Enter any Number to check it is palindrome or not)</h2>  
    Enter Number:<input type="number" name="number" id="number">
    <br>
    <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $Num=$_POST['number'];
            $temp=$Num;
            $reverse=0;
            $variable;
            while($Num>0){
                $variable=$Num%10;
                $reverse=($reverse*10)+$variable;
                $Num=$Num/10;
                $Num=intval($Num);
            }
            if($temp==$reverse){
                echo "The Number is palindrome.";
            }
            else{
                echo "The Number is not Palindrome.";
            }
        }
    ?>
</body>
</html>