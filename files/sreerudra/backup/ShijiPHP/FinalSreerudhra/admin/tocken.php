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
<!-- //table -->
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="table/js/jQuery-Table-Plugin.js"></script>
<link rel="stylesheet" type="text/css" href="table/css1/pagination.css" />
<link rel="stylesheet" type="text/css" href="table/css1/searching.css" />
<link rel="stylesheet" type="text/css" href="table/css1/sortable.css" />
<link rel="stylesheet" type="text/css" href="table/css1/resizable.css" />
<script src="table/lib/jspdf.js"></script>
<script type="text/javascript" src="table/lib/jspdf.debug.js"></script>
<!-- //table -->
<style>
#myTable th, #myTable td {
  width:10%;
}

a.print{
    text-decoration: none;
    display: inline-block;
    width: 14%;
    margin: 20px auto;
    background: #124e3a;
    background: linear-gradient(rgba(16, 79, 58, 0.54), #0e5c3c);
    text-align: center;
    color: #fff;
    padding: 3px 6px;
    border-radius: 3px;
    border: 1px solid #145f40;
}

i.fa.fa-print{
    margin-right: 5px;
}
a.print:hover{
    background: linear-gradient(#133936, rgba(18, 83, 58, 0.72));
}
</style>
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
                    <a href="tocken.php" class="active">
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
                            Tocken Download
                            
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
									 Saved Successfully.
								</div>
								</center>
							<?php
							}
							?>
                            

                <form class="cmxform form-horizontal" action="tocken.php" method="post" >
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"></label>
                                        <div class="col-lg-6">
                                            Enter Tocken number<input class=" form-control" id="tocken" name="tocken" type="text">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                      <input type="submit" id="imgupload" class="btn btn-primary upload-result" value="View" name="submit" style="width:25%;float:left!important;" >


                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        
                        <div class="panel panel-default" style="min-height:500px;border:none;">
                                
                        <?php
						if(isset($_POST['tocken'])){
							require_once("connect.php");
							$tocken=$_POST['tocken'];
							$query_tocken=mysqli_query($con,"select * from booking,doctor where tocken='".$tocken."' and booking.doctor_id=doctor.doctor_id");
							if(mysqli_fetch_row($query_tocken)>0){
								$query_tocken=mysqli_query($con,"select * from booking,doctor where tocken='".$tocken."' and booking.doctor_id=doctor.doctor_id");
								if($row_tocken=mysqli_fetch_array($query_tocken)){
							?>
                            
                           
                            <div class="panel-body">
                                <div class="form">
                                    <center>
                                        <div class="form-group ">
                                            <table id="myTable" style="width:50%;">
                                                <tr><td>Department</td><td><?php echo $row_tocken['specialist']; ?></td></tr>
                                                <tr><td>Doctor</td><td><?php echo $row_tocken[17]; ?></td></tr>
                                                <tr><td>Date</td><td><?php echo $row_tocken['date']; ?></td></tr>
                                                <tr><td>Disease</td><td><?php echo $row_tocken['disease']; ?></td></tr>
                                                <tr><td>Name</td><td><?php echo $row_tocken[4]; ?></td></tr>
                                                <tr><td>Email</td><td><?php echo $row_tocken['email']; ?></td></tr>
                                                <tr><td>Address</td><td><?php echo $row_tocken['address']; ?></td></tr>
                                                <tr><td>Phone</td><td><?php echo $row_tocken['phone']; ?></td></tr>
                                                <tr><td>Time</td><td><?php echo $row_tocken['time']; ?></td></tr>
                                                <tr><td>Tocken Number</td><td><div><?php echo $row_tocken['tocken']; ?></div></td></tr>
                                                <tr><td>payment status</td><td><?php if($row_tocken['pay']=='0'){ echo "Not Paid";}else{ echo "Paid"; } ?> </td></tr>
                                                 <tr><td>Status</td><td><?php if($row_tocken['status']=='0'){ echo "";}else{ echo $row_tocken['status']; } ?> </td></tr>
                                                
                                            </table>
                                        </div>
                                 	</center>
                                 </div>
                        	</div>
                            
                            <center>
                            <a href="print.php?tocken=<?php echo $_POST['tocken']; ?>" class="print"><i class="fa fa-print"></i>Print Tocken</a>
                          </center>
                            <?php
								}
							}else{
								?>
                                <p style="font-size:20px;text-align:center;">No Data Found</p>
                                <?php	
								}
						}
					?>
                     
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
function myDelete() {
    var person = prompt("Are you sure you want to delete");
    
    if (person == 'deleteadmin') {
        return true;
    }else{
		return false;	
	}
}
</script>
    
    
</body>
</html>
