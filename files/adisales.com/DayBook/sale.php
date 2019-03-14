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
        <style>
			input[type="text"],input[type="date"],input[type="password"],  input[type="email"],  input[type="number"],  input[type="search"],  input[type="url"],  select,input,  textarea {
				border: none;
			}
			input[type="number"]{
				width:50%;	
			}
			input[type="text"],select{
				height:100%;
			}
			table td {
				height: 100%;
			}
			.parti{
				display:none;	
			}
		</style>
	</head>
    
	<body>
	<!-- Wrapper -->
	<div id="wrapper" style="overflow:scroll;">
        <!-- Main -->
        <div id="main" style="width:1200px;">
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
                        <h2>Day Book Entry</h2>
                    </header>
                    <form style="width: 40%;float: left;" action="managesale.php" method="post">
                    	<input type="date" name="date" id="date" style="width:50%;float:left;border: solid 1px rgba(210, 215, 217, 0.75);height:50px;"/>
                   		<button type="submit" class="btn btn-primary" style="width:40%;float:right;border-bottom: solid 3px rgba(43, 162, 220, 0.39);padding:0px 0px 0px 0px;">View All</button>
                  	</form>
            		<div class="features" style="margin: 0 0 0 0;">
                  		<?php
						if(isset($_GET['msg'])){
						?>
							<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                            <script>
                            $( document ).ready(function(){
                                $('.alert-danger').fadeIn('slow', function(){
                                   $('.alert-danger').delay(6000).fadeOut('slow'); 
                                });
                            });
                            </script>
                            <div class="alert alert-danger" style="color:#2ba2dc;">Sales details saved successfully.<br><br></div>
    					<?php
						}
						?>
    					<?php
							if(isset($_GET['update'])){
							?>
								<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
								<script>
								//When the page has loaded.
								$( document ).ready(function(){
									$('.alert-danger').fadeIn('slow', function(){
									   $('.alert-danger').delay(6000).fadeOut('slow'); 
									});
								});
								</script>
        						<div class="alert alert-danger" style="color:#2ba2dc;">Sales details updated successfully.<br><br></div>
						<?php
                        }
                        ?>
                        <?php
							if(isset($_GET['seldt'])){
							?>
								<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
								<script>
								//When the page has loaded.
								$( document ).ready(function(){
									$('.alert-danger').fadeIn('slow', function(){
									   $('.alert-danger').delay(6000).fadeOut('slow'); 
									});
								});
								</script>
        						<div class="alert alert-danger" style="color:#2ba2dc;">Sales details already Exists in this date.<br><br></div>
						<?php
                        }
                        ?>
						<form role="form" name="cashbook" action="action.php?page=sale" method="post" style="width:100%;">
            				<div id="variant" style="overflow-x:auto;">
             				<input type="text"  id="balance0" value="0" hidden="true" style="display:none;">
             				<input type="text"  id="num" value="10" hidden="true" style="display:none;">
                            <table class="table table-striped">
                                <thead>
                                    <tr> 
                                        <td colspan="2">Date</td>
                                        <td colspan="2"><input type="date" class="form-control"  name="date"  id="todate" required  value="<?php echo date("Y-m-d"); ?>" onChange="getdate();"></td>
                                          <td colspan="10" style="border:none;color:red;" id="savemsg"></td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2"><label>SL No</label></td>
                                        <td rowspan="2"><label>VCR/INV No</label></td>
                                        <td rowspan="2"><label>Particulars</label></td>
                                        <td colspan="3"><label>Ledger</label></td>
                                        <td colspan="3"><label>Sales Details</label></td>
                                        <td colspan="5"><label>Sale Cheque Details</label></td>
                                       
                                    </tr>
                                    <tr>
                                        <td><label>Debit</label></td>
                                        <td><label>Credit</label></td>
                                        <td><label>Balance</label></td>
                                        <td><label>Bill Amt</label></td>
                                        <td><label>Cash</label></td>
                                        <td><label>Total</label></td>
                                        <td><label>BankName</label></td>
                                         <td><label>Client's BankName</label></td>
                                        <td><label>ChqNo</label></td>
                                        <td><label>ChqDate</label></td>
                                        <td><label>Amount</label></td>
                                        
                                    </tr>
                                </thead>
                            	<tbody class="input_fields_wrap">
                                
                                
                                
                                
                                <tr>  
                                    <td><input type="text" class="form-control" id="slno1" name="slno[]" value="1" ></td> 
                                    <td><input type="text" class="form-control" id="inv1" name="inv[]"  ></td> 
                                    <td>
                                    <input list="browsers" name="customer[]" />
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
									</td> 
                                    <td><input type="text" class="form-control" id="debit1" name="debit[]"   onKeyUp="getbalance(1);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><input type="text" class="form-control" id="credit1" name="credit[]" onKeyUp="getbalance(1);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><input type="text" class="form-control" id="balance1" name="balance[]" onFocus="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><input type="text" class="form-control" id="bill1" name="bill[]" onKeyUp="gettotal(1);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><input type="text" class="form-control" id="cash1" name="cash[]" onKeyUp="gettotal(1);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><input type="text" class="form-control" id="total1" name="total[]" onFocus="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><select name="ourbank[]" id="ourbank">
                                            <option value="select">select</option>       
                                             <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                  	<td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                    <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                </tr>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
            					
                    			<tr>
                                        <td><input type="text" class="form-control" id="slno2" name="slno[]" value="2" ></td> 
                                        <td><input type="text" class="form-control" id="inv2" name="inv[]"  ></td> 
                                        <td>
                                        <input list="browsers" name="customer[]" />
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
                                        </td> 
                                        <td><input type="text" class="form-control" id="debit2" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                        <td><input type="text" class="form-control" id="credit2" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                        <td><input type="text" class="form-control" id="balance2" name="balance[]" ></td> 
                                        <td><input type="text" class="form-control" id="bill2" name="bill[]" onKeyUp="gettotal(2);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                        <td><input type="text" class="form-control" id="cash2" name="cash[]" onKeyUp="gettotal(2);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                        <td><input type="text" class="form-control" id="total2" name="total[]" ></td> 
                                        <td><select name="ourbank[]" id="ourbank">
                                             <option value="select">select</option>       
											 <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                                      
                                    </tr>
                    	<tr>
            			<td><input type="text" class="form-control" id="slno3" name="slno[]" value="3" ></td> 
            			<td><input type="text" class="form-control" id="inv3" name="inv[]"  ></td> 
                        <td>
                        <input list="browsers" name="customer[]" />
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
                        </td> 
                        <td><input type="text" class="form-control" id="debit3" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="credit3" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="balance3" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill3" name="bill[]" onKeyUp="gettotal(3);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="cash3" name="cash[]" onKeyUp="gettotal(3);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="total3" name="total[]" ></td> 
                        <td><select name="ourbank[]" id="ourbank">
                                            <option value="select">select</option>       
                                             <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td>  
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        
            		</tr>
                    <tr>
            			<td><input type="text" class="form-control" id="slno4" name="slno[]" value="4" ></td> 
            			<td><input type="text" class="form-control" id="inv4" name="inv[]"  ></td> 
                        <td>
                        <input list="browsers" name="customer[]" />
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
                        </td> 
                        <td><input type="text" class="form-control" id="debit4" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="credit4" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="balance4" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill4" name="bill[]" onKeyUp="gettotal(4);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="cash4" name="cash[]" onKeyUp="gettotal(4);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="total4" name="total[]" ></td> 
                        <td><select name="ourbank[]" id="ourbank">
                                            <option value="select">select</option>       
                                             <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                         
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno5" name="slno[]" value="5" ></td> 
            			<td><input type="text" class="form-control" id="inv5" name="inv[]"  ></td> 
                        <td>
                        <input list="browsers" name="customer[]" />
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
                        </td> 
                        <td><input type="text" class="form-control" id="debit5" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="credit5" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="balance5" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill5" name="bill[]" onKeyUp="gettotal(5);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="cash5" name="cash[]" onKeyUp="gettotal(5);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="total5" name="total[]" ></td> 
                        <td><select name="ourbank[]" id="ourbank">
                                            <option value="select">select</option>       
                                             <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td>  
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]"onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno6" name="slno[]" value="6" ></td> 
            			<td><input type="text" class="form-control" id="inv6" name="inv[]"  ></td> 
                        <td>
                        <input list="browsers" name="customer[]" />
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
                        </td> 
                        <td><input type="text" class="form-control" id="debit6" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="credit6" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="balance6" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill6" name="bill[]" onKeyUp="gettotal(6);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="cash6" name="cash[]" onKeyUp="gettotal(6);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="total6" name="total[]" ></td> 
                        <td><select name="ourbank[]" id="ourbank">
                                            <option value="select">select</option>       
                                             <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]"onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno7" name="slno[]" value="7" ></td> 
            			<td><input type="text" class="form-control" id="inv7" name="inv[]"  ></td> 
                        <td>
                        <input list="browsers" name="customer[]" />
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
                        </td> 
                        <td><input type="text" class="form-control" id="debit7" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="credit7" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="balance7" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill7" name="bill[]" onKeyUp="gettotal(7);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="cash7" name="cash[]" onKeyUp="gettotal(7);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="total7" name="total[]" ></td> 
                        <td><select name="ourbank[]" id="ourbank">
                                           <option value="select">select</option>       
                                             <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno8" name="slno[]" value="8" ></td> 
            			<td><input type="text" class="form-control" id="inv8" name="inv[]"  ></td> 
                        <td>
                        <input list="browsers" name="customer[]" />
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
                        </td> 
                        <td><input type="text" class="form-control" id="debit8" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="credit8" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="balance8" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill8" name="bill[]" onKeyUp="gettotal(8);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="cash8" name="cash[]" onKeyUp="gettotal(8);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="total8" name="total[]" ></td> 
                        <td><select name="ourbank[]" id="ourbank">
                                            <option value="select">select</option>       
                                             <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                          
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno9" name="slno[]" value="9" ></td> 
            			<td><input type="text" class="form-control" id="inv9" name="inv[]"  ></td> 
                        <td>
                        <input list="browsers" name="customer[]" />
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
                        </td> 
                        <td><input type="text" class="form-control" id="debit9" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="credit9" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="balance9" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill9" name="bill[]" onKeyUp="gettotal(9);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="cash9" name="cash[]" onKeyUp="gettotal(9);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="total9" name="total[]" ></td> 
                        <td><select name="ourbank[]" id="ourbank">
                                             <option value="select">select</option>       
											 <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td>  
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                         
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno10" name="slno[]" value="10" ></td> 
            			<td><input type="text" class="form-control" id="inv10" name="inv[]"  ></td> 
                        <td>
                       <input list="browsers" name="customer[]" />
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
                        </td> 
                        <td><input type="text" class="form-control" id="debit10" name="debit[]"  onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="credit10" name="credit[]" onKeyUp="getbalance();" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="balance10" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill10" name="bill[]" onKeyUp="gettotal(10);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="cash10" name="cash[]" onKeyUp="gettotal(10);" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="total10" name="total[]" ></td> 
                       <td><select name="ourbank[]" id="ourbank">
                                           <option value="select">select</option>       
                                             <?php 
                                             
                                            $queryb=mysqli_query($con,"select * from bank");
                                            if(mysqli_fetch_row($queryb)>0){
                                                $queryb=mysqli_query($con,"select * from bank");
                                                while($rowb=mysqli_fetch_array($queryb)){
                                                    $bankname=$rowb['name'];
                                                    ?>
													<option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option>       
                                                    <?php	
                                                }
                                            }
                                            ?>
                                         </select></td>
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td>  
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" onkeypress="this.style.width = ((this.value.length + 7) * 8) + 'px';"></td> 
                         
            		</tr>
           		</tbody>
            	<tfoot>
             		<tr><td colspan="14" style="border:none;"> <a href="" class="add_field_button"><i class="glyphicon glyphicon-plus"></i>  Add a Custom line Item</a></td></tr>
            	</tfoot>
          </table>
          </div>
                  
                  
                        <div class="form-group"><br><br>
                            <button type="submit" class="btn btn-primary" >Save</button>
                        </div>
                        <div class="form-group" style="color:#2e3192;"><br></div>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
      
