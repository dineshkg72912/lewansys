<?php
session_start();
require_once 'config/config.php';


if ($_SERVER['REQUEST_METHOD'] === 'PST'){
  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql = "SELECT id FROM student_register WHERE student_email = '$email' and 	student_password = '$password'";
  $result = mysqli_query($con,$sql);
  $count = mysqli_num_rows($result);
  if ($count === 1) {
    while($data= mysqli_fetch_assoc($result)){
	
      $id = $data['id'];
      
    }
    $_SESSION["student_id"] = $id;
    header('location: basicdetails.php');
    exit();
} else {
  
echo "Error: " . $sql . "<br>" . $con->error;
}$con->close();
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<title>Lewansys - Student Login</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

<!-- CSS Files -->
<link href="assets/css/main.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <script type="text/javascript">
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyAKpRDunoIVj8A7p6DgJNuJj8VHPr_hBNE",
    authDomain: "web-app-3fda2.firebaseapp.com",
    databaseURL: "https://web-app-3fda2.firebaseio.com",
    projectId: "web-app-3fda2",
    storageBucket: "web-app-3fda2.appspot.com",
    messagingSenderId: "414010710177",
    appId: "1:414010710177:web:6498079a749baa1604f8e0",
    measurementId: "G-SE41CE5P4B"
    
  };
  firebase.initializeApp(config);
</script>

</head>

<body class="signup-page">
<div class="wrapper">
  <div class="header header-filter" style="background-image: url('assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
          <div class="card card-signup">
            <form class="form"  action="checklogin.php" onsubmit = "return authFunction()" method="POST">
              <div class="header header-primary text-center">
                <h4> Student Login</h4>
              </div>
              <h3 class="mt-0">Lewansys</h3>
              <p class="help-block">Student Login</p>
              <div class="content">
                <div class="form-group">
                  <input id ="useremail" name = "email" type="email" class="form-control underline-input" placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                  <input id="password" name = "password" type="password" placeholder="Password..." class="form-control underline-input">
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" unchecked>
                    Remember me</label>
                </div>
              </div>
              <div class="footer text-center">
              <input type =  "submit" id = "btn" class="btn btn-primary btn-raised"value = "Login" />  
              	
              </div>
              <a href="forgotpass.html" class="btn btn-primary btn-wd btn-lg">Forgot Password?</a>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="col-lg-12 text-center"> <a href="signup.php" class="text-uppercase text-white">Create an account</a>
          <div class="copyright"> &copy; 2021, Designed and developed by <a href="https://aitechnologies.co.in" target="_blank">Ai Technologies</a> </div>
        </div>
      </div>
    </footer>
  </div>
</div>
</body>
<script>
function authFunction() {
  const auth = firebase.auth();
  auth.signInWithEmailAndPassword(document.getElementById("useremail").value, "12345678")
  .then(() => {
        auth.onAuthStateChanged(firebaseUser => {
      if (firebaseUser) {
        console.log(firebaseUser);
        console.log('Logged IN!');
        

        if (firebaseUser.emailVerified) {
          var email=$("#useremail").val();
          var pass=$("#password").val();
          $.ajax
          ({
          type:'post',
          url:'checklogin.php',
          data:{
          checklogin:"checklogin",
          email:email,
          password:pass
          },
          success:function(response) {
          if(response=="success")
          {
            window.location.href="basicdetails.php";
          }
          else
          {
            
            alert("Wrong Details"+response);
          }
          }
          });
          
          
          //alert("Email is Verified Successfully");
          console.log('You\'re successfully signed in !');
        }
        else {
          console.log('Email is not verified');
          alert("Email is Not Verified");
          
        }

      }
      else {
        alert("Email is Not Registered");
        

      }

    });
    //Signed in successfully
    
  })
  .catch(error => {
    console.error(error);
    alert("Email is Not Registered");
    
  })
  return false;
  
}

</script>

<!--  Vendor JavaScripts --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<!--  Custom JavaScripts  --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 
</html>
