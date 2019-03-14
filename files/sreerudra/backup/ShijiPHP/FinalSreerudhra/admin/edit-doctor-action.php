<?php

		require_once("connect.php");
		$doctor_id=$_POST['doctor_id'];
		$name=$_POST['name'];	
		$specialist=$_POST['specialist'];	
		$qualification=$_POST['qualification'];
		$gender=$_POST['gender'];	
		$from=$_POST['from'];	
		$to=$_POST['to'];
		$fee=$_POST['fee'];
		$bfrom=$_POST['bfrom'];	
		$bto=$_POST['bto'];
		mysqli_query($con,"UPDATE doctor set name='".$name."',specialist='".$specialist."',qualification='".$qualification."',gender='".$gender."',consult_from='".$from."',consult_to='".$to."',fee='".$fee."',break_from='".$bfrom."',break_to='".$bto."' where doctor_id='".$doctor_id."'");
		mysqli_query($con,"delete from workday where doctor_id='".$doctor_id."'");
		foreach($_POST['offday'] as $day){
			mysqli_query($con,"insert into workday(doctor_id,day) values('".$doctor_id."','".$day."')");
		}
		
		header("location:edit-doctor.php?msg=success&&doctor_id=$doctor_id");
		
?>