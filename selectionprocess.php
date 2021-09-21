<?php
session_start();
require_once 'config/config.php';
$student_id = $_SESSION["student_id"];
$company_id = $_GET['company_id'];
$query = "SELECT job_id,job_title,company_name,job_status , location, skills, start_salary, end_salary, description   
FROM applied_job  
LEFT JOIN jobs  
ON applied_job.job_id = jobs.id WHERE jobs.id = $company_id and student_id = '$student_id'";
$result = mysqli_query($con, $query);

while($data= mysqli_fetch_assoc($result)){

$rows[] = $data;


}
foreach ($rows as $row){
    $company_name = $row['company_name'];
    $job_status = $row['job_status'];
}

?>


<!doctype html>
<html class="no-js" lang="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Lewnsys Selection Process</title>
<link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="assets/js/vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" href="assets/css/main.css">
</head>
<body id="oakleaf" class="main_Wrapper">

<!-- Application Content  -->
<div id="wrap" class="animsition"> 
    
    <!--HEADER Content -->
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
               
                <li class="dropdown messages"> <a href class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                    </a>
                    <div class="dropdown-menu pull-right with-arrow panel panel-default" role="menu">
                        <ul class="list-group">
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object thumb thumb-sm"> <img src="assets/images/pi-avatar.jpg" alt="" class=""> </span>
                                <div class="media-body"> <span class="block">Mi India sent you a message </span> <small class="text-muted">9 minutes ago</small> </div>
                                </a> </li>
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="assets/images/Jane-avatar.jpg" alt="" class=""> </span>
                                <div class="media-body"> <span class="block">Amazon sent you a message</span> <small class="text-muted">27 minutes ago</small> </div>
                                </a> </li>
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="assets/images/random-avatar1.jpg" alt="" class=""> </span>
                                <div class="media-body"> <span class="block">Flipkart sent you a message</span> <small class="text-muted">2 hour ago</small> </div>
                                </a> </li>
                            <li class="list-group-item"> <a role="button" tabindex="0" class="media"> <span class="pull-left media-object  thumb thumb-sm"> <img src="assets/images/random-avatar3.jpg" alt="" class=""> </span>
                                <div class="media-body"> <span class="block">Juniper sent you a message</span> <small class="text-muted">8 hours ago</small> </div>
                                </a> </li>
                        </ul>
                        <div class="panel-footer"> <a role="button" tabindex="0">Show all messages <i class="pull-right fa fa-angle-right"></i></a> </div>
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
                                <li><a href="jobsearch.php"><i class="fa fa-arrow-right"></i> <span>Job Search</span></a></li>
                                <li><a href="appliedjobs.php"><i class="fa fa-arrow-right"></i> <span>Applied Jobs</span></a></li>
                                

                           
                            </div>
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
        <div class="page page-forms-wizard"> 
            <!-- bradcome -->
            <div class="bg-light lter b-b wrapper-md mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="font-thin h3 m-0">Selection Process for <?php echo $company_name?></h1>
                        <small class="text-muted">You will see your job application status of <?php echo $company_name?> here</small> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <section class="boxs">
                        <div class="boxs-header dvd dvd-btm">
                            <h1 class="custom-font"><strong>Selection</strong> Process</h1>                            
                        </div>
                        <div class="boxs-body">
                            <div id="b_rootwizard">
                                <div class="navbar">
                                    <div class="navbar-inner">                                       
                                        <ul class="nav nav-pills">
                                            
                                            
                                            
                                            <li class="<?php if ($job_status== 1) {echo "active";}else{echo"";}?>"><a href="#btab1" class="tab">Applied </a></li>
                                            <li class="<?php if ($job_status== 2) {echo "active";}else{echo"";}?>"><a href="#btab2" data-toggle="tab">Shortlisted</a></li>
                                            <li class="<?php if ($job_status== 3) {echo "active";}else{echo"";}?>"><a href="#btab3" data-toggle="tab">Interview Date</a></li>
                                            <li class="<?php if ($job_status== 4) {echo "active";}else{echo"";}?>"><a href="#btab4" data-toggle="tab">Attended</a></li>
                                            <li class="<?php if ($job_status== 5) {echo "active";}else{echo"";}?>"><a href="#btab5" data-toggle="tab">Round 1</a></li>
                                            <li class="<?php if ($job_status== 6) {echo "active";}else{echo"";}?>"><a href="#btab6" data-toggle="tab">Round 2</a></li>
                                            <li class="<?php if ($job_status== 7) {echo "active";}else{echo"";}?>"><a href="#btab7" data-toggle="tab">Result</a></li>
                                            <li class="<?php if ($job_status== 8) {echo "active";}else{echo"";}?>"><a href="#btab8" data-toggle="tab">Release Offer</a></li>
                                            <li class="<?php if ($job_status== 9) {echo "active";}else{echo"";}?>"><a href="#btab9" data-toggle="tab">Upload Documents</a></li>
                                            <li class="<?php if ($job_status== 10) {echo "active";}else{echo"";}?>"><a href="#btab10" data-toggle="tab">Documents verified</a></li>
                                           <li class="<?php if ($job_status== 11) {echo "active";}else{echo"";}?>"><a href="#btab11" data-toggle="tab">Joining Date</a></li>



                                        </ul>                                      
                                    </div>
                                </div>
                                <div id="bar" class="progress progress-striped active">
                                    <div class="bar progress-bar progress-bar-orange" style="width: 14.2857%;" role="progressbar"></div>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane <?php if ($job_status== 1) {echo "active";}else{echo"";}?>" id="btab1">You have successfully applied for interview</div>
                                    <div class="tab-pane <?php if ($job_status== 2) {echo "active";}else{echo"";}?>" id="btab2">2. You have been shortlisted</div>
                                    <div class="tab-pane <?php if ($job_status== 3) {echo "active";}else{echo"";}?>" id="btab3">3. Your interview is scheduled on 25-Aug-2021</div>
                                    <div class="tab-pane <?php if ($job_status== 4) {echo "active";}else{echo"";}?>" id="btab4">4. You have attended the interview</div>
                                    <div class="tab-pane <?php if ($job_status== 5) {echo "active";}else{echo"";}?>" id="btab5">5. You have passed written test of round 1</div>
                                    <div class="tab-pane <?php if ($job_status== 6) {echo "active";}else{echo"";}?>" id="btab6">6. You have passed HR Round 2</div>
                                    <div class="tab-pane <?php if ($job_status== 7) {echo "active";}else{echo"";}?>" id="btab7">7. You have been selected for the post of Software developer</div>
                                    <div class="tab-pane <?php if ($job_status== 8) {echo "active";}else{echo"";}?>" id="btab8">8. We have selected your profile and your anual CTC will be 15L pa.</div>
                                    <div class="tab-pane <?php if ($job_status== 9) {echo "active";}else{echo"";}?>" id="btab9">9. Upload your all educational documents</div>
                                    <div class="tab-pane <?php if ($job_status== 10) {echo "active";}else{echo"";}?>" id="btab10">10. Your documents have been verified</div>
                                    <div class="tab-pane <?php if ($job_status== 11) {echo "active";}else{echo"";}?>" id="btab11">11. Your joining date is 25-jan-2022</div>
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-md-12">
                    <section class="boxs">
                        <div class="boxs-header dvd dvd-btm">
                            <h1 class="custom-font"><strong>Only use the below upload option when it is requested by company</strong> </h1>                           
                        </div>
                        <button class="btn btn-primary btn-raised btn-round"> <i class="fa fa-cloud-upload"></i> Upload Documents </button>
                      </section>
                </div>
            </div>
            
            <!-- page content --> 
            
        </div>
    </section>
    <!--/ CONTENT --> 
    
</div>
<!--/ Application Content --> 

<!--  Vendor JavaScripts  -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/js/vendor/parsley/parsley.min.js"></script> 
<script src="assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts  --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!--  Page Specific Scripts  --> 
<script type="text/javascript">
	$(document).ready(function() {
	  	$('#b_rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
			var $total = navigation.find('li').length;
			var $current = index+1;
			var $percent = ($current/$total) * 100;
			$('#b_rootwizard').find('.bar').css({width:$percent+'%'});
		}});
	});	
	
    $(window).load(function(){
        $('#rootwizard').bootstrapWizard({
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;

                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            },
            onNext: function(tab, navigation, index) {
                var form = $('form[name="step'+ index +'"]');
                form.parsley().validate();
                if (!form.parsley().isValid()) {
                    return false;
                }

            },

            onTabClick: function(tab, navigation, index) {
                var form = $('form[name="step'+ (index+1) +'"]');
                form.parsley().validate();
                if (!form.parsley().isValid()) {
                    return false;
                }
            }
        });
    });
</script> 
<!--/ Page Specific Scripts --> 

</body>
</html>
