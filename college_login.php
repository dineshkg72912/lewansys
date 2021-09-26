<?php 
  $email = $_POST['email'];
  $pswd   = $_POST['pswd'];


  $conn = new mysqli("localhost","root","","lewansys");
  if($conn->connect_error) {
      die("failed to connect : ".$conn->connect_error);
  }
  else {
      $stmt = $conn->prepare("select * from college_register where email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if($stmt_result->num_rows > 0) {
          $data = $stmt_result->fetch_assoc();
          if($data['pswd'] === $pswd){
            header("Location: collage.php");
          } else{
              echo "invalid email or password";
          }
      } else {
          echo "invalid email or password";
      }
  }