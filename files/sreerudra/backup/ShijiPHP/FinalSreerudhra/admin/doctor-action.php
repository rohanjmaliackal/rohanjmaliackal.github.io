<?php

		require_once("connect.php");
		$name=$_POST['name'];	
		$specialist=$_POST['specialist'];	
		$qualification=$_POST['qualification'];
		$gender=$_POST['gender'];	
		$from=$_POST['from'];	
		$to=$_POST['to'];
		$fee=$_POST['fee'];
		$break_from=$_POST['bfrom'];	
		$break_to=$_POST['bto'];
		mysqli_query($con,"INSERT INTO doctor(name,specialist,qualification,gender,consult_from,consult_to,fee,break_from,break_to) VALUES ('".$name."', '".$specialist."', '".$qualification."', '".$gender."','".$from."','".$to."','".$fee."','".$break_from."','".$break_to."')");
		$doctor_id=mysqli_insert_id($con);
		foreach($_POST['offday'] as $day){
			mysqli_query($con,"insert into workday(doctor_id,day) values('".$doctor_id."','".$day."')");
		}
		header("location:doctor.php?msg=success");
		
?>