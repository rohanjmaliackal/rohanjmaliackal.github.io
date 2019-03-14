<?php
session_start();
if(!(isset($_SESSION['smp']))){
	header("location:index.php");
}

?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>HRMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									
									<ul class="icons">
										<img src="img/logo.png" class="logo" data-pin-nopin="true">	
                                      </ul>
								</header>

							
							<!-- Section -->
								<section>
									<header class="major">
										<h2>Edit Sale</h2>
									</header>
									<div class="features" style="margin: 0 0 0 0;">
										 <form role="form" name="cashbook" action="editaction.php?page=customer" method="post">
                                          <?php
		
		
		$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
		$id=$_GET['id'];
		$query=mysqli_query($con,"select * from sale where sale_id='".$id."'");
		if($res=mysqli_fetch_row($query)>0){
			
			$qry=mysqli_query($con,"select * from sale where sale_id='".$id."'");
			if($row=mysqli_fetch_array($qry)){
				
				
			
		?> <input type="text"  id="customer_id" name="customer_id" value="<?php echo $row['sale_id']; ?>" hidden="true" style="display: none;"/>
                    <div class="form-group">
                        <label for="exampleInputEmail1">VCR/INV No</label>
                        <input type="text" class="form-control" id="orgname" name="orgname" value="<?php echo $row['orgname']; ?>">
                        
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Particulars</label>
                        <input type="text" class="form-control" id="name" name="name" required  value="<?php echo $row['name']; ?>">
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea class="form-control" id="address" name="address" required><?php echo $row['address']; ?></textarea>
                    </div>
                    
                     <div class="form-group">
                        <label for="exampleInputEmail1">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name="mobile" required  value="<?php echo $row['mobile']; ?>">
                    </div>
                    
                  
                  <?php
			}
                  }
                  ?>
                  
                   <div class="form-group"><br>
<br>

                        <button type="submit" class="btn btn-primary" >Update</button>
                   </div>
                   
                   <div class="form-group" style="color:#2e3192;"><br>

                   		<?php
						if(isset($_GET['msg'])){ echo "Updated Successfully"; 
						}
						?>	
                   </div>
                    </form>
									</div>
								</section>

							

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									
								</section>

							<!-- Menu -->
								<nav id="menu">
									
									<ul>
										
                                        
                                        <li>
											<span class="opener">Client Register</span>
											<ul>
												<li><a href="home.php">Add Clients</a></li>
												<li><a href="customer.php">Manage Clients</a></li>
												
											</ul>
										</li>
                                        
										<li><a href="sale.php">Sales Details</a></li>
										<li><a href="salereport.php">Sales Report</a></li>
										<li><a href="purchase.php">Purchase Details</a></li>
										<li><a href="purchasereport.php">Purchase report</a></li>
										
										<li><a href="ledger.php">Ledger Account</a></li>
										<br>
<br>
<br>
<br>
<br>
<br>
<br><br>
<br>

	<li><a href="logout.php">Logout</a></li>
									</ul>
								</nav>

							

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>