<?php
session_start();
require_once './config/config.php';
$student_id = $_SESSION["student_id"];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    
    $student_name=$_POST['student_name'];
    $student_email=$_POST['student_email'];
    $student_mobile=$_POST['student_mobile'];
    $student_address=$_POST['student_address'];
    $student_bio=$_POST['student_bio'];
    $student_degree=$_POST['student_degree'];
    $student_yearofpassing=$_POST['student_yearofpassing'];
    $student_percentage=$_POST['student_percentage'];
    $student_skill=$_POST['student_skill'];
    $student_certificate=$_POST['student_certificate'];
    $student_hobby=$_POST['student_hobby'];
    $student_achievements=$_POST['student_achievements'];
    $student_kl=$_POST['student_kl'];
    $student_project=$_POST['student_project'];
    $student_internship=$_POST['student_internship'];
    $student_companyname=$_POST['student_companyname'];
    $student_companyaddress=$_POST['student_companyaddress'];
    $sql = "UPDATE student_basicdetails SET student_id='$student_id', student_name='$student_name', student_email='$student_email', student_mobile='$student_mobile', student_address='$student_address', student_bio = '$student_bio', student_degree = '$student_degree', student_yearofpassing = '$student_yearofpassing', student_percentage = '$student_percentage', student_skill = '$student_skill', student_certificate = '$student_certificate', student_hobby = '$student_hobby', student_achievements = '$student_achievements', student_kl = '$student_kl', student_project = '$student_project', student_internship = '$student_internship', student_companyname = '$student_companyname', student_companyaddress = '$student_companyaddress'  WHERE student_id= $student_id";
    
if ($con->query($sql) === TRUE) {
    header('location: basicdetails.php');
    exit();
} else {
echo "Error: " . $sql . "<br>" . $con->error;
header('location: learn.php');
}$con->close();
  
}
$query = "SELECT * FROM student_basicdetails WHERE student_id = $student_id";
$result = mysqli_query($con, $query);
while($data= mysqli_fetch_assoc($result)){
    $rows[] = $data;
    }
    foreach ($rows as $row){
        $student_name = $row['student_name'];
        $student_email = $row['student_email'];
        $student_mobile = $row['student_mobile'];
        $student_address = $row['student_address'];
        $student_bio = $row['student_bio'];
        $student_degree = $row['student_degree'];
        $student_yearofpassing = $row['student_yearofpassing'];
        $student_percentage = $row['student_percentage'];
        $student_skill = $row['student_skill'];
        $student_certificate = $row['student_certificate'];
        $student_hobby = $row['student_hobby'];
        $student_achievements = $row['student_achievements'];
        $student_kl = $row['student_kl'];
        $student_project = $row['student_project'];
        $student_internship = $row['student_internship'];
        $student_companyname = $row['student_companyname'];
        $student_companyaddress = $row['student_companyaddress'];
    }


?>

<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Lewansys - Basic details</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/colorpicker/css/bootstrap-colorpicker.min.css">
<link rel="stylesheet" href="assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.css">
<link rel="stylesheet" href="assets/js/vendor/chosen/chosen.css">
<link rel="stylesheet" href="assets/js/vendor/summernote/summernote.css">
<link rel="stylesheet" href="assets/css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
 

