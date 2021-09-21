<?php
session_start();
require_once 'config/config.php';


  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql = "SELECT id FROM student_register WHERE student_email = '$email' and 	student_password = '$password'";
  $result = mysqli_query($con,$sql);
  $count = mysqli_num_rows($result);
  
  
  if($row=mysqli_fetch_array($result))
 {
  
  $_SESSION["student_id"] = $row['id'];
  echo "success";
 }
 else
 {
  echo "fail";
 }
 exit();
?>