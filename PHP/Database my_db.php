<html>
<head>
    <title>Practical-40</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="my_db";
        //Create Connection...
        $conn=mysqli_connect($servername,$username,$password);
        //Check Connection...
        if(!$conn){
            echo "Connection Failed because".mysqli_connect_error();
        }
        // //1. Create Database my_db;
        // $sql1="CREATE DATABASE $dbname";
        // if(mysqli_query($conn,$sql1)){
        //     echo "<p>Database '$dbname' Created Successfully..</p>";
        // }
        // else{
        //     echo "<p>Error creating database :".mysqli_error($conn)."</p>";
        // }
        // //2. Create a table Person;
        $conn1=mysqli_connect($servername,$username,$password,$dbname);
        // $sql2="CREATE TABLE PERSON (id INT AUTO_INCREMENT PRIMARY KEY, FIRSTNAME VARCHAR (50) NOT NULL, LASTNAME VARCHAR (50) NOT NULL, AGE INT(5) NOT NULL, COURSENAME VARCHAR(50) NOT NULL) ";
        // if(mysqli_query($conn1,$sql2)){
        //     echo "<p>Table 'PERSON' Created Successfully..</p>";
        // }
        // else{
        //     echo "<p>Error creating table :".mysqli_error($conn1)."</p>";
        // }
        //3. Insert Some Data into PERSON table;
        // $sql3="INSERT INTO PERSON(FIRSTNAME,LASTNAME,AGE,COURSENAME) VALUES ('Test','Test1',22,'Test2')";
        // if(mysqli_query($conn1,$sql3)){
        //     echo "<p>Data Inserted Successfully..</p>";
        // }
        // else{
        //     echo "<p>Error in insertion of data :".mysqli_error($conn1)."</p>";
        // }
        // //4. Inserting some data into person through HTML Form;
        // echo "<a href='Pr-40.html'>Click to enter data Manually..</a>";
        // if(isset($_POST['submit'])){
        //     $Fname=$_POST['fname'];
        //     $Lname=$_POST['lname'];
        //     $Age=$_POST['age'];
        //     $Cname=$_POST['cname'];
        //     $sql4="INSERT INTO PERSON(FIRSTNAME,LASTNAME,AGE,COURSENAME) VALUES ('$Fname','$Lname',$Age,'$Cname')";
        //     if(mysqli_query($conn1,$sql4)){
        //         echo "<p>Manual Data Inserted Successfully..</p>";
        //     }
        //     else{
        //         echo "<p>Error in insertion of data :".mysqli_error($conn1)."</p>";
        //     }
        // }
        //5. Select some data from person using different queries;
        if(isset($_POST['search'])){
            $Fname=$_POST['fname'];
            $Lname=$_POST['lname'];
            $Age=$_POST['age'];
            $Cname=$_POST['cname'];
            $sql5="";
            if($Fname!=""){
                $sql5="SELECT * FROM PERSON WHERE FIRSTNAME=".$Fname;
            }
            if($Lname!=""){
                $sql5="SELECT * FROM PERSON WHERE LASTNAME=".$Lname;
            }
            if($Age!=""){
                $sql5="SELECT * FROM PERSON WHERE AGE=".$Age;
            }
            if($Cname!=""){
                $sql5="SELECT * FROM PERSON WHERE COURSENAME=".$Cname;
            }
            if(mysqli_query($conn1,$sql5)){
                echo "<p>".mysqli_query($conn1,$sql5)."</p>";
            }
            else{
                echo "<p>Error in searching of data :".mysqli_error($conn1)."</p>";
            }
        }
    ?>
</body>
</html>