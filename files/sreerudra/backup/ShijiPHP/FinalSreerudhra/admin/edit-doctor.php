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
	<link rel="stylesheet" href="datepic/include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
    <link rel="stylesheet" href="datepic/jquery.ui.timepicker.css?v=0.3.3" type="text/css" />

    <script type="text/javascript" src="datepic/include/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="datepic/include/ui-1.10.0/jquery.ui.core.min.js"></script>
    <script type="text/javascript" src="datepic/include/ui-1.10.0/jquery.ui.widget.min.js"></script>
    <script type="text/javascript" src="datepic/include/ui-1.10.0/jquery.ui.tabs.min.js"></script>
    <script type="text/javascript" src="datepic/include/ui-1.10.0/jquery.ui.position.min.js"></script>

    <script type="text/javascript" src="datepic/jquery.ui.timepicker.js?v=0.3.3"></script>

   
  
<link rel="stylesheet" href="dist/fastselect.min.css">
<script src="dist/fastselect.standalone.js"></script>

   
    <style type="text/css">
       
			.fstElement { font-size: 10px; }
            .fstToggleBtn { min-width: 16.5em; }

            .submitBtn { display: none; }

            .fstMultipleMode { display: block; }
            .fstMultipleMode .fstControls { width: 100%; }
			    
    </style>


    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-24327002-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

        function plusone_clicked() {
            $('#thankyou').fadeIn(300);
        }

        $(document).ready(function() {
            $('#floating_timepicker').timepicker({
                onSelect: function(time, inst) {
                    $('#floating_selected_time').html('You selected ' + time);
                }
            });

            $('#tabs').tabs();

        });


    </script>
    <!-- //time -->
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
                        <header class="panel-heading">
                            Edit Doctor
                            
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
									<strong>Success!</strong> Doctor Details Updated Successfully.
								</div>
								</center>
							<?php
							}
							?>
                            

                			<form class="cmxform form-horizontal" action="edit-doctor-action.php" method="post" >
                                    
                                    <?php
                                    require_once("connect.php");
									$doctor_id=$_GET['doctor_id'];
									$query_doctor=mysqli_query($con,"select * from doctor where doctor_id='".$doctor_id."'");
									if($row_doctor=mysqli_fetch_array($query_doctor)){
									?>
                                    
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Name</label>
                                        <div class="col-lg-6">
                                            <input id="doctor_id" name="doctor_id" type="text" value="<?php echo $row_doctor['doctor_id']; ?>" hidden="true">
                                            <input class=" form-control" id="name" name="name" type="text" value="<?php echo $row_doctor['name']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Department</label>
                                        <div class="col-lg-6">
                                            <select class=" form-control" name="specialist">
                                            <option value="">Select Department</option>
                                            <?php
											$specialist=$row_doctor['specialist'];
											$query_specialist=mysqli_query($con,"select * from specialist where status='0'");
											if(mysqli_fetch_row($query_specialist)>0){
												$query_specialist=mysqli_query($con,"select * from specialist where status='0'");
												while($row_specialist=mysqli_fetch_array($query_specialist)){
													$special=$row_specialist['specialist'];
													if($specialist==$special){
														?>
                                                            <option value="<?php echo $row_specialist['specialist']; ?>" selected><?php echo $row_specialist['specialist']; ?></option>
                                                        <?php
													}else{
														?>
                                                            <option value="<?php echo $row_specialist['specialist']; ?>"><?php echo $row_specialist['specialist']; ?></option>
                                                        <?php
													}
												}
											}
											?>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Qualification</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="qualification" name="qualification" type="text" value="<?php echo $row_doctor['qualification']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Gender</label>
                                        <div class="col-lg-6">
                                        	<?php
											$gender=$row_doctor['gender'];
											if($gender=="Male"){
												 ?>
                                                 <input type="radio" name="gender" id="optionsRadios1" value="Male" checked=""> Male
                                                 <input type="radio" name="gender" id="optionsRadios2" value="Female"> Female
                                                 <?php
											}else if($gender=="Female"){
												 ?>
                                                 <input type="radio" name="gender" id="optionsRadios1" value="Male" > Male
                                                 <input type="radio" name="gender" id="optionsRadios2" value="Female" checked=""> Female
                                                 <?php
											}else{
												 ?>
                                                 <input type="radio" name="gender" id="optionsRadios1" value="Male" > Male
                                                 <input type="radio" name="gender" id="optionsRadios2" value="Female"> Female
                                                 <?php
											}
											?>
                                         </div>
                                    </div>
                                     
                                   
                                      <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Consulting Time </label>
                                        <div class="col-lg-6">
                                            <label for="lastname" class="control-label col-lg-3" style="width:10%;float:left;">From</label> 
                                            <input type="text" id="timepicker_1" value="<?php echo $row_doctor['consult_from']; ?>" class="timepicker form-control br-radius-zero" name="from" style="width:41.5%;float:left;"/>
											<script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('#timepicker_1').timepicker({
                                                        showPeriod: true,
                                                        showLeadingZero: true
                                                    });
                                                });
                                            </script>
                                             <label for="lastname" class="control-label col-lg-3" style="width:7%;float:left;">To</label>
                                              <input type="text" id="timepicker_2" value="<?php echo $row_doctor['consult_to']; ?>" class="timepicker form-control br-radius-zero" name="to" style="width:41.5%;float:left;"/>
											<script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('#timepicker_2').timepicker({
                                                        showPeriod: true,
                                                        showLeadingZero: true
                                                    });
                                                });
                                            </script>
                                           
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Fee</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="fee" name="fee" type="text" value="<?php echo $row_doctor['fee']; ?>">
                                        </div>
                                    </div>
                                    
                                    
                                    
                                     <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Available Days</label>
                                        <div class="col-lg-6">
                                        	
	                                     <select class="multipleSelect form-control" multiple name="offday[]" >
                                            	<?php
												$code_array = array();
                                                $work=mysqli_query($con,"select * from workday where doctor_id='".$doctor_id."'");
												if(mysqli_fetch_row($work)>0){
													$days = "Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday";
													
													
													
															$work=mysqli_query($con,"select day from workday where doctor_id='".$doctor_id."'");
															while($day_row=mysqli_fetch_assoc($work)){
																 //$day=$day_row['day'];
																$code_array[] =$day_row['day'];
															}
															//print_r($code_array);
															
														$loop=explode(",",$days);
															for($i=0;$i<sizeof($loop);$i++){
																$l=$loop[$i];
																if(in_array($l,$code_array)){ 
																	?>
																	<option value="<?php echo $l; ?>" selected><?php echo $l; ?></option>
																	<?php
																}else{ 
																	?>
																	<option value="<?php echo $l; ?>"><?php echo $l; ?></option>
																	<?php
																}
														
														}

												}
												?>
                                            </select> 
                                           
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Break Time </label>
                                        <div class="col-lg-6">
                                            <label for="lastname" class="control-label col-lg-3" style="width:10%;float:left;">From</label> 
                                            <input type="text" id="timepicker_3" value="<?php echo $row_doctor['break_from']; ?>" class="timepicker form-control br-radius-zero" name="bfrom" style="width:41.5%;float:left;"/>
											<script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('#timepicker_3').timepicker({
                                                        showPeriod: true,
                                                        showLeadingZero: true
                                                    });
                                                });
                                            </script>
                                             <label for="lastname" class="control-label col-lg-3" style="width:7%;float:left;">To</label>
                                              <input type="text" id="timepicker_4" value="<?php echo $row_doctor['break_to']; ?>" class="timepicker form-control br-radius-zero" name="bto" style="width:41.5%;float:left;"/>
											<script type="text/javascript">
                                                $(document).ready(function() {
                                                    $('#timepicker_4').timepicker({
                                                        showPeriod: true,
                                                        showLeadingZero: true
                                                    });
                                                });
                                            </script>
                                           
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                      <input type="submit" id="imgupload" class="btn btn-primary upload-result" value="Update" name="submit" style="width:25%;float:left!important;" >


                                    </div>
                                </div>
                                <?php
									}
									?>
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
				$('.multipleSelect').fastselect();
				</script>
                
                 <script type="text/javascript">
  $('.timepicker').wickedpicker({now: '2:10', twentyFour: false, title:
                    'My Timepicker', showSeconds: true});
        //    $('.timepicker-24').wickedpicker({twentyFour: true});
        </script>
</body>
</html>
