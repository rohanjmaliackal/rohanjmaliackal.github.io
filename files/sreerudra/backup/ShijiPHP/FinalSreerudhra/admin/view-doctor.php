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
  width:12.5%;
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
            <a  href="logout.php">
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
               
            </ul>            </div>
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
                            View Doctor Details
                            
                        </header>
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
                                            <th data-sort='index' style="width:3%;">#</th>
                                            <th data-sort="String">Name</th>
                                            <th data-sort="Fixnum">Department</th>
                                            <th data-sort="Fixnum">Qualification</th>
                                            <th data-sort="Fixnum">Consulting Time</th>
                                            <th data-sort="Fixnum">Fee</th>
                                            <th data-sort="Fixnum">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            require_once("connect.php");
                                            $query_select_doctor=mysqli_query($con,"select * from doctor where status='0' order by doctor_id DESC");
                                            if(mysqli_fetch_row($query_select_doctor)>0){
                                                $i=0;
                                                $query_select_doctor=mysqli_query($con,"select * from doctor where status='0' order by doctor_id DESC");	
                                                while($row_doctor=mysqli_fetch_array($query_select_doctor)){
                                                    $i++;
                                                    ?>
                                                    <tr>
                                                        <td style="width:3%;"><?php echo $i; ?></td>
                                                        <td><?php echo $row_doctor['name']; ?></td>
                                                        <td><?php echo $row_doctor['specialist']; ?></td>
                                                        <td><?php echo $row_doctor['qualification']; ?></td>
                                                        <td><?php echo $row_doctor['consult_from']; echo "-"; echo $row_doctor['consult_to'];?></td>
                                                        <td><?php echo $row_doctor['fee']; ?></td>
                                                        <th>
                                                            <a href="delete-doctor.php?doctor_id=<?php echo $row_doctor['doctor_id']; ?>" class="btn  btn_create upload-result"   style="background: rgb(118, 60, 60);width:35%;float:left;color: #fff;" onclick="return myDelete();">Delete</a>
                                                            <a href="edit-doctor.php?doctor_id=<?php echo $row_doctor['doctor_id']; ?>" class="btn  btn_create upload-result"   style="background: rgb(60, 91, 118);width:31%;float:left;color: #fff;margin-left: 1%;" >Edit</a>
                
                                                            <a href="doctor-details.php?doctor_id=<?php echo $row_doctor['doctor_id']; ?>" class="btn  btn_create upload-result"   style="background: #3c763d;width:32%;float:left;color: #fff;margin-left: 1%;" >View</a>
                                                        </th>
                                                    </tr>
                                                    
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                   </table>
                                   </div>
                                   <div class="pagination_div"><a class = "first_page">«« First </a><a class = "prev_page">« Prev</a><span class="current_page">1</span><a class="next_page">Next »</a><a class="last_page">Last »»</a></div>
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
