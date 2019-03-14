<?php
session_start();
if(!(isset($_SESSION['smp']))){
	header("location:index.php");
}

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>CashBook</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
                <section> <form style="width: 40%;float: right;" action="viewbank.php" method="post">
                                   <button type="submit" class="btn btn-primary" style="width:40%;float:right;border-bottom: solid 3px rgba(43, 162, 220, 0.39);padding:0px 0px 0px 0px;">View Bank Details</button>
                                    </form>
                    <header class="major">
                        <h2>Add Bank</h2>
                    </header>
                    
                        <div class="features" style="margin: 0 0 0 0;">
                            <form role="form" name="cashbook" action="action.php?page=bank" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bank Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                
                               
                                
                                <div class="form-group"><br><br>
                                    <button type="submit" class="btn btn-primary" >Save</button>
                                </div>
                               
                                <div class="form-group" style="color:#2e3192;"><br>
                                    <?php
                                    if(isset($_GET['msg'])){ 
                                        echo "Saved Successfully"; 
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
				<section id="search" class="alt"></section>
				<!-- Menu -->
				<nav id="menu">
					<ul>
						<li><span class="opener">Client Register</span>
							<ul>
								<li><a href="home.php">Add Clients</a></li>
								<li><a href="customer.php">Manage Clients</a></li>
							</ul>
						</li>
                        <li><a href="sale.php">Day Book</a></li>
						<li><a href="salereport.php">Manage DayBook</a></li>
						<li><a href="purchase.php">Purchase Details</a></li>
						<li><a href="purchasereport.php">Manage Purchase</a></li>
						<li><a href="cheque.php">Cheque Payment</a></li>
                        <li><a href="bankbook.php">Bank Book</a></li>
                        <li><a href="ledger.php">Ledger Account</a></li>
                       <li><a href="balanace.php">Client's Opening Balance</a></li>
                        <br><br><br><br><br><br>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
				
                <div class="copyright">
                    <small>
                      &copy; 2017, SMP Cashbook Designed & Developed By<br><a href="http://www.sientisolutions.com">sientisolutions.com</a>
                    </small>
				</div>
			</div>
		</div>
		<!-- Sidebar -->
	</div>

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>