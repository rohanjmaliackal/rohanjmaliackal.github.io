<?php
date_default_timezone_set("Asia/Kolkata");
	require_once("connect.php");
	$date=$_GET['date'];
	$doctor=$_GET['doctor'];
	$query_select=mysqli_query($con,"select * from leaves where doctor_id='".$doctor."' and date='".$date."' and status='0'");
	//leaves >0
	if(mysqli_fetch_row($query_select)>0){
		?><h3><?php echo $msg="leave"; ?></h3><?php
			/*$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);*/
	}else{ //leaves !=0

		$timestamp = strtotime($date);
		$day = date('l', $timestamp);
		$query_date=mysqli_query($con,"select * from workday where doctor_id='".$doctor."'");
		//workday >00
		if(mysqli_fetch_row($query_date)>0){ 
			
			$timearray='9:00 AM-9:10 AM,9:10 AM-9:20 AM,9:20 AM-9:30 AM,9:30 AM-9:40 AM,9:40 AM-9:50 AM,9:50 AM-10:00 AM,10:00 AM-10:10 AM,10:10 AM-10:20 AM,10:20 AM-10:30 AM,10:30 AM-10:40 AM,10:40 AM-10:50 AM,10:50 AM-11:00 AM,11:00 AM-11:10 AM,11:10 AM-11:20 AM,11:20 AM-11:30 AM,11:30 AM-11:40 AM,11:40 AM-11:50 AM,11:50 AM-12:00 PM,12:00 PM-12:10 PM,12:10 PM-12:20 PM,12:20 PM-12:30 PM,12:30 PM-12:40 PM,12:40 PM-12:50 PM,12:50 PM-1:00 PM,1:00 PM-1:10 PM,1:10 PM-1:20 PM,1:20 PM-1:30 PM,1:30 PM-1:40 PM,1:40 PM-1:50 PM,1:50 PM-2:00 PM,2:00 PM-2:10 PM,2:10 PM-2:20 PM,2:20 PM-2:30 PM,2:30 PM-2:40 PM,2:40 PM-2:50 PM,2:50 PM-3:00 PM,3:00 PM-3:10 PM,3:10 PM-3:20 PM,3:20 PM-3:30 PM,3:30 PM-3:40 PM,3:40 PM-3:50 PM,3:50 PM-4:00 PM,4:00 PM-4:10 PM,4:10 PM-4:20 PM,4:20 PM-4:30 PM,4:30 PM-4:40 PM,4:40 PM-4:50 PM,4:50 PM-5:00 PM';

			$query_select_time=mysqli_query($con,"select * from doctor where doctor_id='".$doctor."' and status='0'");
			//doctor >00
			if(mysqli_fetch_row($query_select_time)>0){
				$query_select_time=mysqli_query($con,"select * from doctor where doctor_id='".$doctor."' and status='0'");
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
					$count=0;
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
						
						


						if ($from >= $start_time and $from <= $end_time and $to >= $start_time and $to <= $end_time) {  

						//if ($consult_from<=$checktimefrom and $consult_to>=$checktimeto) {  echo "ok";
						    $break_start_time = DateTime::createFromFormat('H:i a', $break_from);
							$break_end_time = DateTime::createFromFormat('H:i a', $break_to);
							//break time
							
							if ($from >= $break_start_time and $from <= $break_end_time and $to >= $break_start_time and $to <= $break_end_time) { 
							//if ($break_start_time<=$from && $break_end_time>=$to) {
							  	/*$msg="break";
								$data = array(
										"msg"      => $msg
									);
									echo json_encode($data);*/
									//$count=$count;
							//braek time						
							}else{
							    $query_select_date=mysqli_query($con,"select * from available where doctor_id='".$doctor."' and date='".$date."' and status='0'");
								if(mysqli_fetch_row($query_select_date)>0){
									$query_select_date=mysqli_query($con,"select * from available where doctor_id='".$doctor."' and date='".$date."' and status='0'");
									if($row_date=mysqli_fetch_array($query_select_date)){
										 $available_from=$row_date['time_from'];
										 $available_to=$row_date['time_to'];
										 $available_start_time = DateTime::createFromFormat('H:i a', $available_from);
										 $available_end_time = DateTime::createFromFormat('H:i a', $available_to);
										 if ($from >= $available_start_time and $from <= $available_end_time and $to >= $available_start_time and $to <= $available_end_time) { 
										 //if ($available_start_time<=$from && $available_end_time>=$to) {
											  /*$msg="notavailable";
												$data = array(
														"msg"      => $msg
													);
													echo json_encode($data);*/
													//$count=$count;
										 }else{
											 	$apply=$checktimefrom."-".$checktimeto;
											 	$query_select=mysqli_query($con,"select * from booking where doctor_id='".$doctor."' and date='".$date."' and time='".$apply."' and status='0'");
												if(mysqli_fetch_row($query_select)>0){
													//$count=$count;
												}else{
													 $count++;
													// echo $apply=$checktimefrom."-".$checktimeto;
													 
												}
										 }
									}
								}else{ //if available
									$apply=$checktimefrom."-".$checktimeto;
									$query_select=mysqli_query($con,"select * from booking where doctor_id='".$doctor."' and date='".$date."' and time='".$apply."' and status='0'");
									if(mysqli_fetch_row($query_select)>0){
										$count=$count;			
									}else{
										$count++;
										//echo $apply=$checktimefrom."-".$checktimeto;
									}	
								}
							}//else break close
						//starttime else					
						}else{  //$count=$count;
							/*$msg="notconsult";
							$data = array(
									"msg"      => $msg
								);
								echo json_encode($data);*/
						}
					}//for
					//echo $count;
					
					if($count=='0'){
						?><h3><?php echo $msg="close"; ?></h3><?php
                        //echo $msg="close";
							/*$data = array(
									"msg"      => $msg
								);
								echo json_encode($data);*/
					}else{
						?>
                        <?php /*?><h3><?php echo $msg="sucess"; ?></h3><?php */?>
						<?php
						//echo $msg="success";
							/*$data = array(
									"msg"      => $msg
								);
								echo json_encode($data);*/
					}
				}//if  not else for doctor
			}//if  //doctor >00  not else
		}else{ //workday >00
		?><h3><?php echo $msg="offday"; ?></h3><?php
		//echo 	$msg="offday";
			/*$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);*/
		}
	}
	
	?>