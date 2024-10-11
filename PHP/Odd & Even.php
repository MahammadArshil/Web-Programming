<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-29</title>
</head>
<body>
    <form method="post">
        Enter any Number:<input type="number" name="Num" >
        <br>
    </form>
    <br>
    <?php
        $A=$_POST['Num'];
        if($A%2==0){
            echo "Number".$A." is Even Number";
        }
        else{
            echo "Number".$A." is Odd Number";
        }
    ?>
</body>
</html>