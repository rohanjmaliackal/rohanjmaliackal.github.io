		<?php
    	
		//$admin_email = "sales@blueberrybms.com";
		$admin_email = "finedayphotography@gmail.com";
		
	    
	 
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];
		$sub=$_POST['subject'];
		$code=$_POST['code'];
	    $subject="FINEDAY PHOTOGRAPHY";
		$date=date("Y-m-d");
		$dates = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
		$time=$dates->format('H:i:s a');
	
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 	$headers .= 'From: '.$email."\r\n".
		'Reply-To: '.$email."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$mail='MIME-Version: 1.0' . "\r\n";
		
		
		
		$message='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
*{
	padding:0px;
	margin:0px;
}
table {
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
	font-family:Arial, Helvetica, sans-serif;
	padding:10px;
}
td{
	color:#fff;
}
</style>
</head>
<body>
<table width="600" border="0" bgcolor="#fff" style="border:none;">
  <tr style="border:none;">
    <td width="100" style="border:none;"></td>
	 <td width="100" style="border:none;"><img src="http://finedayphotography.in/images/logo.png"  /></td>
    <td style="border:none;">&nbsp;</td>
  </tr>
</table>
<table width="600" border="1" bgcolor="#000000">
  <tr>
    <td width="100"><p style="color:#fff;  ">First Name :</p></td>
    <td style="color:#fff;">&nbsp;'.$name.'</td>
  </tr>
  
  <tr>
    <td><p style="color:#fff;  ">Phone :</p></td>
    <td style="color:#fff;">&nbsp;'.$code."-".$phone.'</td>
  </tr>
  <tr>
    <td><p style="color:#fff;  ">Sent by :</p></td>
    <td>&nbsp;'.$email.'</td>
  </tr>
  <tr>
    <td><p style="color:#fff;  ">Subject :</p></td>
    <td style="color:#fff;">&nbsp;'.$sub.'</td>
  </tr>
   <tr>
    <td><p style="color:#fff; ">Message :</p></td>
    <td style="color:#fff;">&nbsp;'.$message.'</td>
  </tr>
     <tr>
    <td><p style="color:#fff; ">Date :</p></td>
    <td style="color:#fff;">&nbsp;'.$date.'</td>
  </tr>
     <tr>
    <td><p style="color:#fff; ">Time :</p></td>
    <td style="color:#fff;">&nbsp;'.$time.'</td>
  </tr>
</table>

</body>
</html>
';



		if(mail($admin_email, $subject, $message, $headers)){
			$msg="Message Send Successfully";
			$data = array(
					"email"      => $msg
				);
				echo json_encode($data);
		}else {
			$error="Message Not Send";
			$data = array(
					"email"      => $error
				);
				echo json_encode($data);
		}
		
	
?>