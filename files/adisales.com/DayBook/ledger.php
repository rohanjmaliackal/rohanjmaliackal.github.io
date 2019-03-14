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
										<h2>Ledger Account</h2>
									</header>
									<div class="features" style="margin: 0 0 0 0;">
										
                   						  <select name="client" class="form-control" id="client" style="width: 30%;float: left;margin-right:5%;">
                                            <option value="0">Select Client</option>
                                           <?php
										$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
												$query=mysqli_query($con,"select * from customer");
												if($res=mysqli_fetch_row($query)>0){
													$qry=mysqli_query($con,"select * from customer");
													while($row=mysqli_fetch_array($qry)){
													$name=$row['name'];
									$orgname=$row['orgname'];
									if($orgname==''){
										?>
										<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
										<?php
									}else{
										?>
										<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['orgname']; ?></option>       
										<?php	
									}
									
									
													}
												}
												 ?>
                 							</select>

                                             <select name="year" id="year"  style="width: 30%;float: right;margin-right:5%;">
                                            <option value="2016">2016-2017</option>
                                            <option value="2017">2017-2018</option>
                                            <option value="2018">2018-2019</option>
                                            <option value="2019">2019-2020</option>
                                            <option value="2020">2020-2021</option>
                                            <option value="2021">2021-2022</option>
                                            <option value="2022">2022-2023</option>
                                            <option value="2023">2023-2024</option>
                                             <option value="2024">2024-2025</option>
                                            
                                            
                                            </select>
                                            <input type="submit"  name="submit" id="submit" value="submit" class="btn btn-primary" onClick="trialbalance();"/>
         
									</div>
                                    <div id="result">

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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script><br>

  
   <script >
  function trialbalance()
  {
 
	
		
		var client=document.getElementById("client").value;
var year=document.getElementById("year").value;
	
	//alert(thirdcategory_id)
    var xmlhttp;
    if(window.XMLHttpRequest)
    {
      xmlhttp=new XMLHttpRequest();
    }
    else
    {
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
      if(xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        document.getElementById("result").innerHTML=xmlhttp.responseText;
      }

    }

    xmlhttp.open("POST","ledgerresult.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	
		 xmlhttp.send("client="+client+"&&year="+year);
	
   
  }

  
  </script>

	</body>
</html>