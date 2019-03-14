<?php

		require_once("connect.php");
		$specialist=$_POST['specialist'];	
		$doctor_id=$_POST['doctor'];	
		$date=$_POST['date'];
		$dates=explode(",",$date);
		$size=sizeof($dates);
		for($i=0;$i<$size;$i++){
			$dt=$dates[$i];
			mysqli_query($con,"INSERT INTO leaves(specialist,doctor_id,date) VALUES ('".$specialist."', '".$doctor_id."','".$dt."')");
			$query=mysqli_query($con,"select * from booking where date='".$dt."'");
			if(mysqli_fetch_row($query)>0){
				$query=mysqli_query($con,"select * from booking where date='".$dt."' and status!='1' and st!='completed'");
				while($row=mysqli_fetch_array($query)){
					$email=$row['email'];
					$phone=$row['phone'];
					$booking_id=$row['booking_id'];
					mysqli_query($con,"update booking set st='cancelled' where booking_id='".$booking_id."'");
					//mail send
					
					//sms

					$admin_email=$email;
    	
					$name=$fname."&nbsp;".$lname;
					$email = "shiji.sienti@gmail.com";
					$subject="Booking Rejected";
					$date=date("Y-m-d");
					$dates = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
					$time=$dates->format('H:i:s a');
					//$message='You are invited by Shiji to join D4Designers';
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From: '.$email."\r\n".
					'Reply-To: '.$email."\r\n" .
					'X-Mailer: PHP/' . phpversion();
					$mail='MIME-Version: 1.0' . "\r\n";
					$message='<html><head><style>
						body {
							font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif;
							font-size: 1rem;
							font-weight: 400;
							line-height: 1.5;
							color: #292b2c;
							background-color: #fff;
						}
						.bd-example::after {
							display: block;
							content: "";
							clear: both;
						}
						.bd-example {
							padding: 1.5rem;
							margin-right: 0;
							margin-bottom: 0;
							margin-left: 0;
							border-width: .2rem;
						}
						.bd-example {
							position: relative;
							padding: 1rem;
							margin: 1rem -1rem;
							border: solid #f7f7f9;
							border-width: .2rem 0 0;
						}
						.text-center {
							text-align: center!important;
						}
						.card {
							position: relative;
							display: -webkit-box;
							display: -webkit-flex;
							display: -ms-flexbox;
							display: flex;
							-webkit-box-orient: vertical;
							-webkit-box-direction: normal;
							-webkit-flex-direction: column;
							-ms-flex-direction: column;
							flex-direction: column;
							background-color: #fff;
							border: 1px solid rgba(0,0,0,.125);
							border-radius: .25rem;
						}
						.card-header:first-child {
							border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
						}
						
						.card-header {
							padding: .75rem 1.25rem;
							margin-bottom: 0;
							background-color: #f7f7f9;
							border-bottom: 1px solid rgba(0,0,0,.125);
						}
						.card-block {
							-webkit-box-flex: 1;
							-webkit-flex: 1 1 auto;
							-ms-flex: 1 1 auto;
							flex: 1 1 auto;
							padding: 1.25rem;
						}
						.card-footer:last-child {
							border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px);
						}
						.text-muted {
							color: #636c72!important;
						}
						.card-footer {
							padding: .75rem 1.25rem;
							background-color: #f7f7f9;
							border-top: 1px solid rgba(0,0,0,.125);
						}
						.card-title {
							margin-bottom: .75rem;
						}
						p {
							margin-top: 0;
							margin-bottom: 1rem;
						}
						.h4, h4 {
							font-size: 1.5rem;
						}
						
						.btn-primary {
							color: #fff;
							background-color: #0275d8;
							border-color: #0275d8;
						}
						
						.btn {
							display: inline-block;
							font-weight: 400;
							line-height: 1.25;
							text-align: center;
							white-space: nowrap;
							vertical-align: middle;
							-webkit-user-select: none;
							-moz-user-select: none;
							-ms-user-select: none;
							user-select: none;
							border: 1px solid transparent;
							padding: .5rem 1rem;
							font-size: 1rem;
							border-radius: .25rem;
							-webkit-transition: all .2s ease-in-out;
							-o-transition: all .2s ease-in-out;
							transition: all .2s ease-in-out;
						}
						a {
							color: #0275d8;
							text-decoration: none;
						}
						a {
							background-color: transparent;
							-webkit-text-decoration-skip: objects;
						}
					</style></head><body><div class="card text-center"><div class="card-header"><img src="http://d4designers.com/images/logo.png" /></div><div class="card-block">
											<h4 class="card-title">We Inform you</h4>
											<p class="card-text">Your Online booking  appointmennt cancelled</p>
											<a href="http://sreerudraayurveda.com/" class="btn btn-primary">Go Sreerudra Ayurveda Hospital</a>
			  							</div><div class="card-footer text-muted">'.$date.'</div></div>
			
					</body></html>';
			
			
			
					mail($admin_email,$subject,$message,$headers);
					
					
					
				}
			}
		}
		header("location:leave.php?msg=success");
		
?>