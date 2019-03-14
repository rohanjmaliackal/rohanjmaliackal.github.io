<?php
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");

if(isset($_GET['page'])){
	$page=$_GET['page'];
	if($page=="customer"){
		$orgname=$_POST['orgname'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		$query=mysqli_query($con,"insert into customer(orgname,name,address,mobile) values('".$orgname."','".$name."','".$address."','".$mobile."')");
		header("location:home.php?msg=success");
	}else if($page=="balance"){
		$customer=$_POST['customer'];
		$balance=$_POST['balance'];
		$date=$_POST['date'];
		
		$query=mysqli_query($con,"insert into balance(customer_id,balance,date) values('".$customer."','".$balance."','".$date."')");
		header("location:balanace.php?msg=success");
	}
	else if($page=="bank"){
		$name=$_POST['name'];
		
		
		$query=mysqli_query($con,"insert into bank(name) values('".$name."')");
		header("location:bank.php");
	}
	else if($page=="bankupdate"){
		$bank_id=$_POST['bank_id'];
		$name=$_POST['name'];
		
		$query=mysqli_query($con,"update bank set name='".$name."' where bank_id='".$bank_id."'");
		header("location:viewbank.php");
	}
	else if($page=="saledelete"){
		 $date=$_GET['date'];
		
		$query=mysqli_query($con,"delete from sale where date='".$date."'");
		header("location:salereport.php");
	}
	else if($page=="purchasedelete"){
		$date=$_GET['date'];
		
		$query=mysqli_query($con,"delete from purchase where date='".$date."'");
		header("location:purchasereport.php");
	}
	else if($page=="sale"){
		 $date=$_POST['date'];
		  		$seldt=mysqli_query($con,"select * from sale where date='".$date."'");
				 if(mysqli_fetch_row($seldt)>0){
					 header("location:sale.php?seldt=msg");
				 }else{
		
		foreach($_POST['inv'] as $i => $inv) {
			
			$debit=$_POST['debit'][$i];
			$credit=$_POST['credit'][$i];
			$balance=$_POST['balance'][$i];
			$bill=$_POST['bill'][$i];
			$cash=$_POST['cash'][$i];
			$total=$_POST['total'][$i];
			$bank=$_POST['bank'][$i];
			$ourbank=$_POST['ourbank'][$i];
			$chqno=$_POST['chqno'][$i];
			$chqdate=$_POST['chqdate'][$i];
			$amt=$_POST['amt'][$i];
			$customer=$_POST['customer'][$i];
			$particular='';
			
				
				if($inv!='' || $debit!='' || $credit!='' || $bill!='' || $cash!='' || $bank!='' || $chqno!='' || $chqdate!='' || $amt!=''){
					$query=mysqli_query($con,"insert into sale(inv,customer,particular,debit,credit,balance,bill,cash,total,bank,our_bank,chqno,chqdate,amt,date) values('".$inv."','".$customer."','".$particular."','".$debit."','".$credit."','".$balance."','".$bill."','".$cash."','".$total."','".$bank."','".$ourbank."','".$chqno."','".$chqdate."','".$amt."','".$date."')");
				  	$id = mysqli_insert_id($con);
				 
				
				 
				  $sel=mysqli_query($con,"select * from customer where name='".$customer."' OR orgname='".$customer."'");
				 if(mysqli_fetch_row($sel)>0){
					 
					
							
								if($debit!=''){
									$category="Sale";
									$totalamount='';
                                                                           $status='sale';
									
											$qt=mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."','".$status."')");	
											
									}
									
									if($bill!='' && $cash!=''){

if($bank!='' && $ourbank!='select'){
									$category="Sale";
									$totalamount='';
$status='sale';
									mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$amt."','".$credit."','".$date."','".$id."','".$status."')");	
								}else{

$category="Sale";
									$totalamount=$total;
$status='sale';
									mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."','".$status."')");	

}


									
								}else if($credit!=''){
										 $category="Purchase";$totalamount='';
$status='sale';
										mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."','".$status."')");	

									}else{
									}
								
									
							 
						 			 
				 	}
					
				}
			
			}//foreach
		header("location:sale.php?msg=success");
				 }
	}//else if
	else if($page=="cheque"){
		$date=$_POST['date'];
		foreach($_POST['inv'] as $i => $inv) {
			$customer=$_POST['customer'][$i];
			
			$particular='';
			$bank=$_POST['bank'][$i];
			$ourbank=$_POST['ourbank'][$i];
			$chqno=$_POST['chqno'][$i];
			$chqdate=$_POST['chqdate'][$i];
			$amt=$_POST['amt'][$i];
			//$onhand=$_POST['onhand'][$i];


			if($inv!='' || $bank!='' || $chqno!='' || $chqdate!='' || $amt!=''){
				$query=mysqli_query($con,"insert into cheque(inv,customer,particular,bank,our_bank,chqno,chqdate,amt,date) values('".$inv."','".$customer."','".$particular."','".$bank."','".$ourbank."','".$chqno."','".$chqdate."','".$amt."','".$date."')");
				 $id = mysqli_insert_id($con);
				 
					  $sel=mysqli_query($con,"select * from customer");
				 if(mysqli_fetch_row($sel)>0){
					 
						$sel=mysqli_query($con,"select * from customer");
						while($rowsel=mysqli_fetch_array($sel)){
							$cusname=$rowsel['name'];
							$orgname=$rowsel['orgname'];
						 	if($customer==$cusname || $customer==$orgname){
						
							$category="Purchase";
$status='cheque';
							mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$amt."','".$date."','".$id."','".$status."')");	
						
					}
						}
				 }
				
			}
			
		
		}//foreach
		header("location:cheque.php?msg=success");
	}//else if
	else if($page=="purchase"){
		$date=$_POST['date'];
		foreach($_POST['inv'] as $i => $inv) {
			$customer=$_POST['customer'][$i];
			$particular='';
			$item=$_POST['item'][$i];
			$qty=$_POST['qty'][$i];
			$bill=$_POST['bill'][$i];
			$cash=$_POST['cash'][$i];
			$other=$_POST['other'][$i];
			$otheramt=$_POST['otheramt'][$i];
			
		

			if($item!=''){
				$query=mysqli_query($con,"insert into purchase(inv,customer,particular,item,qty,bill,cash,other,otheramt,date) values('".$inv."','".$customer."','".$particular."','".$item."','".$qty."','".$bill."','".$cash."','".$other."','".$otheramt."','".$date."')");
				//$id = mysqli_insert_id($con);
				 
					//if($customer!='other' || $customer!='0'){
						/*if($bill!='' && $cash!=''){
							$category="Purchase";
							$totalamount=(int)$bill+(int)$cash;
							$debit='';
							$credit='';
							mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."')");	
						}*/
						/*else{
							$category="pay";
							$totalamount='';
							mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id) values('".$customer_id."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."')");	
						}*/
					//}
			}
		
		}//foreach
		header("location:purchase.php?msg=success");
	}//else if
	else{
		header("location:error.hp");
	}
}
else{
	header("location:error.php");	
}
?>