<script>

$(document).ready(function() {
	//alert('kk');
    
		
		var max_fields      = 100; //maximum input boxes allowed
		var wrapper         = $(".input_fields_wrap"); //Fields wrapper
		var add_button      = $(".add_field_button"); //Add button ID
		
		var x = 10; //initlal text box count
		$(add_button).click(function(e){ //on add input button click
			e.preventDefault();
			if(x < max_fields){ //max input box allowed
				x++; //text box increment
			//	alert(x);
			document.getElementById("num").value = x;
				$(wrapper).append('<tr><td><input type="text" class="form-control" id="slno'+x+'" name="slno[]" value="'+x+'" ></td><td><input type="text" class="form-control" id="inv'+x+'" name="inv[]"  ></td><td><input list="browsers" name="customer[]" /><datalist id="browsers"> <?php $con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook"); $query=mysqli_query($con,"select * from customer"); if(mysqli_fetch_row($query)>0){ $query=mysqli_query($con,"select * from customer"); while($row=mysqli_fetch_array($query)){ $name=$row['name'];$orgname=$row['orgname'];if($orgname==''){ ?><option value="<?php echo $row['name']; ?>"><?php }else{ ?> <option value="<?php echo $row['orgname']; ?>"><?php } } } ?></datalist></td><td><input type="text" class="form-control" id="debit'+x+'" name="debit[]"  onKeyUp="getbalance();" onkeydown="getpress(this.value,this.id);"></td><td><input type="text" class="form-control" id="credit'+x+'" name="credit[]" onKeyUp="getbalance();" onkeydown="getpress(this.value,this.id);"></td><td><input type="text" class="form-control" id="balance'+x+'" name="balance[]"  onFocus="getpress(this.value,this.id);"></td><td><input type="text" class="form-control" id="bill'+x+'" name="bill[]" onKeyUp="gettotal('+x+');"  onkeydown="getpress(this.value,this.id);"></td><td><input type="text" class="form-control" id="cash'+x+'" name="cash[]" onKeyUp="gettotal('+x+');"  onkeydown="getpress(this.value,this.id);"></td><td><input type="text" class="form-control" id="total'+x+'" name="total[]"  onFocus="getpress(this.value,this.id);"></td><td><select name="ourbank[]" id="ourbank"> <option value="select">select</option><?php $queryb=mysqli_query($con,"select * from bank");if(mysqli_fetch_row($queryb)>0){ $queryb=mysqli_query($con,"select * from bank");while($rowb=mysqli_fetch_array($queryb)){ $bankname=$rowb['name']; ?><option value="<?php echo $rowb['name']; ?>"><?php echo $rowb['name']; ?></option> <?php } }?></select></td><td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td>  </tr>'); //add input box
			}
		});
	
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent().parent().remove(); x--;
    });
});
</script>


<script>

function getpress(a,b) {
	var n = a.length;
	var width=(n+7)*8;
	document.getElementById(b).style.width=width+"px";
	//alert(width);
}
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
  xhttp.open("GET", "ajax.php?val="+b+"&& num="+a, true);
  xhttp.send();
}

</script>

<script>

function getdatebalance() {
	var datecal=document.getElementById("datecal").value;
	var num=document.getElementById("num").value;
	alert(datecal);
	alert(num);
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("datebalance").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ajaxdatebalance.php?datecal="+datecal+"&& num="+num, true);
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
function getdate() {
	
	   	var date=document.getElementById("todate").value;
		
		var xhttp = new XMLHttpRequest();
 		xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		  document.getElementById("savemsg").innerHTML =
		  this.responseText;
		  
		}
  };
  xhttp.open("GET", "todate.php?date="+date, true);
  
  xhttp.send();
  
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