<?php

	require_once("connect.php");
	$date=$_POST["date"];
	$doctor=$_POST["doctor"];
	$query_select=mysqli_query($con,"select * from leaves where doctor_id='".$doctor."' and date='".$date."'");
	//leaves >0
	if(mysqli_fetch_row($query_select)>0){
		$msg="leave";
			$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);
	}else{ //leaves !=0

		$timestamp = strtotime($date);
		$day = date('l', $timestamp);
		$query_date=mysqli_query($con,"select * from workday where doctor_id='".$doctor."' and day='".$day."'");
		//workday >00
		if(mysqli_fetch_row($query_date)>0){ 
			$count=0;
			$timearray='9.00 AM-9.10 AM,9.10 AM-9.20 AM,9.20 AM-9.30 AM,9.30 AM-9.40 AM,9.40 AM-9.50 AM,9.50 AM-10.00 AM,10.00 AM-10.10 AM,10.10 AM-10.20 AM,10.20 AM-10.30 AM,10.30 AM-10.40 AM,10.40 AM-10.50 AM,10.50 AM-11.00 AM,11.00 AM-11.10 AM,11.10 AM-11.20 AM,11.20 AM-11.30 AM,11.30 AM-11.40 AM,11.40 AM-11.50 AM,11.50 AM-12.00 PM,12.00 PM-12.10 PM,12.10 PM-12.20 PM,12.20 PM-12.30 PM,12.30 PM-12.40 PM,12.40 PM-12.50 PM,12.50 PM-1.00 PM,1.00 PM-1.10 PM,1.10 PM-1.20 PM,1.20 PM-1.30 PM,1.30 PM-1.40 PM,1.40 PM-1.50 PM,1.50 PM-2.00 PM,2.00 PM-2.10 PM,2.10 PM-2.20 PM,2.20 PM-2.30 PM,2.30 PM-2.40 PM,2.40 PM-2.50 PM,2.50 PM-3.00 PM,3.00 PM-3.10 PM,3.10 PM-3.20 PM,3.20 PM-3.30 PM,3.30 PM-3.40 PM,3.40 PM-3.50 PM3.50 PM-4.00 PM,4.00 PM-4.10 PM,4.10 PM-4.20 PM,4.20 PM-4.30 PM,4.30 PM-4.40 PM,4.40 PM-4.50 PM,4.50 PM-5.00 PM';

			$query_select_time=mysqli_query($con,"select * from doctor where doctor_id='".$doctor."'");
			//doctor >00
			if(mysqli_fetch_row($query_select_time)>0){
				$query_select_time=mysqli_query($con,"select * from doctor where doctor_id='".$doctor."'");
				//doctor
				if($row_time=mysqli_fetch_array($query_select_time)){
					$consult_from=$row_time['consult_from'];
					$consult_to=$row_time['consult_to'];
					$break_from=$row_time['break_from'];
					$break_to=$row_time['break_to'];
					$consult=$consult_from."-".$consult_to;
					$break=$break_from."-".$break_to;
		
					$val=explode(',',$timearray);
					//explode all times
					for($i=0;$i<sizeof($val);$i++){
						$timecheck=$val[$i];
						
						$valtime=explode('-',$timecheck);
						
						$checktimefrom=$valtime[0];
						$checktimeto=$valtime[1];
				
						$from=DateTime::createFromFormat('H:i a', $checktimefrom);
						$to=DateTime::createFromFormat('H:i a', $checktimeto);
						$start_time = DateTime::createFromFormat('H:i a', $consult_from);
						$end_time = DateTime::createFromFormat('H:i a', $consult_to);
						//starttime
						if ($start_time<=$from && $end_time>=$to) {
						    $break_start_time = DateTime::createFromFormat('H:i a', $break_from);
							$break_end_time = DateTime::createFromFormat('H:i a', $break_to);
							//break time
							if ($break_start_time<=$from && $break_end_time>=$to) {
							  	$msg="break";
								$data = array(
										"msg"      => $msg
									);
									echo json_encode($data);
							//braek time						
							}else{
							    $query_select_date=mysqli_query($con,"select * from available where doctor_id='".$doctor."' and date='".$date."'");
								if(mysqli_fetch_row($query_select_date)>0){
									$query_select_date=mysqli_query($con,"select * from available where doctor_id='".$doctor."' and date='".$date."'");
									if($row_date=mysqli_fetch_array($query_select_date)){
										 $available_from=$row_date['time_from'];
										 $available_to=$row_date['time_to'];
										 $available_start_time = DateTime::createFromFormat('H:i a', $available_from);
										 $available_end_time = DateTime::createFromFormat('H:i a', $available_to);
										 if ($available_start_time<=$from && $available_end_time>=$to) {
											  $msg="notavailable";
												$data = array(
														"msg"      => $msg
													);
													echo json_encode($data);
										 }else{
											 	$apply=$checktimefrom."-".$checktimeto;
											 	$query_select=mysqli_query($con,"select * from booking where doctor_id='".$doctor."' and date='".$date."' and time='".$apply."' and status='0'");
												if(mysqli_fetch_row($query_select)>0){
													
												}else{
													$count++;
												}
										 }
									}
								}else{ //if available
									$apply=$checktimefrom."-".$checktimeto;
									$query_select=mysqli_query($con,"select * from booking where doctor_id='".$doctor."' and date='".$date."' and time='".$apply."' and status='0'");
									if(mysqli_fetch_row($query_select)>0){
													
									}else{
										$count++;
									}	
								}
							}//else break close
						//starttime else					
						}else{
							$msg="notconsult";
							$data = array(
									"msg"      => $msg
								);
								echo json_encode($data);
						}
					}//for
					if($count=='0'){
						$msg="close";
							$data = array(
									"msg"      => $msg
								);
								echo json_encode($data);
					}else{
						$msg="success";
							$data = array(
									"msg"      => $msg
								);
								echo json_encode($data);
					}
				}//if  not else for doctor
			}//if  //doctor >00  not else
		}else{ //workday >00
			$msg="offday";
			$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);
		}
	}
	
	?>