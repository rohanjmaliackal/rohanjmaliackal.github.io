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
        <style>
		input[type="text"],input[type="date"],input[type="password"],  input[type="email"],  input[type="tel"],  input[type="search"],  input[type="url"],  select,  textarea {
	
	border: none;
	
}
input[type="text"],select{
	height:100%;
}
#query{
	height: 2.75em;
}
table td {
   
    height: 100%;
}
		</style>
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
									<header class="major"  style="width: 80%;float: left;">
										<h2>Bank Book</h2>
									</header>
                                   <form style="width: 40%;float: right;" action="bank.php" method="post">
                                   <button type="submit" class="btn btn-primary" style="width:40%;float:right;border-bottom: solid 3px rgba(43, 162, 220, 0.39);padding:0px 0px 0px 0px;">Add Bank</button>
                                    </form>
                                    
									<div class="features" style="margin: 0 0 0 0;">
                                    
 <div id="variant" style="overflow-x:auto;float: left;">
             <input type="text"  id="balance0" value="0" hidden="true" style="display:none;">
             
              <input type="text"  id="num" value="10" hidden="true" style="display:none;">

               	<table class="table table-striped">
          		<thead>
                	
                	 <tr>
              			<td rowspan="3"><label>SL No<sup>*</sup></label></td>
              			<td rowspan="3"><label>VCR/INV No</label></td>
               			<td rowspan="3"><label>Particulars</label></td>
                          <td><label>BankName</label></td>
                                         <td><label>Client's BankName</label></td>
                                        <td><label>ChqNo</label></td>
                                        <td><label>ChqDate</label></td>
                                        <td><label>Amount</label></td>
                                        <td>Actions</td>
                    </tr>
                    
            	</thead>
            	<tbody class="input_fields_wrap">
            		<?php
					
					$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
					$q=mysqli_query($con,"select * from sale where amt!=''");
					if(mysqli_fetch_row($q)>0){
						$q=mysqli_query($con,"select * from sale where amt!=''");
						$i=0;
						while($row=mysqli_fetch_array($q)){
							$i++;
					?>
                    <tr>
            			<td><?php echo $i; ?></td> 
            			<td><?php echo $row['inv']; ?></td> 
                        <td>
                        <?php echo $row['customer']; ?>
                        </td>
                        
                        <td><?php echo $row['our_bank']; ?></td> 
                        <td><?php echo $row['bank']; ?></td> 
                        <td><?php echo $row['chqno']; ?></td> 
                        <td><?php echo $row['chqdate']; ?></td> 
                        <td><?php echo $row['amt']; ?></td> 
                         <td class="center">
                                                   
                                                    <a class="btn btn-danger" href="delete.php?page=banksale&&id=<?php echo $row['sale_id']; ?>" onclick="return myFunction();">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>Delete
                                                    </a>
                                                </td>
                        	</tr>
                           <?php
						}
						
					}
					?>
                   
                   
                   <?php
					
					
					$qq=mysqli_query($con,"select * from cheque");
					if(mysqli_fetch_row($qq)>0){
						$qq=mysqli_query($con,"select * from cheque");
						$i=0;
						while($rowq=mysqli_fetch_array($qq)){
							$i++;
					?>
                    <tr>
            			<td><?php echo $i; ?></td> 
            			<td><?php echo $rowq['inv']; ?></td> 
                        <td>
                        <?php echo $rowq['customer']; ?>
                        </td>
                        
                        <td><?php echo $rowq['our_bank']; ?></td> 
                        <td><?php echo $rowq['bank']; ?></td> 
                        <td><?php echo $rowq['chqno']; ?></td> 
                        <td><?php echo $rowq['chqdate']; ?></td> 
                        <td><?php echo $rowq['amt']; ?></td> 
                         <td class="center">
                                                   
                                                    <a class="btn btn-danger" href="delete.php?page=bankcheque&&id=<?php echo $rowq['cheque_id']; ?>" onclick="return myFunction();">
                                                        <i class="glyphicon glyphicon-trash icon-white"></i>Delete
                                                    </a>
                                                </td>
                        	</tr>
                           <?php
						}
						
					}
					?>
                    
                    
           		</tbody>
            	
          </table>
          </div>
                  
                  
                   <div class="form-group"><br>
