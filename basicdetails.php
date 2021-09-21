<?php
session_start();
require_once './config/config.php';

  
$student_id = $_SESSION["student_id"];
$query = "SELECT * FROM student_basicdetails WHERE student_id = $student_id";
$result = mysqli_query($con, $query);
$num_rows = mysqli_num_rows($result);
if ($num_rows > 0) {
    header('location: basicdetails_view.php');
  }
  else {
    header('location: basicdetails_add.php');
  }

?>