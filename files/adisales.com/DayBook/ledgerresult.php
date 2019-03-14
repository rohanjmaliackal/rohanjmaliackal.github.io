<?php
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
$client_id=$_POST['client'];
$year=$_POST['year'];


	?>
                                       <br>
<br>
<br>
 <table class="table table-striped table-bordered bootstrap-datatable datatable responsive" >
	 <thead>
		
        <tr>
			<th>SlNo</th>
            <th>Category</th>
            <th>Date</th>
			<th>Payments to Customer</th>
            <th>Payments from Customer</th>
			<th>Totalamount</th>
		</tr>
	</thead>
	<tbody>
		<?php
		
		  $sel=mysqli_query($con,"select * from customer where customer_id='".$client_id."'");
		  if(mysqli_fetch_row($sel)>0){
			 	$sel=mysqli_query($con,"select * from customer where customer_id='".$client_id."'");
		  		if($selrow=mysqli_fetch_array($sel)){
					$cusname=$selrow['name'];
					$orgname=$selrow['orgname'];
					$from=$year."-04-01";
                                       $nextyear=$year+1;
                                        $to=$nextyear."-03-31";
 
					 
        $query=mysqli_query($con,"select * from ledger where (ledger.customer_id='".$cusname."' OR ledger.customer_id='".$orgname."') and (date between '".$from."' and '".$to."') ORDER BY date ASC");
        if(mysqli_fetch_row($query)>0){
            $totalpurchase=0;
			$totalsale=0;
			$total=0;
            $debit=0;
			$credit=0;
            $i=0;






 $queryb=mysqli_query($con,"SELECT * FROM `balance` WHERE (`customer_id`='".$cusname."' OR customer_id='".$orgname."') and (date between '".$from."' and '".$to."') ORDER BY date ASC");
        if(mysqli_fetch_row($queryb)>0){

	$queryb=mysqli_query($con,"SELECT * FROM `balance` WHERE (`customer_id`='".$cusname."' OR customer_id='".$orgname."') and (date between '".$from."' and '".$to."') ORDER BY date ASC");
        while($rowb=mysqli_fetch_array($queryb)){
			$i++;
			$t=$rowb['balance'];
			$totalsale=$totalsale+$t;
			$total=$total+$t;
			?>
            <tr>
                    <td><?php echo $i; ?></td>
                    <td>Opening Cash</td>
                    <td>
						<?php 
						$originalDate = $rowb['date']; 
						echo $newDate = date("d-m-Y", strtotime($originalDate));
                       
                        ?>
                    </td>
                    <td></td>
                    <td></td>
                    <td><?php echo $rowb['balance']; ?> </td>
                </tr>
            <?php
			
		}
		}








       $query=mysqli_query($con,"select * from ledger where (ledger.customer_id='".$cusname."' OR ledger.customer_id='".$orgname."') and (date between '".$from."' and '".$to."') ORDER BY date ASC");
            while($row=mysqli_fetch_array($query)){
                $i++;
                $totalamount=$row['totalamount'];
				$category=$row['category'];
                if($totalamount!=''){
                    $total=$total+$totalamount;
					if($category=="Purchase"){
						$totalpurchase=$totalpurchase+$totalamount;
					}
					if($category=="Sale"){
						$totalsale=$totalsale+$totalamount;
					}
                }
				$debitval=$row['debit'];
				if($debitval!=''){
					$debit=$debit+$debitval;	
				}
				$creditval=$row['credit'];
				if($creditval!=''){
					$credit=$credit+$creditval;	
				}if($row['totalamount']!='' || $row['debit']!='' || $row['credit']!=''){
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td>
						<?php 
						$originalDate = $row['date']; 
						echo $newDate = date("d-m-Y", strtotime($originalDate));
                       
                        ?>
                    </td>
                    <td><?php echo $row['credit']; ?> </td>
                    <td><?php echo $row['debit']; ?></td>
                    <td><?php echo $row['totalamount']; ?></td>
                </tr>
                <?php	
}
            }
            
            ?>
     	<tr>
        	<td colspan="3">Total</td>
            <td><?php echo $credit; ?></td>
             <td><?php echo $debit; ?></td>
              <td><?php echo $total; ?></td>
        </tr>
        	<tr>
        	<td colspan="5">Balance Amount</td>
            <td>
			<?php

    




			/*if($totalpurchase>$totalsale){
				$balance=$totalpurchase-$totalsale;	
			}else{
				$balance=$totalsale-$totalpurchase;	
			}*/
			$totaldebit=$debit;
			$totalcredit=$credit;
			if($totalpurchase>$totalcredit){
				$purchasebal=$totalpurchase-$totalcredit;
			}else{
				$purchasebal=$totalcredit-$totalpurchase;
			}
			if($totalsale>$totaldebit){
				$salebal=$totalsale-$totaldebit;
			}else{
				$salebal=$totaldebit-$totalsale;
			}
			if($total!='0'){
				if($purchasebal>$salebal){
					echo $balance=$purchasebal-$salebal;	echo "&nbsp;&nbsp;&nbsp;"; echo "(Purchase Balance)";
				}else{
					echo $balance=$salebal-$purchasebal; echo "&nbsp;&nbsp;&nbsp;"; echo "(Sale Balance)";	
				}

			}else{
				echo "0";	
			}?>
             </td>
            
        </tr> 
        </tbody>
        </table>  
        <?php
	}

				}
		  }

?>