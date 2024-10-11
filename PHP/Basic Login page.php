<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practical-33</title>
    <style>
        .Form_login{
            border:2px solid black;
            margin-left:38%;
            margin-right:38%;
            height:180px;
            background-color:#6177c7;
        }
        .Form_login table td{
            font-size:20px;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <form method="post" class="Form_login">
        <table class="Table" align=center>
            <caption><h3>Login Form</h3></caption>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass" id="pass"></td>
            </tr>
            <tr align="center">
                <td colspan=2><input type="submit" style="cursor:pointer" value="Submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
        $u_name=$_POST['username'];
        $password=$_POST['pass'];
        if($u_name=='admin' && $password=='admin123'){
            echo "<center>Login Succesful..</center>";
        }
        else{
            echo "<center style='color:red;'>Error! Wrong Username or Password..</center>";
        }
    ?>
</body>
</html>