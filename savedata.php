<?php
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];
 //connection with databse
 include 'config.php';
//insert data into database query
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) 
                VALUES('{$stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}')";
//mysqli query function
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
//inserted data has to be show in front page code
header("Location: http://localhost/Yahoo babaYou tube tutorials/crud/index.php");
//close the connection
mysqli_close($conn);


?>