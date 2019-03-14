									<style>
										#result{
											padding-left: 12%;
										}
										.grid{ 
											padding: 2% 0% 2% 2%;
											margin-left: 1%;
											margin-top: 1%;
											background-color: rgba(86,61,124,.15);
											border: 1px solid rgba(86,61,124,.2);
											
										}
										.booked{
											/*background-image: linear-gradient(45deg, #000 25%, transparent 25%, transparent 50%, #000 50%, #000 75%, transparent 75%, transparent);
										background-size: 50px 50px;
										color:white;*/
										background-image: linear-gradient(45deg, rgb(226, 11, 11) 25%, transparent 25%, transparent 50%, rgba(228, 12, 12, 0.06) 50%, rgba(218, 18, 18, 0.4) 75%, transparent 75%, transparent);
    background-size: 18px 18px;
    color: #33318f;
										}
									</style>
									<?php
								require_once("connect.php");
                                $date=$_GET['date'];
								$specialist_id=$_GET['specialist_id'];
								$doctor=$_GET['doctor'];
								
								
								
								
								$query_select=mysqli_query($con,"select * from leaves where doctor_id='".$doctor."' and date='".$date."' and status='0'");
								//leaves >0
								if(mysqli_fetch_row($query_select)>0){
									?><h3><?php echo $msg="Not Available"; ?></h3><?php
										/*$data = array(
												"msg"      => $msg
											);
											echo json_encode($data);*/
								}else{ 
								
								$timestamp = strtotime($date);
								$day = date('l', $timestamp);
								$query_date=mysqli_query($con,"select * from workday where doctor_id='".$doctor."' and day='".$day."'");
								//workday >00
								if(mysqli_fetch_row($query_date)>0){ 
								
								
								
								
		 						$timearray='9:00 AM-9:10 AM,9:10 AM-9:20 AM,9:20 AM-9:30 AM,9:30 AM-9:40 AM,9:40 AM-9:50 AM,9:50 AM-10:00 AM,10:00 AM-10:10 AM,10:10 AM-10:20 AM,10:20 AM-10:30 AM,10:30 AM-10:40 AM,10:40 AM-10:50 AM,10:50 AM-11:00 AM,11:00 AM-11:10 AM,11:10 AM-11:20 AM,11:20 AM-11:30 AM,11:30 AM-11:40 AM,11:40 AM-11:50 AM,11:50 AM-12:00 PM,12:00 PM-12:10 PM,12:10 PM-12:20 PM,12:20 PM-12:30 PM,12:30 PM-12:40 PM,12:40 PM-12:50 PM,12:50 PM-1:00 PM,1:00 PM-1:10 PM,1:10 PM-1:20 PM,1:20 PM-1:30 PM,1:30 PM-1:40 PM,1:40 PM-1:50 PM,1:50 PM-2:00 PM,2:00 PM-2:10 PM,2:10 PM-2:20 PM,2:20 PM-2:30 PM,2:30 PM-2:40 PM,2:40 PM-2:50 PM,2:50 PM-3:00 PM,3:00 PM-3:10 PM,3:10 PM-3:20 PM,3:20 PM-3:30 PM,3:30 PM-3:40 PM,3:40 PM-3:50 PM,3:50 PM-4:00 PM,4:00 PM-4:10 PM,4:10 PM-4:20 PM,4:20 PM-4:30 PM,4:30 PM-4:40 PM,4:40 PM-4:50 PM,4:50 PM-5:00 PM';
								$query_select_time=mysqli_query($con,"select * from doctor where doctor_id='".$doctor."'");
								if(mysqli_fetch_row($query_select_time)>0){
									$query_select_time=mysqli_query($con,"select * from doctor where doctor_id='".$doctor."'");
									if($row_time=mysqli_fetch_array($query_select_time)){
										$consult_from=$row_time['consult_from'];
										$consult_to=$row_time['consult_to'];
										$break_from=$row_time['break_from'];
										$break_to=$row_time['break_to'];
										//$consult=$consult_from."-".$consult_to;
										//$break=$break_from."-".$break_to;
							
										$val=explode(',',$timearray);
										for($i=0;$i<sizeof($val);$i++){
											$timecheck=$val[$i];
											
											$valtime=explode('-',$timecheck);
											
											$checktimefrom=$valtime[0];
											$checktimeto=$valtime[1];
									
											$from=DateTime::createFromFormat('H:i a', $checktimefrom);
											$to=DateTime::createFromFormat('H:i a', $checktimeto);
											$start_time = DateTime::createFromFormat('H:i a', $consult_from);
											$end_time = DateTime::createFromFormat('H:i a', $consult_to);
											
											//if ($start_time<=$from && $end_time>=$to) { 
											if ($from >= $start_time and $from <= $end_time and $to >= $start_time and $to <= $end_time) {  

												$break_start_time = DateTime::createFromFormat('H:i a', $break_from);
												$break_end_time = DateTime::createFromFormat('H:i a', $break_to);
												
												//if ($break_start_time<=$from && $break_end_time>=$to) { //echo "p";
												if ($from >= $break_start_time and $from <= $break_end_time and $to >= $break_start_time and $to <= $break_end_time) { 

												  
												  // echo $checktimefrom;
												  // echo $checktimeto;
												   
												   ?>
                                                 
                                                   <?php
												}else{
													$query_select_date=mysqli_query($con,"select * from available where doctor_id='".$doctor."' and date='".$date."' and status='0'");
													if(mysqli_fetch_row($query_select_date)>0){
														$query_select_date=mysqli_query($con,"select * from available where doctor_id='".$doctor."' and date='".$date."' and status='0'");
														if($row_date=mysqli_fetch_array($query_select_date)){
															 $available_from=$row_date['time_from'];
															 $available_to=$row_date['time_to'];
															 $available_start_time = DateTime::createFromFormat('H:i a', $available_from);
															 $available_end_time = DateTime::createFromFormat('H:i a', $available_to);
															 //if ($available_start_time<=$from && $available_end_time>=$to) {
															 if ($from >= $available_start_time and $from <= $available_end_time and $to >= $available_start_time and $to <= $available_end_time) { 

																   ?>
                                                                   
                                                                   <?php
															 }else{
																	$apply=$checktimefrom."-".$checktimeto;
																	$query_select=mysqli_query($con,"select * from booking where doctor_id='".$doctor."' and date='".$date."' and time='".$apply."' and status='0'");
																	if(mysqli_fetch_row($query_select)>0){
																		?>
                                                                        <div class="col-sm-2 grid ">
                                                                        <?php echo $timecheck; ?>
                                                                        </div>
                                                                        <?php
																	}else{
																		?>
                                                                        <div class="col-sm-2 grid" onclick="getTimeDoctor('<?php echo $timecheck; ?>');">
                                                                        <?php echo $timecheck; ?>
                                                                        </div>
                                                                        <?php
																	}
															 }
														}
													}else{ //if 
													
														$apply=$checktimefrom."-".$checktimeto;
														$query_select=mysqli_query($con,"select * from booking where doctor_id='".$doctor."' and date='".$date."' and time='".$apply."' and status='0'");
														if(mysqli_fetch_row($query_select)>0){
															?>
                                                            <div class="col-sm-2 grid booked">
                                                            <?php echo $timecheck; ?>
                                                            </div>
                                                            <?php			
														}else{
															?>
                                                            <div class="col-sm-2 grid" onclick="getTimeDoctor('<?php echo $timecheck; ?>');">
                                                            <?php echo $timecheck; ?>
                                                            </div>
                                                            <?php
														}	
													}
												}//else
											}else{
											   ?>
                                                                  
                                                                   <?php
											}
										}//for
									}//if doctor >0
								}//if doctor >0 
								
								}else{ //workday >00
		?><h3><?php echo $msg="Not Available"; ?></h3><?php
		//echo 	$msg="offday";
			/*$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);*/
		}
									}
								?>
								
									
                                        