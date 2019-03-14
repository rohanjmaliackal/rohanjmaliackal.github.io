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
                    <a href="specialist.php" class="active">
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
                    <a href="availabile.php">
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
               
            </ul>              </div>
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
                            Add Department                            
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
                            

                <form class="cmxform form-horizontal" action="specialist-action.php" method="post" >
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3"></label>
                                        <div class="col-lg-6">
                                            Enter Department<input class=" form-control" id="specialist" name="specialist" type="text">
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
                                            <th data-sort='index' style="width:5%;">#</th>
                                            <th data-sort="String">Department</th>
                                            <th data-sort="Fixnum">Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            require_once("connect.php");
                                            $query_select_specialist=mysqli_query($con,"select * from specialist where status='0' order by specialist_id DESC");
                                            if(mysqli_fetch_row($query_select_specialist)>0){
                                                $i=0;
                                                $query_select_specialist=mysqli_query($con,"select * from specialist where status='0' order by specialist_id DESC");	
                                                while($row_specialist=mysqli_fetch_array($query_select_specialist)){
                                                    $i++;
                                                    ?>
                                                    <tr>
                                                        <td style="width:5%;"><?php echo $i; ?></td>
                                                        <td><?php echo $row_specialist['specialist']; ?></td>
                                                        <th>
                                                            <a href="delete-specialist.php?specialist_id=<?php echo $row_specialist['specialist_id']; ?>" class="btn  btn_create upload-result"    onclick="return myDelete();">&#10060;</a>
                                                            
                
                                                        </th>
                                                        
                                                    </tr>
                                                    
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                   </table>
                                    </div>
                                    
                                    <div class="table_over_flow">
                                   <div class="pagination_div"><a class = "first_page">«« First </a><a class = "prev_page">« Prev</a><span class="current_page">1</span><a class="next_page">Next »</a><a class="last_page">Last »»</a></div>
                               
                                 </div>
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
