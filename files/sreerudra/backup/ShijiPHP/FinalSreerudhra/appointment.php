<?php
	session_start();

	$user_id=$_SESSION["login_id"];
	$specialist=$_POST['specialist'];
	$doctor=$_POST['doctor'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$disease=$_POST['disease'];
	$date=$_POST['date'];
	$time=$_POST['to'];
	require_once("connect.php");
	$book_id="bk".rand();
	//$time_arr= explode(" ", $time);
	//$status= $time_arr[1];
	//https://www.instamojo.com/api/1.1/payment-requests/
	//http://www.example.com?payment_id=MOJO5a06005J21512197&payment_request_id=d66cb29dd059482e8072999f995c4eef
	//https://www.instamojo.com/@ashwch/d66cb29dd059482e8072999f995c4eef
	
	//http://www.example.com/webhook/
	
	
	//https://instamojo.com/api/1.1/payment-requests/be65d8abecc549918e8d8e61c801ae6f/
	
	//https://www.instamojo.com/@sienti/
	
	$query_select=mysqli_query($con,"select * from booking where date='".$date."' and time='".$time."'");
	if(mysqli_fetch_row($query_select)>0){
		header("location:online-appointment.php?specialist=$specialist&&doctor=$doctor&&date=$date&&disease=$disease&&msg=error");
	}else{
			$tocken="BK".rand();
			mysqli_query($con,"INSERT INTO `booking` (`specialist`, `doctor_id`, `disease`, `name`, `email`, `address`, `phone`, `date`, `time`, `tocken`,`user_id`) VALUES ('".$specialist."','".$doctor."','".$disease."','".$name."','".$email."','".$address."','".$phone."','".$date."','".$time."','".$tocken."','".$user_id."')");
			$booking_id=mysql_insert_id($con);
			
			
			$pay=mysqli_query($con,"select * from doctor where doctor_id='".$doctor."'");
			if($rowpay=mysqli_fetch_array($pay)){
				$amount=$rowpay['fee'];	
			}
	
	header("location:pay1.php?name=$name&&phone=$phone&&email=$email&&amount=$amount");
	}
	



/*
Private API Key:  661aedd8489169b7fe15db4186ed855e

Private Auth Token:  b42d877c7b9a288ed64fc433ba1b8fb9

Private Salt :  3e528f2ccbbc43c480d528480ec6d4e0

https://www.youtube.com/watch?v=qsK2CIxr_SU

https://docs.instamojo.com/v1.1/docs */
?>