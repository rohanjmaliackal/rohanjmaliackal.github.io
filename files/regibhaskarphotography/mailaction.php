		<?php
    	
		//$admin_email = "sales@blueberrybms.com";
		$admin_email = "rejibhaskar4you@gmail.com";
	   
		$email=$_POST['email'];
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$code=$_POST['code'];
		$subjects=$_POST['subject'];
		$message=$_POST['message'];
	    $subject="New Enquiry from rejibhaskar.in";
		$date=date("d-m-Y");
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
</head>
<body>

<table width="100%" bgcolor="#f6f6f6" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center">
<table width="100%" border="0" align="center" style="max-width:600px;background:#ffffff">
<tbody><tr>
<td bgcolor="#ffffff">
<table width="100%" border="0" align="center" style="max-width:560px;background:#ffffff">
<tbody><tr>
<td bgcolor="#ffffff">
<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center" style="border-bottom:10px solid #ffffff;font-family:Helvetica,Arial,sans-serif;color:#111111;font-size:14px"></td>
</tr>
<tr>
<td align="center" height="10px"></td>
</tr>
<tr>
<td align="center" height="55">
<a href="#">

<img src="http://rejibhaskar.in/img/logo.png" width="204" style="display:block;font-family:arial,helvetica,serif;font-size:15px;color:#f00c6b" class="CToWUd">
</a>

<table width="100%" border="0" style="margin-top:20px;">

   <tr>
    <td valign="top" style="padding:0px 0px 0px 0px; height:30px;">
    <p style="font-family:Helvetica,Arial,sans-serif;color: #3b3c3a; padding: 9px 0px;"><strong>Name: '.$name.'&nbsp;</strong></p></td>
  </tr>
   <tr>
    <td valign="top" style="padding:0px 0px 0px 0px; height:30px;">
    <p style="font-family:Helvetica,Arial,sans-serif;color: #3b3c3a; padding: 9px 0px;"><strong>Contact Number: '.$code.'-'.$phone.'&nbsp;</strong></p></td>
  </tr>

  <tr>
    <td valign="top" style="padding:0px 0px 0px 0px; height:30px;">
    <p style="font-family:Helvetica,Arial,sans-serif;color: #3b3c3a; padding: 9px 0px;"><strong>Email: '.$email.'&nbsp;</strong></p></td>
  </tr>
  
   <tr>
    <td valign="top" style="padding:0px 0px 0px 0px; height:30px;">
    <p style="font-family:Helvetica,Arial,sans-serif;color: #3b3c3a; padding: 9px 0px;"><strong>Subject: '.$subjects.'&nbsp;</strong></p></td>
  </tr>
  
   <tr>
    <td valign="top" style="padding:0px 0px 0px 0px; height:30px;"><p style="font-family:Helvetica,Arial,sans-serif;color: #3b3c3a; padding: 9px 0px;"><strong>Message: '.$message.'</strong></p></td>
   
  </tr>
  
  
  
  
</table>

<table width="100%" border="0">
  <tr>
    <td style="border-bottom:1px solid #ccc;"></td>
  </tr>
</table>

<table width="100%" border="0">
  <tr>
    <td><p style="font-family:Arial, Helvetica, sans-serif;"><strong></strong></p></td>
  
  </tr>
</table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>

</td>
</tr>
</tbody></table>
</body>
</html>
';


		if(mail($admin_email, $subject, $message, $headers)){
			$msg="Message Send Successfully";
			$data = array(
					"msg"      => $msg
				);
				echo json_encode($data);
		}else {
			$error="Message Not Send";
			$data = array(
					"msg"      => $error
				);
				echo json_encode($data);
		}
		
	
?>