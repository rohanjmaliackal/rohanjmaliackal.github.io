<?php

		require_once("connect.php");
		$specialist=$_POST['specialist'];	
		$doctor=$_POST['doctor'];
		$from=$_POST['from'];	
		$to=$_POST['to'];
		$date=$_POST['date'];
		$dates=explode(",",$date);
		$size=sizeof($dates);
		for($i=0;$i<$size;$i++){
			$dt=$dates[$i];
			mysqli_query($con,"INSERT INTO `available` (`specialist`, `doctor_id`, `date`, `time_from`, `time_to`) VALUES ('".$specialist."', '".$doctor."', '".$dt."', '".$from."','".$to."')");
		}
		header("location:availabile.php?msg=success");
		
?>