<br>

                        
                   </div>
                   
                   <div class="form-group" style="color:#2e3192;"><br>

                   		
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



<script>
function myFunction() {
    var person = prompt("Are you sure you want to delete this Cheque Details");
    
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            
            
             <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
      
<script>

$(document).ready(function() {
	//alert('kk');
    
		
		var max_fields      = 100; //maximum input boxes allowed
		var wrapper         = $(".input_fields_wrap"); //Fields wrapper
		var add_button      = $(".add_field_button"); //Add button ID
		
		var y=document.getElementById("count").value;
		var x = y; //initlal text box count
		$(add_button).click(function(e){ //on add input button click
			e.preventDefault();
			if(x < max_fields){ //max input box allowed
				x++; //text box increment
			//	alert(x);
			
				$(wrapper).append('<tr><td><input type="text" class="form-control" id="slno'+x+'" name="slno[]" value="'+x+'" ></td><td><input type="text" class="form-control" id="inv'+x+'" name="inv[]"  ></td><td><select name="customer[]" id="customer'+x+'" onChange="getval('+x+')" ><option value="0">select</option>  <?php  $con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook"); $query=mysqli_query($con,"select * from customer"); if(mysqli_fetch_row($query)>0){ $query=mysqli_query($con,"select * from customer"); while($row=mysqli_fetch_array($query)){ $name=$row['name']; $orgname=$row['orgname']; if($orgname==''){ ?> <option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option> <?php }else{ ?> <option value="<?php echo $row['customer_id']; ?>"><?php echo $row['orgname']; ?></option> <?php } } }?><option value="other">Other</option></select><div id="text'+x+'"></div></td><td><input type="text" class="form-control" id="item'+x+'" name="item[]"  ></td><td><input type="text" class="form-control" id="qty'+x+'" name="qty[]" ></td><td><input type="text" class="form-control" id="bill'+x+'" name="bill[]" ></td><td><input type="text" class="form-control" id="cash'+x+'" name="cash[]" ></td><td><input type="text" class="form-control" id="other'+x+'" name="other[]"></td><td><input type="text" class="form-control" id="otheramt'+x+'" name="otheramt[]" ></td></tr>'); //add input box
			}
		});
	
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent().parent().remove(); x--;
    });
});
</script>

<script>

function getval(a) {
	var b=document.getElementById("customer"+a).value;
	//alert(b);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("text"+a).innerHTML = this.responseText;
    }
  };
  //alert(a);
  //alert(b);
  xhttp.open("GET", "ajax.php?val="+b+"&& num="+a, true);
  xhttp.send();
}

</script>



<script>

function getbalance(type,id) {
	var num=document.getElementById("num").value;
	//alert(num);
	for(var i=1;i<=num;i++){
		var debit=document.getElementById("debit"+i).value;
		var credit=document.getElementById("credit"+i).value;
		if(i==1){
			oldbalance=0;
			if(debit=='' && credit==''){
				document.getElementById("balance"+i).value='';
			}
			if(debit=='' && credit!=''){
				var balance=parseInt(oldbalance)-parseInt(credit);
				document.getElementById("balance"+i).value=balance;	
			}
			if(credit=='' && debit!=''){
				var balance=parseInt(oldbalance)+parseInt(debit);
				document.getElementById("balance"+i).value=balance;	
			}
		}else{
			var j=i-1;
			oldbalance=document.getElementById("balance"+j).value;
			if(oldbalance==''){
				for(var k=j;k>=1;k--){
					var val=document.getElementById("balance"+k).value;
					if(val==''){
						oldbalance=0;
						continue;	
					}else{
						oldbalance=val;
						break;	
					}
				}
			}
			if(debit=='' && credit==''){
				document.getElementById("balance"+i).value='';
			}
			if(debit=='' && credit!=''){
				var balance=parseInt(oldbalance)-parseInt(credit);
				document.getElementById("balance"+i).value=balance;	
			}
			if(credit=='' && debit!=''){
				var balance=parseInt(oldbalance)+parseInt(debit);
				document.getElementById("balance"+i).value=balance;	
			}
		}
	}
	
}

