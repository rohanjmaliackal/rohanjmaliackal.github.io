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
							<h2>Customer Details</h2>
						</header>
						<div class="features" style="margin: 0 0 0 0;" >
							<div style="width:100%;overflow-x:auto;">
                            	<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                    <thead>
                                        <tr>
                                            <th>SL No</th>
                                         
                                            <th>Client Name</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
        							<tbody>
									<?php
                                  $con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
                                    $query=mysqli_query($con,"select * from balance");
                                    if($res=mysqli_fetch_row($query)>0){
                                        $j=0;
                                        $qry=mysqli_query($con,"select * from balance");
                                        while($row=mysqli_fetch_array($qry)){
                                            $j++;
                                            ?>
                                            <tr>
                                                <td><?php echo $j; ?></td>
                                                <td class="center"><?php echo $row['customer_id']; ?></td>
                                                <td class="center"><?php echo $row['balance']; ?></td>
                                                <td class="center"><?php echo $row['date']; ?></td>
                                               
                                                <td class="center">
                                                  
                                                    <a class="btn btn-danger" href="delete.php?page=balance&&id=<?php echo $row['balance_id']; ?>" onclick="return myFunction();">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                        }else{
                                            ?>
                                            <tr><td colspan="6">No Data Found</td></tr>
                                            <?php
                                        }
                                        ?>
        								</tbody>
        							</table>
								</div>
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


<script>
function myFunction() {
    var person = prompt("Are you sure you want to delete this Balance");
    
    if (person == 'smpdelete') {
        return true;
    }else{
		return false;	
	}
}
</script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>