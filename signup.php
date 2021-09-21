<?php
session_start();
require_once './config/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  
  $student_name=$_POST['student_name'];
  $student_email=$_POST['student_email'];
  $student_password=$_POST['student_password'];
  $student_mobile=$_POST['student_mobile'];
  $sql = "INSERT INTO student_register (student_name, student_email, student_mobile, student_password)VALUES 
    ('$student_name', '$student_email', '$student_mobile', '$student_password')";

if ($con->query($sql) === TRUE) {
    header('location: login.php');
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
<title>Lewansys - Student Signup</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

<!--  Fonts and icons -->
<!-- CSS Files -->
<link href="assets/css/main.css" rel="stylesheet">
<script>
function myFunction() {
  window.confirmationResult.confirm(document.getElementById("verificationcode").value)
      .then(function(result) {
        
          
        console.log(result);
        $("#register").show();
      }).catch(function(error) {
        console.log(error);
        alert("Invalid OTP");
      });
}

</script>
<script>
  function sendemailverification() {
    const auth = firebase.auth();
//Sends verification emails only in french
//auth.languageCode = 'fr_FR';

//Sends verification emails in the same language as the language used in the
//user's device
auth.useDeviceLanguage();
  auth.createUserWithEmailAndPassword(document.getElementById("useremail").value, "12345678")
    .then(() => {
        console.log('Signed Up Successfully !');
        auth.currentUser.sendEmailVerification()
        .then(() => {
          $("#mobilediv").show();
          window.localStorage.setItem('emailForSignIn', document.getElementById("useremail").value);
            console.log('Verification Email Sent Successfully !');
        })
        .catch(error => {
            console.error(error);
        });
    })
    .catch(error => {
        console.error(error);
    });
    
  }
  
</script>
<!--  Stylesheets  -->
<!-- vendor css files -->
<link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">

<!-- project main css files -->

<link rel="stylesheet" href="assets/css/main.css">
<!--/ stylesheets -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#sendotp").click(function(event){
      $("#verifyotpdiv").show();
      window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    firebase.auth().signInWithPhoneNumber("+91"+$('#student_mobile').val(), window.recaptchaVerifier) 
    .then(function(confirmationResult) {
      window.confirmationResult = confirmationResult;
      console.log(confirmationResult);
      
    });
    
	});
  
 
});
</script>
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

<body id="oakleaf" class="signup-page appWrapper">
<!-- Application Content -->
<div class="wrapper">
  <div class="header header-filter" style="background-image: url('assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
          <div class="card card-signup">
          <form class="form" action="" method="post" >
          <?php  include_once('./forms/signup_form.php'); ?>
          </form>
          
          </div>
          
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mt-20"> <a href="login.php" class="text-uppercase text-white">Back</a> </div>
        </div>
      </div>
    </footer>
  </div>
</div>

<!--/ Application Content --> <!--  Vendor JavaScripts --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<!--  Custom JavaScripts  --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 
</body>
</html>
