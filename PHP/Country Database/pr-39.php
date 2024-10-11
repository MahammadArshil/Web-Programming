<html>
<head>
    <title>Pr-39</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="COUNTRY";
        //Create Connection...
        $conn=mysqli_connect($servername,$username,$password);
        // //Check Connection...
        if(!$conn){
            echo "Connection Failed because".mysqli_connect_error();
        }
        //Create Database...
        $sql="CREATE DATABASE $dbname";
        if(mysqli_query($conn,$sql)){
            echo "<script>alert('Database Created Successfully..');</script>";
        }
        else{
            echo "<script>alert('Error creating database :".mysqli_error($conn)."');</script>";
        }
        //Create Table...
        $conn1=mysqli_connect($servername,$username,$password,$dbname);
        $sql1="CREATE TABLE CITY (id INT AUTO_INCREMENT PRIMARY KEY, CITYNAME VARCHAR (50), AREA VARCHAR(50), POPULATION FLOAT(50)) ";
        if(mysqli_query($conn1,$sql1)){
            echo "<script>alert('Table CITY Created Successfully..');</script>";
        }
        else{
            echo "<script>alert('Error creating table :".mysqli_error($conn)."');</script>";
        }
    ?>
    <p>Click Here to insert data into Created Database Table....</p><br>
    <a href="Practical-39.html">Click Here</a>
</body>
</html>