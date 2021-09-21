<?php
session_start();
require_once 'config/config.php';
$student_id = $_SESSION["student_id"];

if(isset($_GET['job_id'])){
	$job_id = $_GET['job_id'];
	$sql = "INSERT INTO applied_job (student_id, job_id, job_status)VALUES 
    ($student_id, '$job_id', 1)";

if ($con->query($sql) === TRUE) {
    header('location: jobsearch.php');
    exit();
} else {
echo "Error: " . $sql . "<br>" . $con->error;

}$con->close();
	

}
$query = "SELECT * FROM jobs ";
$result = mysqli_query($con, $query);
while($data= mysqli_fetch_assoc($result)){
	
	$rows[] = $data;
	
}

?>

<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>:: Oakleaf - Admin Dashboard ::</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

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
    $('#show').click(function() {
      $('.menu').toggle("slide");
    });
});
</script>

</head>
<body id="oakleaf" class="main_Wrapper">

<!-- Application Content  -->
<div id="wrap" class="animsition"> 
	
	<!--  HEADER Content  -->
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
					</a>
					
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
	
	<!-- CONTROLS Content -->
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
								<li><a href="basicdetails.php"><i class="fa fa-angle-right"></i>Basic Details</a></li>
								<li class="active open"> <a role="button" tabindex="0"><i class="fa fa-list"></i> <span>Job search</span></a>
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
	
	<!-- CONTENT  -->
	
	<section id="content">
		<div class="page page-search-results">
			<!-- bradcome -->
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Dashboard</h1>
						<small class="text-muted">Job Search</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<section class="boxs">
						<div class="boxs-body">
							<div class="input-group search-bar">
								<input type="text" class="form-control " name="search" placeholder="Search as per skill set...">
								<span class="input-group-btn">
								<button class="btn btn-raised btn-primary" type="button"><i class="fa fa-search"></i> Search</button>
								</span>
							</div>
						</div>
					</section>
				</div>
				<?php foreach ($rows as $row){
					$skills =  explode(" , ",$row['skills']); ?>

				<div class="col-md-12">
					<section class="boxs">
						<div class="boxs-body">
							<ul class="search-results fulltext">
												<li class="search-result">
													<div class="cover">
														
														<h4><a href="#"><?php echo $row['job_title'] .' - ' .$row['company_name']; ?></a></h4>
														<h6><?php echo $row['location']; ?><br>
															₹<?php echo $row['start_salary']; ?> - ₹<?php echo $row['end_salary']; ?> a year</h6>
														<p class="menu" style="display: none;"><?php echo $row['description']; ?></p>
														
														<h5>Skills Required:</h5>
														<?php
														foreach ($skills as $item) {?>
															
														
															<span class="label label-success"><?php echo $item; ?></span>
														<?php } ?>
													</div>
												
														<button id="show" class="btn btn-raised btn-primary">View Job Description</button>
														<a href="jobsearch.php?job_id=<?php echo $row['id']; ?>">
														<button class="btn btn-raised btn-primary">Apply Now</button>
														</a>
														
														</li>
													</ul></div></section></div>
													<?php }  ?>
													
 <div >
    <ol>
      <li>India</li>
      <li>US</li>
      <li>UK</li>
      <li>Australia</li>
    </ol>
 </div>
													


            
                                    
				<div class="col-md-12">
					<section class="boxs">
						<div class="boxs-body">
							<ul class="pagination pagination-primary">
								<li><a href="#"><i class="fa fa-angle-left"></i></a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</section>
				</div>
			</div>
			<!-- /row --> 
		</div>
	</section>
	<!--/ CONTENT -->
</div>

<!--/ Application Content --> 

<!-- Vendor JavaScripts  --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/js/vendor/daterangepicker/moment.min.js"></script> 
<script src="assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script> 
<script src="assets/js/vendor/slider/bootstrap-slider.min.js"></script> 
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
		$("#ex5").slider();

	});
</script> 


<!--/ Page Specific Scripts --> 
</body>
</html>
