<form role="form" name="cashbook" action="action.php?page=sale" method="post" style="width:100%;">
            <div id="variant" style="overflow-x:auto;">
             <input type="text"  id="balance0" value="0" hidden="true" style="display:none;">
             
              <input type="text"  id="num" value="10" hidden="true" style="display:none;">

               	<table class="table table-striped">
          		<thead>
                	<tr> 
                    	<td colspan="2">Date</td>
                        <td colspan="2"><input type="date" class="form-control" id="inputEmail3" name="date" required value="<?php echo date("Y-m-d"); ?>"></td>
                        <td colspan="9" style="border:none;"></td>
                    </tr>
                	<tr>
              			<td rowspan="2"><label>SL No<sup>*</sup></label></td>
              			<td rowspan="2"><label>VCR/INV No</label></td>
               			<td rowspan="2"><label>Particulars</label></td>
              			<td colspan="3"><label>Ledger</label></td>
              			<td colspan="3"><label>Sales Details</label></td>
                        <td colspan="4"><label>Cheque Details</label></td>
              		</tr>
                    <tr>
              			<td><label>Debit</label></td>
              			<td><label>Credit</label></td>
               			<td><label>Balance</label></td>
              			<td><label>Bill Amt</label></td>
              			<td><label>Cash</label></td>
                        <td><label>Total</label></td>
                        <td><label>Bank</label></td>
              			<td><label>Chq No</label></td>
              			<td><label>Chq Date</label></td>
                        <td><label>Amt</label></td>
              			
            		</tr>
            	</thead>
            	<tbody class="input_fields_wrap">
            		
                    <tr>
            			<td><input type="text" class="form-control" id="slno1" name="slno[]" value="1" ></td> 
            			<td><input type="text" class="form-control" id="inv1" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer1" onChange="getval(1)" >
                        	<option value="0">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text1"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit1" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit1" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance1" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill1" name="bill[]" onKeyUp="gettotal(1);"></td> 
                        <td><input type="text" class="form-control" id="cash1" name="cash[]" onKeyUp="gettotal(1);"></td> 
                        <td><input type="text" class="form-control" id="total1" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    <tr>
            			<td><input type="text" class="form-control" id="slno2" name="slno[]" value="2" ></td> 
            			<td><input type="text" class="form-control" id="inv2" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer2" onChange="getval(2)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text2"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit2" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit2" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance2" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill2" name="bill[]" onKeyUp="gettotal(2);"></td> 
                        <td><input type="text" class="form-control" id="cash2" name="cash[]" onKeyUp="gettotal(2);"></td> 
                        <td><input type="text" class="form-control" id="total2" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    <tr>
            			<td><input type="text" class="form-control" id="slno3" name="slno[]" value="3" ></td> 
            			<td><input type="text" class="form-control" id="inv3" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer3" onChange="getval(3)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text3"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit3" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit3" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance3" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill3" name="bill[]" onKeyUp="gettotal(3);"></td> 
                        <td><input type="text" class="form-control" id="cash3" name="cash[]" onKeyUp="gettotal(3);"></td> 
                        <td><input type="text" class="form-control" id="total3" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    <tr>
            			<td><input type="text" class="form-control" id="slno4" name="slno[]" value="4" ></td> 
            			<td><input type="text" class="form-control" id="inv4" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer4" onChange="getval(4)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text4"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit4" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit4" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance4" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill4" name="bill[]" onKeyUp="gettotal(4);"></td> 
                        <td><input type="text" class="form-control" id="cash4" name="cash[]" onKeyUp="gettotal(4);"></td> 
                        <td><input type="text" class="form-control" id="total4" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno5" name="slno[]" value="5" ></td> 
            			<td><input type="text" class="form-control" id="inv5" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer5" onChange="getval(5)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text5"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit5" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit5" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance5" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill5" name="bill[]" onKeyUp="gettotal(5);"></td> 
                        <td><input type="text" class="form-control" id="cash5" name="cash[]" onKeyUp="gettotal(5);"></td> 
                        <td><input type="text" class="form-control" id="total5" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno6" name="slno[]" value="6" ></td> 
            			<td><input type="text" class="form-control" id="inv6" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer6" onChange="getval(6)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
