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
            	<?php 
				$page=$_GET['page'];
				$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
				$id=$_GET['id'];
				if($page=="customer"){
					?>
					<section>
						<header class="major">
							<h2>Customer Registration</h2>
						</header>
						<div class="features" style="margin: 0 0 0 0;">
							<form role="form" name="cashbook" action="editaction.php?page=customer" method="post">
                            	<?php
									$query=mysqli_query($con,"select * from customer where customer_id='".$id."'");
									if($res=mysqli_fetch_row($query)>0){
										$qry=mysqli_query($con,"select * from customer where customer_id='".$id."'");
										if($row=mysqli_fetch_array($qry)){
											?> 
                                            <input type="text"  id="customer_id" name="customer_id" value="<?php echo $row['customer_id']; ?>" hidden="true" style="display: none;"/>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Organization Name</label>
                                                <input type="text" class="form-control" id="orgname" name="orgname" value="<?php echo $row['orgname']; ?>">
                                                
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Client Name</label>
                                                <input type="text" class="form-control" id="name" name="name" required  value="<?php echo $row['name']; ?>">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <textarea class="form-control" id="address" name="address" required><?php echo $row['address']; ?></textarea>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile</label>
                                                <input type="text" class="form-control" id="mobile" pattern="[789][0-9]{9}" title="Enter Valid Number" name="mobile" required  value="<?php echo $row['mobile']; ?>">
                                            </div>
                    
											<?php
                                        }
                                  	}
                                 	?>
                  
                   						<div class="form-group"><br><br>
											<button type="submit" class="btn btn-primary" >Update</button>
                   						</div>
                   
                   						<div class="form-group" style="color:#2e3192;"><br>
										<?php
										if(isset($_GET['msg'])){ 
											echo "Updated Successfully"; 
										}
										?>	
                   						</div>
							</form>
						</div>
					</section>
					<?php
				}
				else if($page=="bank"){
					?>
					<section>
                     <form style="width: 40%;float: right;" action="viewbank.php" method="post">
                                   <button type="submit" class="btn btn-primary" style="width:40%;float:right;border-bottom: solid 3px rgba(43, 162, 220, 0.39);padding:0px 0px 0px 0px;">View Bank</button>
                                    </form>
						<header class="major">
							<h2>Edit Bank Details</h2>
						</header>
						<div class="features" style="margin: 0 0 0 0;">
							<form role="form" name="cashbook" action="action.php?page=bankupdate" method="post">
                            	<?php
									$query=mysqli_query($con,"select * from bank where bank_id='".$id."'");
									if($res=mysqli_fetch_row($query)>0){
										$qry=mysqli_query($con,"select * from bank where bank_id='".$id."'");
										if($row=mysqli_fetch_array($qry)){
											?> 
                                            <input type="text"  id="bank_id" name="bank_id" value="<?php echo $row['bank_id']; ?>" hidden="true" style="display: none;"/>
                                           
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Bank Name</label>
                                                <input type="text" class="form-control" id="name" name="name" required  value="<?php echo $row['name']; ?>">
                                            </div>
                                            
                                         
                    
											<?php
                                        }
                                  	}
                                 	?>
                  
                   						<div class="form-group"><br><br>
											<button type="submit" class="btn btn-primary" >Update</button>
                   						</div>
                   
                   						<div class="form-group" style="color:#2e3192;"><br>
										<?php
										if(isset($_GET['msg'])){ 
											echo "Updated Successfully"; 
										}
										?>	
                   						</div>
							</form>
						</div>
					</section>
					<?php
				}
				else if($page=="sale"){
					?>
    				<section>
						<header class="major">
							<h2>Edit Sale Details</h2>
						</header>
						<div class="features" style="margin: 0 0 0 0;">
							<form role="form" name="cashbook" action="editaction.php?page=sale" method="post">
                            	<?php
								$query=mysqli_query($con,"select * from sale where sale_id='".$id."'");
								if($res=mysqli_fetch_row($query)>0){
									$qry=mysqli_query($con,"select * from sale where sale_id='".$id."'");
									if($row=mysqli_fetch_array($qry)){
										?> 
                                        <input type="text"  id="sale_id" name="sale_id" value="<?php echo $row['sale_id']; ?>" hidden="true" style="display: none;"/>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">VCR/INV No</label>
                                            <input type="text" class="form-control" id="inv" name="inv" value="<?php echo $row['inv']; ?>">
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date</label>
                                            <input type="text" class="form-control" id="date" name="date" required  value="<?php echo $row['date']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Particular</label>
                                            <input type="text" class="form-control" id="particular" name="particular" required  value="<?php echo $row['particular']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Debit</label>
                                            <textarea class="form-control" id="debit" name="debit" required><?php echo $row['debit']; ?></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Credit</label>
                                            <input type="text" class="form-control" id="credit" name="credit" required  value="<?php echo $row['credit']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Balance</label>
                                            <input type="text" class="form-control" id="balance" name="balance" required  value="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bill</label>
                                            <input type="text" class="form-control" id="bill" name="bill" required  value="<?php echo $row['bill']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cash</label>
                                            <input type="text" class="form-control" id="cash" name="cash" required  value="<?php echo $row['cash']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total</label>
                                            <input type="text" class="form-control" id="total" name="total" required  value="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cheque Number</label>
                                            <input type="text" class="form-control" id="chqno" name="chqno" required  value="<?php echo $row['chqno']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">cheque date</label>
                                            <input type="text" class="form-control" id="chqdate" name="chqdate" required  value="<?php echo $row['chqdate']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Amount</label>
                                            <input type="text" class="form-control" id="amt" name="amt" required  value="<?php echo $row['amt']; ?>">
                                        </div>
                  
                  						<?php
									}
							  	}
							  	?>
                                <div class="form-group"><br><br>
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
	
					<?php	
                    }else if($page=="purchase"){
                        ?>
    					<section>
							<header class="major">
								<h2>Edit Purchase Details</h2>
							</header>
							<div class="features" style="margin: 0 0 0 0;">
								<form role="form" name="cashbook" action="editaction.php?page=purchase" method="post">
                                	<?php
									$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
									$id=$_GET['id'];
									$query=mysqli_query($con,"select * from purchase where purchase_id='".$id."'");
									if($res=mysqli_fetch_row($query)>0){
										$qry=mysqli_query($con,"select * from purchase where purchase_id='".$id."'");
										if($row=mysqli_fetch_array($qry)){
										?> 
                                        <input type="text"  id="purchase_id" name="purchase_id" value="<?php echo $row['purchase_id']; ?>" hidden="true" style="display: none;"/>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">VCR/INV No</label>
                                            <input type="text" class="form-control" id="orgname" name="orgname" value="<?php echo $row['inv']; ?>">
                                            
                                        </div>
                    
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Date</label>
                                            <input type="text" class="form-control" id="date" name="date" required  value="<?php echo $row['date']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Particular</label>
                                            <input type="text" class="form-control" id="particular" name="particular" required  value="<?php echo $row['particular']; ?>">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Item</label>
                                            <input type="text" class="form-control" id="item" name="item" required  value="<?php echo $row['item']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Quantity</label>
                                            <input type="text" class="form-control" id="qty" name="qty" required  value="<?php echo $row['qty']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Bill</label>
                                            <input type="text" class="form-control" id="bill" name="bill" required  value="<?php echo $row['bill']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cash</label>
                                            <input type="text" class="form-control" id="cash" name="cash" required  value="<?php echo $row['cash']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Other</label>
                                            <input type="text" class="form-control" id="other" name="other" required  value="<?php echo $row['other']; ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Amount</label>
                                            <input type="text" class="form-control" id="otheramt" name="otheramt" required  value="<?php echo $row['otheramt']; ?>">
                                        </div>
                   						<?php
									}
                  				}
                  				?>
                  
                               <div class="form-group"><br><br>
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
 					<?php
					}else{
						header("location:error.php");
					}
					?>
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