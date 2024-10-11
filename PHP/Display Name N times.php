<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical-28</title>
</head>
<body>
    <form method="post">
        <p>Please enter a number and your name to display that times your name.</p>
        Enter your Name : <input type="text" name="uname" id="uname"><br><br>
        Enter a number : <input type="text" name="time_to_print" id="time_to_print"><br><br>
        <input type="submit" name="submit">
    </form>
    <br>
    <?php
        if(isset($_POST['submit'])){
            $name=$_POST['uname'];
            $num=$_POST['time_to_print'];
            for($i=1;$i<=$num;$i++){
                echo "<b>".$name."</b><br>";
            }
        }
    ?>
</body>
</html>