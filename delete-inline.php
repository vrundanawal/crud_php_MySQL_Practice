<?php
$stu_id = $_GET['id'];

include 'config.php';
$sql = "DELETE FROM student WHERE sid = {$stu_id}";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

header("Location: http://localhost/Yahoo babaYou tube tutorials/crud/index.php");

mysqli_close($conn);


?>