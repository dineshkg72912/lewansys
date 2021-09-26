<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Theme Makker">
<link rel="shortcut icon" href="favicon.ico">
<title>Lewansys</title>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,500,700" rel="stylesheet" type="text/css">

<!-- Bootstrap core CSS -->
<link href="landing-page/css/bootstrap.min.css" rel="stylesheet">

<!-- Font Icons CSS -->
<link href="landing-page/css/pe-icon-7-stroke.css" rel="stylesheet">
</head>
<body>


<?php
require_once 'config/config.php';


$username = $_POST['username'];
$email  = $_POST['email'];
$password   = $_POST['pswd'];

$sql = "SELECT id FROM college_register WHERE email = '$email'";
$result = mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
if ($count >= 1){?>
        <h1 class="text-center text-danger">registered already</h1> >
                <div class="text-center">
                <a href="landing-page.php" class="btn btn-success ">Continue</a>
                </div>
<?php

}
else{
    $sql = "INSERT INTO college_register (username,email,pswd)VALUES 
    ('$username', '$email', '$password')";
    if ($con->query($sql) === TRUE) {?>
        <h1 class="text-center text-danger">registered successfully</h1> >
          <div class="text-center">
          <a href="landing-page.php" class="btn btn-success ">Continue</a>
         </div>
         <?php
    } 


}?>





<!-- js placed at the end of the document so the pages load faster --> 
<script src="landing-page/js/jquery-2.1.4.min.js"></script> 
<script src="landing-page/js/bootstrap.min.js"></script> 

<!-- Jquery easing --> 
<script type="text/javascript" src="landing-page/js/jquery.easing.1.3.min.js"></script> 

<!--sticky header--> 
<script type="text/javascript" src="landing-page/js/jquery.sticky.js"></script> 

<!-- mailchimp - ajax form --> 
<script type="text/javascript" src="landing-page/js/jquery.ajaxchimp.js"></script> 

<!--common script for all pages--> 
<script src="landing-page/js/jquery.app.js"></script>
</body>
</html>