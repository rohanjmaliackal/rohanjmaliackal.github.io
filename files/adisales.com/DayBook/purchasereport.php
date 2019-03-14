<?php
session_start();
if(!(isset($_SESSION['smp']))){
	header("location:index.php");
}

?><!DOCTYPE HTML>
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
										<h2>Purchase Report</h2>
									</header>
									<div class="features" style="margin: 0 0 0 0;">
										
                   						  <input type="date" name="date" id="date" style="width:20%;margin-right:2%;"/>
                                      
                                            <input type="submit"  name="submit" id="submit" value="submit" class="btn btn-primary" onClick="report();"/>
         
									</div>
                                    <div id="result">
                                    
                                    <br>
<br>
<br>
<br>

                                    
                                    
                                      	<table class="table table-striped">
          		<thead>
                	
                	
                    <tr>
              			<td><label>SL NO</label></td>
              			<td><label>VCR/INV No</label></td>
               			<td><label>Date</label></td>
              			
              			
            		</tr>
            	</thead>
            	<tbody>
                
                <?php
			$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
			$query=mysqli_query($con,"select * from purchase");
					if($res=mysqli_fetch_row($query)>0){
						$j=0;
						$qry=mysqli_query($con,"select * from purchase");
						while($row=mysqli_fetch_array($qry)){
				
					$j++;
				?>
                 <tr>
            			<td><?php echo $j; ?></td> 
            			<td><?php echo $row['inv']; ?></td> 
                       
                      <td><?php echo $row['date']; ?></td> 
                        
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

  <style>
  table td{    color: black;
  }
  </style>
   <script >
  function report()
  {
 
	
		
	var date=document.getElementById("date").value;
	
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


    xmlhttp.open("GET","ajaxpurchasereport.php?date="+date,true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	
	xmlhttp.send();
	
   
  }

  
  </script>

	</body>
</html>