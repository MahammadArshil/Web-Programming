<html>
<head>
    <title>Practical-39</title>
</head>
<body>
    <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="COUNTRY";
        //Create Connection...
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        // //Check Connection...
        if(!$conn){
            echo "Connection Failed because".mysqli_connect_error();
        }
        if(isset($_POST['Submit'])){
            $city=$_POST['city_name'];
            $area=$_POST['area_name'];
            $population=$_POST['population'];
            // echo "City = $city & Area = $area & Population = $population";
            //Insert Record
            $conn=mysqli_connect($servername,$username,$password,$dbname);
            $sql="INSERT INTO CITY(cityname,area,population) VALUES ('$city','$area',$population)";
            if(mysqli_query($conn,$sql)){
                echo "<script>alert('Data Inserted Successfully..');</script>";
            }
            else{
                echo "<script>alert('Error in insertion of data :".mysqli_error($conn)."');</script>";
            }
            mysqli_close($conn);
        }
    ?>
</body>
</html>