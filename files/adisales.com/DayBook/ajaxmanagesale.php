<?php
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
 $date=$_GET['date'];

		$query=mysqli_query($con,"select * from sale where date ='".$date."'");
		if($res=mysqli_fetch_row($query)>0){
			$j=0;
			
			?>
			
    
    <form role="form" name="cashbook" action="action.php?page=sale" method="post" style="width:100%;"><br>
<br>

            <div id="variant" style="overflow-x:auto;">
            
 
             
             
               	<table class="table table-striped">
          		<thead>
                	<tr> 
                    	<td colspan="2">Date</td>
                        <td colspan="2"><?php echo $date; ?></td>
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
            		<?php
					$qry=mysqli_query($con,"select * from sale where date ='".$date."'");
			while($row=mysqli_fetch_array($qry)){
				
				$j++;
	?>
                    <tr>
            			<td>
                         
                         <input type="text" hidden="true" style="display:none;" id="sale_id<?php echo $j; ?>" name="sale_id[]"  ><?php echo $j; ?></td> 
            			<td><input type="text" class="form-control" id="inv<?php echo $j; ?>" name="inv[]" value="<?php echo $row['inv']; ?>" ></td> 
                        <td>
                        <?php 
						$customer=$row['customer'];
						$particular=$row['particular'];
						if($customer=='other'){
						?>
                        <?php echo $row['particular']; ?>
                        <?php
						}else{
							$qrry=mysqli_query($con,"select * from customer where customer_id='".$customer."'");
							if(mysqli_fetch_row($qrry)>0){
								$qrry=mysqli_query($con,"select * from customer where customer_id='".$customer."'");
								if($rows=mysqli_fetch_array($qrry)){
									?>
                             	<?php echo $rows['name']; ?>
                              
                                    <?php
								}
							}
						}
						?>
                        </td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]"  value="<?php echo $row['debit']; ?>"></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]"  value="<?php echo $row['credit']; ?>"></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]"  value="<?php echo $row['balance']; ?>"></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]"  value="<?php echo $row['bill']; ?>" ></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]"  value="<?php echo $row['cash']; ?>" ></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]"  value="<?php echo $row['total']; ?>" ></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]" value="<?php echo $row['bank']; ?>" ></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]" value="<?php echo $row['chqno']; ?>" ></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]" value="<?php echo $row['chqdate']; ?>" ></td> 
                        <td><input type="text" class="form-control" id="inv1" name="inv[]" value="<?php echo $row['amt']; ?>" ></td> 
                        
            		</tr>
                   <?php
			}
			?>
            
             <input type="text"  id="balance0" value="0" hidden="true" style="display:none;">
            <input type="text"  id="num" value="<?php echo $j; ?>" hidden="true" style="display:none;">
           		</tbody>
            	<tfoot>
             		<tr><td colspan="14" style="border:none;"> <a href="" class="add_field_button"><i class="glyphicon glyphicon-plus"></i>  Add a Custom line Item</a></td></tr>
            	</tfoot>
          </table>
          </div>
                  
                  
                   <div class="form-group"><br>
<br>

                      
                   </div>
                   
                   <div class="form-group" style="color:#2e3192;"><br>

                   	
                   </div>
                    </form> 
        <?php


		}else{
		?>
        
        <br>
<br>
<br>
<p style="color:black;">No Data Found</p>
        <?php
		}

?>

 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
      
<script>

$(document).ready(function() {
	alert('kk');
    
		
		var max_fields      = 100; //maximum input boxes allowed
		var wrapper         = $(".input_fields_wrap"); //Fields wrapper
		var add_button      = $(".add_field_button"); //Add button ID
		
		var x = 10; //initlal text box count
		$(add_button).click(function(e){ //on add input button click
			e.preventDefault();
			if(x < max_fields){ //max input box allowed
				x++; //text box increment
				alert(x);
			document.getElementById("num").value = x;
				$(wrapper).append('<tr><td><input type="text" class="form-control" id="slno'+x+'" name="slno[]" value="'+x+'" ></td><td><input type="text" class="form-control" id="inv'+x+'" name="inv[]"  ></td><td><select name="customer[]" id="customer'+x+'" onChange="getval('+x+')" ><option value="select">select</option><?php $con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");$query=mysqli_query($con,"select * from customer");if(mysqli_fetch_row($query)>0){ $query=mysqli_query($con,"select * from customer"); while($row=mysqli_fetch_array($query)){ ?><option value="<?php echo $row['customer_id']; ?>"><?php echo $row['name']; ?></option><?php } } ?><option value="other">Other</option></select><div id="text'+x+'"></div></td><td><input type="text" class="form-control" id="debit'+x+'" name="debit[]"  onKeyUp="getbalance();"></td><td><input type="text" class="form-control" id="credit'+x+'" name="credit[]" onKeyUp="getbalance();"></td><td><input type="text" class="form-control" id="balance'+x+'" name="balance[]" ></td><td><input type="text" class="form-control" id="bill'+x+'" name="bill[]" onKeyUp="gettotal('+x+');"></td><td><input type="text" class="form-control" id="cash'+x+'" name="cash[]" onKeyUp="gettotal('+x+');"></td><td><input type="text" class="form-control" id="total'+x+'" name="total[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td><td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td><td style="border:none;border-top: solid 2px rgb(255, 255, 255);border-bottom: solid 2px rgb(255, 255, 255);"></td></tr>'); //add input box
			}
		});
	
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent().parent().remove(); x--;
    });
});
</script>