</head>
<body id="oakleaf" class="main_Wrapper">
<!-- Application Content -->
<div id="wrap" class="animsition"> 
    <!--  HEADER Content -->
    <section id="header">
        <header class="clearfix"> 
            <!-- Branding -->
            <div class="branding"> <a class="brand" href="basicdetails.php"><span>Lewansys</span></a> <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a> </div>
            <!-- Branding end --> 
            
            <!-- Left-side navigation -->
            <ul class="nav-left pull-left list-unstyled list-inline">
                <li class="leftmenu-collapse"><a role="button" tabindex="0" class="collapse-leftmenu"><i class="fa fa-arrow-circle-o-left"></i></a></li>
            </ul>
            <!-- Left-side navigation end --> 
            
            <!-- Search -->
            <div class="search" id="main-search">
                <input type="text" class="form-control underline-input" placeholder="Anything Ask ME...">
            </div>
            <!-- Search end --> 
            
            <!-- Right-side navigation -->
            <ul class="nav-right pull-right list-inline">
                <li class="dropdown nav-profile"> <a href class="dropdown-toggle" data-toggle="dropdown"> <img src="assets/images/profile-photo.jpg" alt="" class="0 size-30x30"></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <div class="user-info">
                                <div class="user-name">Imran Ahmed</div>
                                <div class="user-position online">Available</div>
                            </div>
                        </li>
                        <li><a href="profile.html" role="button" tabindex="0"><span class="label label-success pull-right">80%</span><i class="fa fa-user"></i>Profile</a></li>
                        <li><a role="button" tabindex="0"><span class="label label-info pull-right">new</span><i class="fa fa-check"></i>Tasks</a></li>
                        <li> <a role="button" tabindex="0"><i class="fa fa-cog"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="locked.html" role="button" tabindex="0"><i class="fa fa-lock"></i>Lock</a></li>
                        <li><a href="login.php" role="button" tabindex="0"><i class="fa fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
                
                <li class="dropdown messages"> <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <div class="dropdown-menu pull-right with-arrow panel panel-default" role="menu">
                        <ul class="list-group">
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object thumb thumb-sm"> <img src="assets/images/pi-avatar.jpg" alt="" class=""> </span>
                                <div class="media-body"> <span class="block">Lucas sent you a message</span> <small class="text-muted">9 minutes ago</small> </div>
                                </a> </li>
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="assets/images/Jane-avatar.jpg" alt="" class=""> </span>
                                <div class="media-body"> <span class="block">Jane sent you a message</span> <small class="text-muted">27 minutes ago</small> </div>
                                </a> </li>
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="assets/images/random-avatar1.jpg" alt="" class=""> </span>
                                <div class="media-body"> <span class="block">Lee sent you a message</span> <small class="text-muted">2 hour ago</small> </div>
                                </a> </li>
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="assets/images/random-avatar3.jpg" alt="" class=""> </span>
                                <div class="media-body"> <span class="block">Rihtik sent you a message</span> <small class="text-muted">8 hours ago</small> </div>
                                </a> </li>
                        </ul>
                        <div class="panel-footer"> <a role="button" tabindex="0">Show all messages <i class="pull-right fa fa-angle-right"></i></a> </div>
                    </div>
                </li>
                <li class="dropdown notifications"> <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <div class="dropdown-menu pull-right with-arrow panel panel-default ">
                        <ul class="list-group">
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object media-icon"> <i class="fa fa-ban"></i> </span>
                                <div class="media-body"> <span class="block">User Lucas cancelled account</span> <small class="text-muted">12 minutes ago</small> </div>
                                </a> </li>
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object media-icon"> <i class="fa fa-spotify"></i> </span>
                                <div class="media-body"> <span class="block">2 voice mails</span> <small class="text-muted">Neque porro quisquam est</small> </div>
                                </a> </li>
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object media-icon"> <i class="fa fa-whatsapp"></i> </span>
                                <div class="media-body"> <span class="block">8 voice messanger</span> <small class="text-muted">8 texts</small> </div>
                                </a> </li>
                        </ul>
                        <div class="panel-footer"> <a role="button" tabindex="0">Show all notifications <i class="fa fa-angle-right pull-right"></i></a> </div>
                    </div>
                </li>
                <li class="toggle-right-leftmenu"><a role="button" tabindex="0"><i class="fa fa-gear"></i></a></li>
            </ul>
            <!-- Right-side navigation end --> 
        </header>
    </section>
    <!--/ HEADER Content  --> 
    <!-- CONTROLS Content  -->
    <div id="controls"> 
        <!--SIDEBAR Content -->
        <aside id="leftmenu">
            <div id="leftmenu-wrap">
                <div class="panel-group slim-scroll" role="tablist">
                    <div class="panel panel-default">
                        <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                            <div class="panel-body"> 
                                <!--  NAVIGATION Content -->
                                <ul id="navigation">
                                   <li class="active open"> <a role="button" tabindex="0"><i class="fa fa-list"></i> <span>Basic Details</span></a>
                                   <li><a href="jobsearch.php"><i class="fa fa-angle-right"></i>Job Search</a></li>
                                    <li><a href="appliedjobs.php"><i class="fa fa-arrow-right"></i> <span>Applied Jobs</span></a></li>
                                   
                                <!--/ NAVIGATION Content --> 
                       
                        
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!--/ SIDEBAR Content --> 
        
        <!--RIGHTBAR Content -->
        
        <!--/ RIGHTBAR Content --> 
    </div>
    <!--/ CONTROLS Content --> 
    <!--  CONTENT  -->
    <section id="content">
        <div class="page page-forms-common"> 
            
            <!-- bradcome -->
            <div class="bg-light lter b-b wrapper-md mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="font-thin h3 m-0">Now you can edit this form</h1>
                        <small class="text-muted">Welcome to Lewansys application</small> </div>
                </div>
            </div>
            <!-- row -->
           
              
           
                    <section class="boxs">
                        <div class="boxs-header dvd dvd-btm">
                            <h1 class="custom-font"><strong>Form</strong> Elements</h1>
                            
                        </div>
                        <div class="boxs-body">
                            <form class="form-horizontal" action="basicdetails_edit.php" method="post" role="form">
                                <?php  include_once('./forms/basicdetails_form_edit.php'); ?>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!--/ CONTENT --> 
</div>
<script>
    $('#skill').tokenfield({
  autocomplete:{
   source: ['PHP','Codeigniter','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql'],
   //source: 'ajax-city-search.php',
   
   delay:100
  },
  showAutocompleteOnFocus: true
 });
</script>
<!--/ Application Content --> 
<!--Vendor JavaScripts  --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/bootstrapscripts.bundle.js"></script>
<script src="assets/js/vendor/summernote/summernote.min.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!--  Page Specific Scripts  --> 
<script type="text/javascript">
	$(window).load(function(){
		$('#ex1').slider({
			formatter: function(value) {
				return 'Current value: ' + value;
			}
		});
		$("#ex1").on("slide", function(slideEvt) {
			$("#ex1SliderVal").text(slideEvt.value);
		});

		$("#ex2, #ex3, #ex4, #ex5").slider();

		//load wysiwyg editor
		$('#summernote').summernote({
			height: 200   //set editable area's height
		});
		//*load wysiwyg editor
	});
</script> 
<!--/ Page Specific Scripts -->
</body>
</html>
