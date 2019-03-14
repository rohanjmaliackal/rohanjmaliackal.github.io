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

<!-- //time -->
<link rel="stylesheet" href="datepic/stylesheets/wickedpicker.css">
<script type="text/javascript" src="datepic/src/wickedpicker.js"></script>
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
                        <span>Add Specialist </span>
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
                    <a href="view-doctor.php" class="active">
                        <i class="fa fa-th"></i>
                        <span>View Doctor </span>
                    </a>
                </li>
                <li>
                    <a href="leave.php">
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
	 		<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        
                        
                        <?php
							require_once("connect.php");
							$doctor_id=$_GET['doctor_id'];
							$query_doctor=mysqli_query($con,"select * from doctor where doctor_id='".$doctor_id."'");
							if($row_doctor=mysqli_fetch_array($query_doctor)){
							
							?>
                            
                            <header class="panel-heading">
                            	<?php echo $row_doctor['name']; ?> 
                            </header>
                            <div class="panel-body">
                                <div class="form">
                                    <center>
                                        <div class="form-group ">
                                            <table id="myTable" style="width:50%;">
                                                <tr><td>Department</td><td><?php echo $row_doctor['specialist']; ?></td></tr>
                                                <tr><td>Qualification</td><td><?php echo $row_doctor['qualification']; ?></td></tr>
                                                <tr><td>Gender</td><td><?php echo $row_doctor['gender']; ?></td></tr>
                                                <tr><td>Consulting Time From</td><td><?php echo $row_doctor['consult_from']; ?></td></tr>
                                                <tr><td>Consulting Time To</td><td><?php echo $row_doctor['consult_to']; ?></td></tr>
                                                <tr><td>Break Time From</td><td><?php echo $row_doctor['break_from']; ?></td></tr>
                                                <tr><td>Break Time To</td><td><?php echo $row_doctor['break_to']; ?></td></tr>
                                                <tr><td>Work Day</td>
                                                <td>
												<?php 
												$work=mysqli_query($con,"select day from workday where doctor_id='".$doctor_id."'");
												while($day_row=mysqli_fetch_array($work)){
													echo $day_row['day']; echo "</br>";
												}
												?>
                                                </td></tr>
                                                
                                            </table>
                                        </div>
                                 	</center>
                                 </div>
                        	</div>
                            <?php
						}
					?>
                    
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
  <script type="text/javascript">
  $('.timepicker').wickedpicker({now: '8:16', twentyFour: false, title:
                    'My Timepicker', showSeconds: true});
        //    $('.timepicker-24').wickedpicker({twentyFour: true});
        </script>
</body>
</html>
