<?php
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
 $date=$_GET['date'];

		$query=mysqli_query($con,"select * from sale where date ='".$date."'");
		if($res=mysqli_fetch_row($query)>0){
			$j=0;
			
			?>
			
     <form role="form" name="cashbook" action="action.php?page=saledelete&&date=<?php echo $_GET['date']; ?>" method="post" style="width:100%;"><br>
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
					$totalsale=0;
					$qry=mysqli_query($con,"select * from sale where date ='".$date."'");
			while($row=mysqli_fetch_array($qry)){
				
				$j++;
				?>
                    <tr>
            			<td><?php echo $j; ?></td> 
            			<td><?php echo $row['inv']; ?></td> 
                        <td>
                        <?php echo $row['customer']; ?>
                        </td> 
                        <td><?php echo $row['debit']; ?></td> 
                        <td><?php echo $row['credit']; ?></td> 
                        <td><?php echo $row['balance']; ?></td> 
                        <td><?php echo $row['bill']; ?></td> 
                        <td><?php echo $row['cash']; ?></td> 
                        <td><?php echo $row['total']; ?></td> 
                        <td><?php echo $row['bank']; ?></td> 
                        <td><?php echo $row['chqno']; ?></td> 
                        <td><?php echo $row['chqdate']; ?></td> 
                        <td><?php echo $row['amt']; ?></td> 
                        
            		</tr>
                   <?php
			}
			?>
           		</tbody>
            	
          </table>
          
          
          
          </div>
               
               
         	 <!--	<button type="submit" class="btn btn-primary">DELETE</button>    --> 
             
                   
                   <div class="form-group"><br>
<br>
  </form> 
                   
                   
                
             

                  
             	
                   </div>
                   
                   <div class="form-group" style="color:#2e3192;"><br>

                   	
                   </div>
                 
                                    
                                      
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