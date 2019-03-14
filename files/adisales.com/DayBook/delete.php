<?php
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
if(isset($_GET['page']) && isset($_GET['id'])){
	$page=$_GET['page'];
	if($page=="customer"){
		$id=$_GET['id'];
		
		$query=mysqli_query($con,"delete from customer where customer_id='".$id."'");
		header("location:customer.php?msg=success");
	}
	else if($page=="bank"){
		$bank_id=$_GET['id'];
		
		$query=mysqli_query($con,"delete from bank where bank_id='".$bank_id."'");
		header("location:viewbank.php?msg=success");
	}
        else if($page=="balance"){
		$balance_id=$_GET['id'];
		
		$query=mysqli_query($con,"delete from balance where balance_id='".$balance_id."'");
		header("location:viewbalance.php?msg=success");
	}
	else if($page=="banksale"){
		$bank_id=$_GET['id'];
		
		$query=mysqli_query($con,"delete from sale where sale_id='".$bank_id."'");
		mysqli_query($con,"delete from ledger where id='".$bank_id."' and status='sale'");
		header("location:bankbook.php?msg=success");
	}
	else if($page=="bankcheque"){
		$bank_id=$_GET['id'];
		
		$query=mysqli_query($con,"delete from cheque where cheque_id='".$bank_id."'");
		mysqli_query($con,"delete from ledger where id='".$bank_id."'  and status='cheque'");
		header("location:bankbook.php?msg=success");
	}
	else if($page=="cheque"){
		$bank_id=$_GET['id'];
		
		$query=mysqli_query($con,"delete from cheque where cheque_id='".$bank_id."'");
		mysqli_query($con,"delete from ledger where id='".$bank_id."'  and status='cheque'");
		header("location:viewcheque.php?msg=success");
	}
	else{
		header("location:error.php");
	}
}
else{
		header("location:error.php");
	}
?>