</script>
<script>

function getbalances(type,id) {
	
	if(type=="debit"){
		var debitval=document.getElementById("debit"+id).value;
		if(debitval==''){
			debitval=0;
		}
		var oldid=id-1;
		var oldbalance=document.getElementById("balance"+oldid).value;
		if(oldbalance==''){
			if(id==1){
				oldbalance=0;
			}else{
				for(var k=oldid;k>=1;k--){
					var val=document.getElementById("balance"+k).value;
					//alert(val);
					if(val==''){
						continue;	
					}else{
						oldbalance=val;
						break;	
					}
				}
			}
		}
		//alert(oldbalance);
		//alert(debitval);
		var balance=parseInt(debitval)+parseInt(oldbalance);
		document.getElementById("balance"+id).value = balance;
		//allbal();
	}
	if(type=="credit"){
		var debitval=document.getElementById("credit"+id).value;
		if(debitval==''){
			debitval=0;
		}
		var oldid=id-1;
		var oldbalance=document.getElementById("balance"+oldid).value;
		if(oldbalance==''){
			if(id==1){
				oldbalance=0;
			}else{
				for(var k=id;k>=1;k--){
					var val=document.getElementById("balance"+k).value;
					if(val==''){
						continue;	
					}else{
						oldbalance=val;
						break;	
					}
				}
			}
		}
		var balance=parseInt(oldbalance)-parseInt(debitval);
		document.getElementById("balance"+id).value = balance;
		//allbal();
	}
	
	
	
}

function allbals(){
	
	var num=document.getElementById("num").value;
	
	for(var i=1;i<num;i++){
		var debit=document.getElementById("debit"+i).value;
		var credit=document.getElementById("credit"+i).value;
		if(debit==''){
			if(credit==''){
				document.getElementById("balance"+i).value='';	
			}else{
				if(i==1){
					var balances=0;
					var baltotal=parseInt(balances)-parseInt(credit);
					document.getElementById("balance"+i).value=baltotal;
				}else{
					var j=i-1;
					balances=document.getElementById("balance"+j).value;
					if(balances==''){
						for(var k=i;k>=1;k--){

								var val=document.getElementById("balance"+k).value;
								if(val==''){
									continue;	
								}else{
									balances=val;
									break;	
								}
						}
					}
					var baltotal=parseInt(balances)-parseInt(credit);
					document.getElementById("balance"+i).value=baltotal;
				}
			}
		}else{
			if(i==1){
				var balances=0;
				var baltotal=parseInt(balances)+parseInt(debit);
				document.getElementById("balance"+i).value=baltotal;
			}else{
				var j=i-1;
				balance=document.getElementById("balance"+j).value;
				if(balances==''){
					for(var k=i;k>=1;k--){
							var val=document.getElementById("balance"+k).value;
							if(val==''){
								continue;	
							}else{
								balances=val;
								break;	
							}
					}
				}
				var baltotal=parseInt(balances)+parseInt(debit);
				document.getElementById("balance"+i).value=baltotal;
			}
		}
	}	
}
</script>



<script>

function gettotal(id) {
	
		
		var billval=document.getElementById("bill"+id).value;
		var cashval=document.getElementById("cash"+id).value;
		if(billval==''){
			billval=0;
		}
		if(cashval==''){
			cashval=0;
		}
		var balance=parseInt(billval)+parseInt(cashval);
		
		document.getElementById("total"+id).value = balance;
	
	
}

</script>

	</body>
</html>