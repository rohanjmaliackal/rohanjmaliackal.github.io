<?php
$user_id=$_GET['user_id'];
$booking_id=$_GET['booking_id'];


require_once("connect.php");
$query="select * from pay where user_id='".$user_id."' and booking_id='".$booking_id."'";
if(mysqli_fetch_row($query)>0){
	$query="select * from pay where user_id='".$user_id."' and booking_id='".$booking_id."'";
	if($row=mysqli_fetch_array($query)){
		$payment_id=$row['payment_id'];
		$amount=$row['amount'];
		
	}
}

											
											
											
namespace Instamojo;
include 'Instamojo.php';

$endpoint='https://www.instamojo.com/@sienti/';
$api_key='661aedd8489169b7fe15db4186ed855e';
$auth_tocken='b42d877c7b9a288ed64fc433ba1b8fb9';
$api=new Instamojo($api_key,$auth_tocken,$endpoint);
$payload=Array(
			'payment'=>$payment_id,
			'type'=>'ABC',
			'body'=>'Refund'
			);
		
		$response=$api->refundCreate($payload);
		//print_r($response);
		//$logurl=$request['longurl'];
		//header('location:'.$logurl,true);
		
		if($response=="success"){
		mysqli_query($con,"update booking set pay='Refund' where booking_id='".$booking_id."'");
		header("location:view-refund.php");	
		}

?>