\
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text6"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit6" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit6" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance6" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill6" name="bill[]" onKeyUp="gettotal(6);"></td> 
                        <td><input type="text" class="form-control" id="cash6" name="cash[]" onKeyUp="gettotal(6);"></td> 
                        <td><input type="text" class="form-control" id="total6" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno7" name="slno[]" value="7" ></td> 
            			<td><input type="text" class="form-control" id="inv7" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer7" onChange="getval(7)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text7"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit7" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit7" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance7" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill7" name="bill[]" onKeyUp="gettotal(7);"></td> 
                        <td><input type="text" class="form-control" id="cash7" name="cash[]" onKeyUp="gettotal(7);"></td> 
                        <td><input type="text" class="form-control" id="total7" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno8" name="slno[]" value="8" ></td> 
            			<td><input type="text" class="form-control" id="inv8" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer8" onChange="getval(8)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text8"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit8" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit8" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance8" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill8" name="bill[]" onKeyUp="gettotal(8);"></td> 

                        <td><input type="text" class="form-control" id="cash8" name="cash[]" onKeyUp="gettotal(8);"></td> 
                        <td><input type="text" class="form-control" id="total8" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno9" name="slno[]" value="9" ></td> 
            			<td><input type="text" class="form-control" id="inv9" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer9" onChange="getval(9)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text9"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit9" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit9" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance9" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill9" name="bill[]" onKeyUp="gettotal(9);"></td> 
                        <td><input type="text" class="form-control" id="cash9" name="cash[]" onKeyUp="gettotal(9);"></td> 
                        <td><input type="text" class="form-control" id="total9" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
                    
                    <tr>
            			<td><input type="text" class="form-control" id="slno10" name="slno[]" value="10" ></td> 
            			<td><input type="text" class="form-control" id="inv10" name="inv[]"  ></td> 
                        <td>
                        <select name="customer[]" id="customer10" onChange="getval(10)" >
                        	<option value="select">select</option>
                            <?php 
						$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
							$query=mysqli_query($con,"select * from customer");
							if(mysqli_fetch_row($query)>0){
								$query=mysqli_query($con,"select * from customer");
								while($row=mysqli_fetch_array($query)){
									?>
                             		<option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option>       
                                    <?php
								}
							}
							?>
                            <option value="other">Other</option>
                        </select><div id="text10"></div>                        
                        </td> 
                        <td><input type="text" class="form-control" id="debit10" name="debit[]"  onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="credit10" name="credit[]" onKeyUp="getbalance();"></td> 
                        <td><input type="text" class="form-control" id="balance10" name="balance[]" ></td> 
                        <td><input type="text" class="form-control" id="bill10" name="bill[]" onKeyUp="gettotal(10);"></td> 
                        <td><input type="text" class="form-control" id="cash10" name="cash[]" onKeyUp="gettotal(10);"></td> 
                        <td><input type="text" class="form-control" id="total10" name="total[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                        <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                        <td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td> 
            		</tr>
           		</tbody>
            	<tfoot>
             		<tr><td colspan="14" style="border:none;"> <a href="" class="add_field_button"><i class="glyphicon glyphicon-plus"></i>  Add a Custom line Item</a></td></tr>
            	</tfoot>
          </table>
          </div>
                  
                  
                   <div class="form-group"><br>
<br>

                        <button type="submit" class="btn btn-primary" >Save</button>
                   </div>
                   
                   <div class="form-group" style="color:#2e3192;"><br>

                   		
                   </div>
                    </form>
                    
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
				$(wrapper).append('<tr><td><input type="text" class="form-control" id="slno'+x+'" name="slno[]" value="'+x+'" ></td><td><input type="text" class="form-control" id="inv'+x+'" name="inv[]"  ></td><td><select name="customer[]" id="customer'+x+'" onChange="getval('+x+')" ><option value="select">select</option><?php $con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");$query=mysqli_query($con,"select * from customer");if(mysqli_fetch_row($query)>0){ $query=mysqli_query($con,"select * from customer"); while($row=mysqli_fetch_array($query)){ ?><option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option><?php } } ?><option value="other">Other</option></select><div id="text'+x+'"></div></td><td><input type="text" class="form-control" id="debit'+x+'" name="debit[]"  onKeyUp="getbalance();"></td><td><input type="text" class="form-control" id="credit'+x+'" name="credit[]" onKeyUp="getbalance();"></td><td><input type="text" class="form-control" id="balance'+x+'" name="balance[]" ></td><td><input type="text" class="form-control" id="bill'+x+'" name="bill[]" onKeyUp="gettotal('+x+');"></td><td><input type="text" class="form-control" id="cash'+x+'" name="cash[]" onKeyUp="gettotal('+x+');"></td><td><input type="text" class="form-control" id="total'+x+'" name="total[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td><td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td></tr>'); //add input box
			}
		});
	
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent().parent().remove(); x--;
    });
});
</script>