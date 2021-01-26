<?php
$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];
 //connection with databse
 include 'config.php';
//update data into database query
$sql = "UPDATE student 
        SET sname = '{$stu_name}', saddress= '{$stu_address}', sclass='{$stu_class}', sphone = '{$stu_phone}'
        WHERE sid = {$stu_id}";
//mysqli query function
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
//inserted data has to be show in front page code
header("Location:http://localhost/Yahoo babaYou tube tutorials/crud/index.php");
//close the connection
mysqli_close($conn);
?>