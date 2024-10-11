<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="hospital_management_system";

    //Crate Connection
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    //Check Connection
    if(!$conn){
        echo "Connection Failed because".mysqli_connect_error();
    }

    //Create Database
   //  $sql="CREATE DATABASE istar";
   //  if(mysqli_query($conn,$sql)){
   //      echo "Database Created Succesfully";
   //  }
   //  else{
   //      echo"Error creating database :".mysqli_error($conn);
   //  }

    //create Table
   //  $sql="CREATE TABLE APPOINTMENTS (id INT AUTO_INCREMENT PRIMARY KEY, patient_id INT NOT NULL, doctor_id INT NOT NULL, appointment_date DATE NOT NULL, FOREIGN KEY (patient_id) REFERENCES patients(id), FOREIGN KEY (doctor_id) REFERENCES doctors(id))";
   //  if(mysqli_query($conn,$sql)){
   //      echo "Table APPOINTMENTS Crated Succesfully.";
   //  }
   //  else{
   //      echo "Error Creating Table:".mysqli_error($conn);
   //  }

    //Insert Record
    $sql="INSERT INTO DOCTORS(name,specialization) 
       VALUES('M.Arshil Vahora','MBBS')";
    if(mysqli_query($conn,$sql)){
       echo "Data inserted Successfully in Doctors table.";
    }
    else{
       echo "Error inserting data:".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>