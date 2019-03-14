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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="date/jquery-ui.min.js"></script>
<script src="date/jquery-ui.multidatespicker.js"></script>
<link href="date/jquery-ui.css" rel="stylesheet"> 
<link href="date/jquery-ui.multidatespicker.css" rel="stylesheet"> 
<link rel="stylesheet" href="datepic/include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
    <link rel="stylesheet" href="datepic/jquery.ui.timepicker.css?v=0.3.3" type="text/css" />

<style>
#myTable th, #myTable td {
  width:10%;
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
                    <a href="view-booking.php" >
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
                    <a href="search.php" class="active">
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
                            Search Booking Details
                            
                        </header>
                        
                        
                        
                        
                        <div class="row">
            <div class="col-md-12">

                <div data-collapsed="0" class="panel">

                    <div class="panel-heading">
                        <div class="panel-title">
                            Data Filter
                        </div>
                    </div>

                    <div class="panel-body">

                        <div class="row">


                          

                           

                           <form name="filter" action="search.php" method="post">
											<?php
                                            if(isset($_POST['date']) && $_POST['date']!=''){
												$date=$_POST['date'];
												?>
                                                <div class="col-md-2 form-group">
                                                     <label for="lastname" class="control-label col-lg-3">Date</label>
                                                     <input id="mdp-demo" class=" form-control" name="date" id="date" value="<?php echo $date; ?>">
                                                <script>
                                                $('#mdp-demo').datepicker();
                                                </script> 
                                               
                                                </div>
                                                <?php
											}else{
											?>
                                            <div class="col-md-2 form-group">
                                                 <label for="lastname" class="control-label col-lg-3">Date</label>
                                                 <input id="mdp-demo" class=" form-control" name="date" id="date" >
											<script>
                                            $('#mdp-demo').datepicker();
                                            </script> 
                                           
                            				</div>
                            				<?php
											}
											?>
                                            
                                            
                                            
											<?php
                                            
                                            if(isset($_POST['department']) && $_POST['department']!=''){
												$department=$_POST['department'];
												?>
                                                <div class="col-md-2 form-group">
                                                <label for="lastname" class="control-label col-lg-3">Department</label>
                                                    <select class="form-control" name="department" id="department">
                                                     <option value="">Select Department</option>
                                                                <?php
                                                                require_once("connect.php");
                                                                $query_specialist=mysqli_query($con,"select * from specialist where status='0'");
                                                                if(mysqli_fetch_row($query_specialist)>0){
                                                                    $query_specialist=mysqli_query($con,"select * from specialist where status='0'");
                                                                    while($row_specialist=mysqli_fetch_array($query_specialist)){
																		$specialist=$row_specialist['specialist'];
																		if($specialist==$department){
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
                                                <?php	
											}else{ 
											?>
                                            <div class="col-md-2 form-group">
                                            <label for="lastname" class="control-label col-lg-3">Department</label>
                                                <select class="form-control" name="department" id="department">
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
                                            <?php
											}
											?>
                                            
                                            
											<?php
                                            if(isset($_POST['doctor']) && $_POST['doctor']!=''){
												$doctor=$_POST['doctor'];
												?>
                                                <div class="col-md-2 form-group">
                                                     <label for="lastname" class="control-label col-lg-3">Doctor</label>
                                                    <select class="form-control" name="doctor" id="doctor">
                                                     <option value="">Select Doctor</option>
                                                                <?php
                                                                require_once("connect.php");
                                                                $query_doctor=mysqli_query($con,"select * from doctor where status='0'");
                                                                if(mysqli_fetch_row($query_doctor)>0){
                                                                    $query_doctor=mysqli_query($con,"select * from doctor where status='0'");
                                                                    while($row_doctor=mysqli_fetch_array($query_doctor)){
																		$d_d=$row_doctor['doctor_id'];
																		if($doctor==$d_d){
																			?>
																			<option value="<?php echo $row_doctor['doctor_id']; ?>" selected><?php echo $row_doctor['name']; ?></option>
																			<?php
																		}else{
																			?>
																			<option value="<?php echo $row_doctor['doctor_id']; ?>"><?php echo $row_doctor['name']; ?></option>
																			<?php
																		}
                                                                    }
                                                                }
                                                                ?>
                                                    </select>
                                                </div>
                                                <?php
											}else{
											?>
											<div class="col-md-2 form-group">
												 <label for="lastname" class="control-label col-lg-3">Doctor</label>
												<select class="form-control" name="doctor" id="doctor">
												 <option value="">Select Doctor</option>
															<?php
															require_once("connect.php");
															$query_doctor=mysqli_query($con,"select * from doctor where status='0'");
															if(mysqli_fetch_row($query_doctor)>0){
																$query_doctor=mysqli_query($con,"select * from doctor where status='0'");
																while($row_doctor=mysqli_fetch_array($query_doctor)){
															?>
																<option value="<?php echo $row_doctor['doctor_id']; ?>"><?php echo $row_doctor['name']; ?></option>
															<?php
																}
															}
															?>
												</select>
											</div>
											<?php
											}
											?>
                                            
                                            <?php
							
											if(isset($_POST['status']) && $_POST['status']!=''){
												$status=$_POST['status'];
												if($status=="cancelled"){
													?>
                                                    <div class="col-md-2 form-group">
                                                        <label for="lastname" class="control-label col-lg-3">Status</label>
                                                        <select class="form-control" name="status" id="status">
                                                         <option value="">Select Status</option>
                                                          <option value="cancelled" selected>Cancelled</option>
                                                           <option value="completed">Completed</option>
                                                             
                                                        </select>
                                                    </div>
                                                    <?php
												}else if($status=="completed"){
													?>
                                                    <div class="col-md-2 form-group">
                                                        <label for="lastname" class="control-label col-lg-3">Status</label>
                                                        <select class="form-control" name="status" id="status">
                                                         <option value="">Select Status</option>
                                                          <option value="cancelled">Cancelled</option>
                                                           <option value="completed" selected>Completed</option>
                                                             
                                                        </select>
                                                    </div>
                                                    <?php
												}else{
													?>
                                                    <div class="col-md-2 form-group">
                                                        <label for="lastname" class="control-label col-lg-3">Status</label>
                                                        <select class="form-control" name="status" id="status">
                                                         <option value="">Select Status</option>
                                                          <option value="cancelled">Cancelled</option>
                                                           <option value="completed">Completed</option>
                                                             
                                                        </select>
                                                    </div>
                                                    <?php
												}
												
											}else{
											
											?>
                                            <div class="col-md-2 form-group">
                                                <label for="lastname" class="control-label col-lg-3">Status</label>
                                                <select class="form-control" name="status" id="status">
                                                 <option value="">Select Status</option>
                                                  <option value="cancelled">Cancelled</option>
                                                   <option value="completed">Completed</option>
                                                     
                                                </select>
                                            </div>
                                            <?php
                                            }
                                            ?>
											<?php
                                            if(isset($_POST['pay']) && $_POST['pay']!=''){
												$pay=$_POST['pay'];
												if($pay=="paid"){
													?>
                                                    <div class="col-md-2 form-group">
                                                          <label for="lastname" class="control-label col-lg-3">Pay</label>
                                                        <select class="form-control" name="pay" id="pay">
                                                         <option value="">Select Pay Status</option>
                                                          <option value="paid" selected>Paid</option>
                                                           <option value="refund">Refund</option>
                                                             
                                                        </select>
                                                    </div>
                                                    <?php
												}else if($pay=="refund"){
													?>
                                                    <div class="col-md-2 form-group">
                                                          <label for="lastname" class="control-label col-lg-3">Pay</label>
                                                        <select class="form-control" name="pay" id="pay">
                                                         <option value="">Select Pay Status</option>
                                                          <option value="paid">Paid</option>
                                                           <option value="refund" selected>Refund</option>
                                                             
                                                        </select>
                                                    </div>
                                                    <?php
												}else{
													?>
                                                    <div class="col-md-2 form-group">
                                                          <label for="lastname" class="control-label col-lg-3">Pay</label>
                                                        <select class="form-control" name="pay" id="pay">
                                                         <option value="">Select Pay Status</option>
                                                          <option value="paid">Paid</option>
                                                           <option value="refund">Refund</option>
                                                             
                                                        </select>
                                                    </div>
                                                    <?php
												}
												
											}else{
												?>
												<div class="col-md-2 form-group">
													  <label for="lastname" class="control-label col-lg-3">Pay</label>
													<select class="form-control" name="pay" id="pay">
													 <option value="">Select Pay Status</option>
													  <option value="paid">Paid</option>
													   <option value="refund">Refund</option>
														 
													</select>
												</div>
												<?php
											}
											?>
											
											<?php
											if(isset($_POST['tocken']) && $_POST['tocken']!=''){
												$tocken=$_POST['tocken'];
												?>
                                                <div class="col-md-2 form-group">
                                                 <label for="lastname" class="control-label col-lg-3">Tocken</label>
                                                    <input type="text" placeholder=".col-md-2" class="form-control" name="tocken" id="tocken" value="<?php echo $tocken; ?>">
                                            	</div>
                                            	<?php
											}else{
												?>
                                                <div class="col-md-2 form-group">
                                                 <label for="lastname" class="control-label col-lg-3">Tocken</label>
                                                    <input type="text" placeholder=".col-md-2" class="form-control" name="tocken" id="tocken">
                                            	</div>
                                            	<?php
											}
											?>

 							 <div class="col-md-12 form-group">
                            	<center><input type="submit" value="Submit" class="btn  btn_create upload-result"  style="background: #284080;width:15%;color: #fff;margin-top:1%;" /></center>
                            </div>
                            </form>
                        </div>

                    </div>

                </div>

            </div>
        </div>




                        	<div class="panel panel-default" style="min-height:500px;border:none;">
                                <div class="div_class">
                                    <select name="nazwa" class="quantity" style="display:none;">
                                    <option selected>10</option>
                                    <option>20</option>
                                    <option>30</option>
                                    <option>40</option>
                                    <option>50</option>
                                    </select>
                                   <!-- <div class="search_div">
                                        <input type="text" id="myInput" class="search_input" placeholder="Search..."/>
                                        <a class="clearlink" title="Clear textbox"></a>
                                    </div>-->
                                    <div class="table_over_flow">
                                    <table id="myTable" class=" pagination  searchable  table_style_3 css_class">
                                        <thead>
                                        <tr>
                                            <th data-sort='index'>#</th>
                                            <th data-sort="String">Department</th>
                                            <th data-sort="Fixnum">Doctor's name</th>
                                            <th data-sort="Fixnum">Dates</th>
                                            <th data-sort="Fixnum">Time</th>
                                            <th data-sort="Fixnum">Name</th>
                                                <th data-sort="Fixnum">Fee</th>
                                            <th data-sort="Fixnum">Tocken</th>
                                             <th data-sort="Fixnum">Payment</th>
                                            <th data-sort="Fixnum">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                          /*  require_once("connect.php");
                                            $query_select_booking=mysqli_query($con,"select * from booking,doctor where booking.status='0' and doctor.status='0' and booking.doctor_id=doctor.doctor_id order by booking.booking_id DESC");
                                            if(mysqli_fetch_row($query_select_booking)>0){
                                                $i=0;
                                                $query_select_booking=mysqli_query($con,"select * from booking,doctor where booking.status='0' and doctor.status='0' and booking.doctor_id=doctor.doctor_id order by booking.booking_id DESC");	
                                                while($row_booking=mysqli_fetch_array($query_select_booking)){
                                                    $i++;*/
                                                    ?>
                                                    
                                                    <?php
											require_once("connect.php");
											$query="select * from booking,doctor where booking.doctor_id=doctor.doctor_id and booking.status='0' and doctor.status='0'";
											if(isset($_POST['date']) && $_POST['date']!=''){
												$date=$_POST['date'];
												$query.="and booking.date='".$date."'";	
											}
											if(isset($_POST['department']) && $_POST['department']!=''){
												$department=$_POST['department'];
												$query.="and booking.specialist='".$department."'";	
											}
											if(isset($_POST['doctor']) && $_POST['doctor']!=''){
												$doctor=$_POST['doctor'];
												$query.="and booking.doctor_id='".$doctor."'";	
											}
											if(isset($_POST['status']) && $_POST['status']!=''){
												$status=$_POST['status'];
												$query.="and booking.st='".$status."'";	
											}
											if(isset($_POST['pay']) && $_POST['pay']!=''){
												$pay=$_POST['pay'];
												$query.="and booking.pay='".$pay."'";	
											}
											if(isset($_POST['tocken']) && $_POST['tocken']!=''){
												$tocken=$_POST['tocken'];
												$query.="and booking.tocken='".$tocken."'";	
											}
											//print_r($query);
                                            $query_select_booking=mysqli_query($con,$query);
											$i=0;
                                            while($row_booking=mysqli_fetch_array($query_select_booking)){
												$i++;

?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $row_booking['specialist']; ?></td>
                                                        <td><?php echo $row_booking['name']; ?></td>
                                                        <td><?php echo $row_booking['date']; ?></td>
                                                        <td><?php echo $row_booking['time']; ?></td>
                                                        <td><?php echo $row_booking[4]; ?></td>
                                                     <td><?php echo $row_booking['fee']; ?></td>
                                                        <td><?php echo $row_booking['tocken']; ?></td>
                                                        <td><?php if($row_booking['pay']=='0'){
															   ?><p id="pay<?php echo $row_booking['booking_id']; ?>"><a  onClick="getPay('<?php echo $row_booking['booking_id']; ?>');">Pay</a></p><?php
														   }else{ echo $row_booking['pay']; }?></td>
                                                        <th>
                                                        
                                                        <?php if($row_booking['st']=='completed'){ ?>
															 <p><a href="booking-details.php?booking_id=<?php echo $row_booking['booking_id']; ?>" class="btn  btn_create upload-result"   style="background: #077740;width:85%;float:left;color: #fff;margin-top:1%;">View</a></p><br>
                                                              </br>
                                                              <p id="complete<?php echo $row_booking['booking_id']; ?>">
                                                                       Completed</p>
                                                                       
                                                                      <?php
														   }else{
															   ?>
                                                           <p><a href="delete-booking.php?booking_id=<?php echo $row_booking['booking_id']; ?>&&email=<?php echo $row_booking['email']; ?>&&phone=<?php echo $row_booking['phone']; ?>" class="btn  btn_create upload-result"  style="background: rgb(162, 30, 30);width:85%;float:left;color: #fff;margin-top:1%;" onclick="return myDelete();">Cancel</a></p><br>
																			</br>
                                                            <p><a href="booking-details.php?booking_id=<?php echo $row_booking['booking_id']; ?>" class="btn  btn_create upload-result"   style="background: #077740;width:85%;float:left;color: #fff;margin-top:1%;">View</a></p><br>
 																			</br>
                                                            <p id="complete<?php echo $row_booking['booking_id']; ?>"><a  class="btn  btn_create upload-result"   style="background: #284080;width:85%;float:left;color: #fff;margin-top:1%;" onClick="getComplete('<?php echo $row_booking['booking_id']; ?>');">Completed</a></p>
                                                               <?php
														   }
                                                          ?>
                                        
														</th>
                                                    </tr>
                                                    
                                                    <?php
                                                }
                                            //}
                                            ?>
                                        </tbody>
                                   </table>
                                   </div>
                                   <div class="pagination_div"><a class = "first_page">«« First </a><a class = "prev_page">« Prev</a><span class="current_page">1</span><a class="next_page">Next »</a><a class="last_page">Last »»</a></div>
                                </div>    
							</div>
                            
                            <?php
							//}
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


 <script>
	function getPay(id){  
						$.ajax({
								url: "updatepay.php",
								type: "POST",
								dataType:"JSON",
								data: {"id":id},
								success: function (data) {
									
									document.getElementById("pay"+id).innerHTML="Paid";
										return false;		
									
								}
						});	
						return false;
	}
	</script>  
    
 
    <script>
	function getComplete(id){ 
						$.ajax({
								url: "updatecomplete.php",
								type: "POST",
								dataType:"JSON",
								data: {"id":id},
								success: function (data) {
									alert(id); document.getElementById("complete"+id).innerHTML="Completed";
									alert(id);
										return false;		
									
								}
						});	
						return false;
	}
	</script>  
   
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
