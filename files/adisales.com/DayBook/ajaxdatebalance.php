<?php

$datecal=$_GET['datecal'];
$num=$_GET['num'];
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");


$todayquery=mysqli_query($con,"SELECT MAX(date) AS maxdate FROM sale where date<'".$datecal."'");
if(mysqli_fetch_row($todayquery)>0){
	$todayquery=mysqli_query($con,"SELECT MAX(date) AS maxdate FROM sale where date<'".$datecal."'");
	if($rowtoday=mysqli_fetch_array($todayquery)){
		$maxdate=$rowtoday['maxdate'];
		$balancequery=mysqli_query($con,"select * from sale where sale_id=(select max(sale_id) from sale where date='".$maxdate."')");
		if(mysqli_fetch_row($balancequery)>0){
			$balancequery=mysqli_query($con,"select * from sale where sale_id=(select max(sale_id) from sale where date='".$maxdate."')");
			if($rowbalance=mysqli_fetch_array($balancequery)){
				$openingbalance=$rowbalance['balance'];
				
				?>
                                <tr>
                                    <td><input type="text" class="form-control" id="slno0" name="slno[]" value="0" ></td> 
                                    <td><input type="text" class="form-control" id="inv0" name="inv[]"  ></td> 
                                    <td style="color:black;">Opening Cash
                                        <select name="customer[]" id="customer0"  style="display:none;">
                                            <option value="other">other</option>
                                            
                                        </select>
                                        <div id="text1">
                                        <input type="text"  id="particular0" name="particular[]" value="Opening Cash" readonly style="display:none;">	
                                        </div>                        
                                    </td> 
                                    <td><input type="text" class="form-control" id="debit0" name="debit[]"   value="<?php echo $openingbalance; ?>" readonly onKeyUp="getbalance(0);"></td> 
                                    <td><input type="text" class="form-control" id="credit0" name="credit[]" onKeyUp="getbalance(1);"></td> 
                                    <td><input type="text" class="form-control" id="balance0" name="balance[]" value="<?php echo $openingbalance; ?>" readonly></td> 
                                    <td><input type="text" class="form-control" id="bill0" name="bill[]" onKeyUp="gettotal(0);"></td> 
                                    <td><input type="text" class="form-control" id="cash0" name="cash[]" onKeyUp="gettotal(0);"></td> 
                                    <td><input type="text" class="form-control" id="total0" name="total[]" ></td> 
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
                                        <td><input type="text" class="form-control" id="inputEmail3" name="bank[]" ></td> 
                                    <td><input type="text" class="form-control" id="inputEmail3" name="chqno[]" ></td> 
                                    <td><input type="text" class="form-control" id="inputEmail3" name="chqdate[]" ></td> 
                                    <td><input type="text" class="form-control" id="inputEmail3" name="amt[]" ></td> 
                                </tr>
                              <?php
						
			}
		}
	}
}
												
?>

