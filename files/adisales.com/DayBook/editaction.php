<?php
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
if(isset($_GET['page'])){
	$page=$_GET['page'];
	if($page=="customer"){
		$customer_id=$_POST['customer_id'];
		$orgname=$_POST['orgname'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$mobile=$_POST['mobile'];
		$query=mysqli_query($con,"update customer set orgname='".$orgname."',name='".$name."',address='".$address."',mobile='".$mobile."' where customer_id='".$customer_id."'");
		header("location:customer.php?msg=success");
	}else if($page=="sale"){
		$date=$_POST['dates'];
		if(isset($_POST['sale_id'])){
			foreach($_POST['sale_id'] as $i => $sale_id) {
				$sale=$sale_id;
				mysqli_query($con,"delete from sale where sale_id='".$sale."'");
			}
			mysqli_query($con,"delete from ledger where date='".$date."'");
		}
		foreach($_POST['inv'] as $i => $inv) {
			$customer=$_POST['customer'][$i];
			$particular='';
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
			
			
			
			if($inv!='' || $debit!='' || $credit!='' || $bill!='' || $cas!='' || $bank!='' || $chqno!='' || $chqdate!='' || $amt!=''){
				$query=mysqli_query($con,"insert into sale(inv,customer,particular,debit,credit,balance,bill,cash,total,bank,our_bank,chqno,chqdate,amt,date) values('".$inv."','".$customer."','".$particular."','".$debit."','".$credit."','".$balance."','".$bill."','".$cash."','".$total."','".$bank."','".$ourbank."','".$chqno."','".$chqdate."','".$amt."','".$date."')");
				 $id = mysqli_insert_id($con);
				 
				 
				 $sel=mysqli_query($con,"select * from customer");
				 if(mysqli_fetch_row($sel)>0){
						$sel=mysqli_query($con,"select * from customer");
						while($rowsel=mysqli_fetch_array($sel)){
							$cusname=$rowsel['name'];
							$orgname=$rowsel['orgname'];
						 	if($customer==$cusname || $customer==$orgname){
								if($debit!=''){
									$category="Sale";
									$totalamount='';
$status='sale';
									
											$qt=mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."','".$status."')");	
											//$qt="insert into ledger(customer_id,category,totalamount,debit,credit,date,id) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."')";
											//print_r($qt); 
											//mysqli_query($con,$qt);
									}
									
									if($bill!='' && $cash!=''){
									$category="Sale";
									$totalamount=$total;
$status='sale';
									mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."','".$status."')");	
								}else if($bank!='' || $ourbank!=''){
									$category="Sale";
									$totalamount='';
$status='sale';
									mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$amt."','".$credit."','".$date."','".$id."','".$status."')");	
								}else if($credit!=''){
										 $category="Purchase";$totalamount='';
$status='sale';
										mysqli_query($con,"insert into ledger(customer_id,category,totalamount,debit,credit,date,id,status) values('".$customer."','".$category."','".$totalamount."','".$debit."','".$credit."','".$date."','".$id."','".$status."')");	

									}else{
									}
								
								
								
								
									
								
							}
						} 
				 }
				 
			}
			
		
		}//foreach
		header("location:sale.php?update=success");
	}
	else if($page=="purchase"){
		$date=$_POST['dates'];
		if(isset($_POST['purchase_id'])){
			foreach($_POST['purchase_id'] as $i => $purchase_id) {
				$purchase=$purchase_id;
				mysqli_query($con,"delete from purchase where purchase_id='".$purchase."'");
			}
		}
		foreach($_POST['inv'] as $i => $inv) {
			$customer=$_POST['customer'][$i];
			if($customer=="other"){
				$particular=$_POST['particular'][$i];
			}else{
				$particular='';
			}
			$item=$_POST['item'][$i];
			$qty=$_POST['qty'][$i];
			$bill=$_POST['bill'][$i];
			$cash=$_POST['cash'][$i];
			$other=$_POST['other'][$i];
			$otheramt=$_POST['otheramt'][$i];
			
			if($item!=''){
				$query=mysqli_query($con,"insert into purchase(inv,customer,particular,item,qty,bill,cash,other,otheramt,date) values('".$inv."','".$customer."','".$particular."','".$item."','".$qty."','".$bill."','".$cash."','".$other."','".$otheramt."','".$date."')");
				$id = mysqli_insert_id($con);
				 
				 
				 
				 
				 
				 
			}
		
		}//foreach
		header("location:purchase.php?update=success");
	}
else{
		header("location:error.hp");
	}
}
else{
	header("location:error.php");	
}
?>