<!DOCTYPE html>
<head>
<title>Sreerudra Ayurveda Hospital</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<!-- //calendar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="date/jquery-ui.min.js"></script>
<script src="date/jquery-ui.multidatespicker.js"></script>
<link href="date/jquery-ui.css" rel="stylesheet"> 
<link href="date/jquery-ui.multidatespicker.css" rel="stylesheet"> 
<link rel="stylesheet" href="datepic/include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
    <link rel="stylesheet" href="datepic/jquery.ui.timepicker.css?v=0.3.3" type="text/css" />

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
   
   
   <a href="home.php" class="logo">
        <img src="images/logo.png" style="width:80%;"/>
    </a>
    
    
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li id="header_notification_bar" class="dropdown">
            <a href="logout.php">
				Logout
            </a>
           
        </li>
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
           <ul class="sidebar-menu" id="nav-accordion">
                
                <li style="margin-top: 50px;">
                    <a href="specialist.php">
                         <i class="fa fa-doctor"></i>
                        <span>Add Department</span>
                    </a>
                </li>
                <li class="sub-menu" >
                    <a href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>Packages</span>
                    </a>
                    <ul class="sub">
						<li><a href="package.php" >Add Package</a></li>
						<li><a href="view-package.php">View Package</a></li>
                    </ul>
                </li>
                <li>
                    <a href="doctor.php">
                         <i class="fa fa-doctor"></i>
                        <span>Add Doctor </span>
                    </a>
                </li>
                 <li>
                    <a href="view-doctor.php">
                        <i class="fa fa-th"></i>
                        <span>View Doctor </span>
                    </a>
                </li>
                <li>
                    <a href="leave.php" class="active">
                        <i class="fa fa-envelope"></i>
                        <span>Doctor On Leave</span>
                    </a>
                </li>
                  <li>
                    <a href="availabile.php" >
                         <i class="fa fa-list-alt"></i>
                        <span>Doctor Unavailability</span>
                    </a>
                </li>
                  <li>
                    <a href="view-booking.php">
                         <i class="fa fa-stack-exchange"></i>
                        <span>View Booking</span>
                    </a>
                </li>
                 <li>
                    <a href="view-refund.php">
                         <i class="fa fa-stack-exchange"></i>
                        <span>Refund</span>
                    </a>
                </li>
                  <li>
                    <a href="tocken.php">
                         <i class="fa fa-cloud-download"></i>
                        <span>Tocken Download</span>
                    </a>
                </li>
                 <li>
                    <a href="search.php">
                         <i class="fa fa-cloud-download"></i>
                        <span>Search Details</span>
                    </a>
                </li>
               
            </ul>           </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
         <a href="view-leave.php" class="btn btn-primary upload-result" style="float:right;">
				View Leave details
            </a>
	 		<div class="row">
            
               
                <div class="col-lg-12" >
                
           
                    <section class="panel">
                        <header class="panel-heading">
                            Doctor On Leave
                            
                        </header>
                        <div class="panel-body">
                            <div class="form">
                            <?php
							if(isset($_GET['msg'])){ ?>
								<script>
									$( document ).ready(function(){
										$('.alert-danger').fadeIn('slow', function(){
											$('.alert-danger').delay(6000).fadeOut('slow'); 
										});
									});
								</script>
								<center>
								<div class="alert alert-danger" style="width:50%;">
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Success!</strong> Leave Details Saved Successfully.
								</div>
								</center>
							<?php
							}
							?>
                            

                			<form class="cmxform form-horizontal" action="leave-action.php" method="post" >
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Select Department</label>
                                        <div class="col-lg-6">
                                            <select class=" form-control" id="specialist" name="specialist" onChange="getDoctor();">
                                            <option value="">Select Department</option>
                                            <?php
											require_once("connect.php");
											$query_specialist=mysqli_query($con,"select * from specialist where status='0'");
											if(mysqli_fetch_row($query_specialist)>0){
												$query_specialist=mysqli_query($con,"select * from specialist where status='0'");
												while($row_specialist=mysqli_fetch_array($query_specialist)){
											?>
                                            	<option value="<?php echo $row_specialist['specialist']; ?>"><?php echo $row_specialist['specialist']; ?></option>
                                            <?php
												}
											}
											?>
                                            </select> 
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Select Doctor</label>
                                        <div class="col-lg-6" id="result">
                                           <select class=" form-control" name="doctor">
                                            <option value="">Select Doctor</option>
                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Select Dates</label>
                                        <div class="col-lg-6">
                                            <input id="mdp-demo" class=" form-control" name="date">
											<script>
                                            $('#mdp-demo').multiDatesPicker();
                                            </script> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                      <input type="submit" id="imgupload" class="btn btn-primary upload-result" value="Save" name="submit" style="width:25%;float:left!important;" >


                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
		</div>
	</section>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p style="margin-left:20%;">Designed by <a href="https://sientisolutions.com">Sienti Solutions</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
  
   <script>
   function getDoctor() {
	   var specialist_id=document.getElementById("specialist").value;
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		 document.getElementById("result").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "ajax_doctor.php?specialist_id="+specialist_id, true);
	  xhttp.send();
	}
   </script>
</body>
</html>
