<?php
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
 $date=$_GET['date'];

		$query=mysqli_query($con,"select * from purchase where date ='".$date."'");
		if($res=mysqli_fetch_row($query)>0){
			$j=0;
			
			?>
			
     <form role="form" name="cashbook" action="action.php?page=purchasedelete&&date=<?php echo $_GET['date']; ?>" method="post" style="width:100%;"><br>

   <br>
<br>

            <div id="variant" style="overflow-x:auto;">
            

               	<table class="table table-striped">
          		<thead>
                	<tr> 
                    	<td >Date</td>
                        <td colspan="2"><?php echo $date; ?></td>
                        <td colspan="6" style="border:none;"></td>
                    </tr>
                	 <tr>
              			<td rowspan="3"><label>SL No<sup>*</sup></label></td>
              			<td rowspan="3"><label>VCR/INV No</label></td>
               			<td rowspan="3"><label>Particulars</label></td>
                        <td rowspan="3"><label>Item</label></td>
              			<td rowspan="3"><label>Quantity</label></td>
               			<td colspan="4"><label>Amount</label></td>
              		</tr>
                    <tr>
                    	<td rowspan="2"><label>Bill Amt</label></td>
              			<td rowspan="2"><label>Cash</label></td>
                        <td colspan="2"><label>Others</label></td>
                    </tr>
                    <tr>
                    	<td><label>Item</label></td>
              			<td><label>Amount</label></td>
                    </tr>
            	</thead>
            	<tbody class="input_fields_wrap">
            		<?php
					$qry=mysqli_query($con,"select * from purchase where date ='".$date."'");
			while($row=mysqli_fetch_array($qry)){
				
				$j++;
	?>
    
    <tr>
            			<td><?php echo $j; ?></td> 
            			<td><?php echo $row['inv']; ?></td> 
                        <td>
                      <?php echo $row['customer']; ?>
                                           
                        </td> 
                        <td><?php echo $row['item']; ?></td> 
                        <td><?php echo $row['qty']; ?></td> 
                        <td><?php echo $row['bill']; ?></td> 
                        <td><?php echo $row['cash']; ?></td> 
                   
                         <td><?php echo $row['other']; ?></td> 
                         <td><?php echo $row['otheramt']; ?></td> 
                       
                        	</tr>
                            
                            
                   
                   <?php
			}
			?>
           		</tbody>
            	
          </table>
          </div>
                  
                  
                   <div class="form-group"><br>
<br>
 <!--	<button type="submit" class="btn btn-primary">DELETE</button>    --> 
             
                      
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