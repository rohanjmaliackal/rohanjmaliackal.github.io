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
                <section>
                    <header class="major">
                        <h2>Customer's Opening Balance</h2>
                    </header>
   <form style="width: 40%;float: right;" action="viewbalance.php" method="post">
                    	<button type="submit" class="btn btn-primary" style="width:40%;float:right;border-bottom: solid 3px rgba(43, 162, 220, 0.39);padding:0px 0px 0px 0px;">View All</button>
                  	</form>
                        <div class="features" style="margin: 0 0 0 0;">
                            <form role="form" name="cashbook" action="action.php?page=balance" method="post">
                                <div class="form-group">
                                       <label for="exampleInputEmail1">Client Name</label>
                                       <input type="text" list="browsers" class="form-control" name="customer" autocomplete="off" required/>
                                    <datalist id="browsers">
                                     <?php
					    $con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
                                            $query=mysqli_query($con,"select * from customer");
                                            if(mysqli_fetch_row($query)>0){
                                                $query=mysqli_query($con,"select * from customer");
                                                while($row=mysqli_fetch_array($query)){
                                                    $name=$row['name'];
                                                    $orgname=$row['orgname'];
                                                    if($orgname==''){
														?>
                                                         <option value="<?php echo $row['name']; ?>">
                                                         <?php
													}else{
														?>
                                                      <option value="<?php echo $row['orgname']; ?>">
                                                        <?php
													}
												}
											}
													?>
                                     </datalist>
                                </div><br>

                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Opening Balance</label>
                                    <input type="text" class="form-control" id="balance" name="balance"  required>
                                </div><br>

                                
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Date</label>
                                    <input type="date" class="form-control" id="date" name="date"  required>
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
                         <li><a href="balance.php">Client's Opening Balance</a></li>
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