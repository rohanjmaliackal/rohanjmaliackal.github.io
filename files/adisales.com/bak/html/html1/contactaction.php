<?php
if ((isset($_POST['name']) || isset($_POST['email'])) && isset($_POST['message']))  {
	 $admin_email = "smptradingcorp@gmail.com";
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $subject=$_POST['subject'];
	 $phone=$_POST['phone'];
	 $message=$_POST['message'];
	//$d=mktime(11, 14, 54, 8, 12, 2014);
    //date('l jS \of F Y h:i:s A');
	 $date=date("Y-m-d");
	 $dates = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
  	 $time=$dates->format('H:i:s a');
	// $time=date("h:i:s");
	//$htmlContent = file_get_contents("email_template.html");
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 
	// Create email headers
	$headers .= 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
	$mail='MIME-Version: 1.0' . "\r\n";
	 /*$message='<html>
    		<body>
        		<div style="width:550px;border:1px #bdb9bc  solid;border-radius:10px;box-shadow: 1px 1px 1px;">
            		<div style="width:100%;height:50px;background-color:#eeeeee;float:left;border-radius:10px;">
            			<h1 style="color:#da0799;"><center>'.$subject.'</center></h1>
            		</div>
					<table style="margin-top:70px;">
            			<tr><td style="width:100px;">From:</td><td>'.$email.'</td></tr>
                		<tr><td>To:</td><td>'.$admin_email.'</td></tr>
                		<tr><td>Date:</td><td>'.$date.'</td></tr>
                 		<tr><td>Subject:</td><td>'.$subject.'</td></tr>
                  		<tr><td>mailed-by:</td><td>'.$email.'</td></tr> 
                  		<tr><td>Phone:</td><td>'.$phone.'</td></tr>
				    	<tr><td>Message:</td><td>'.$message.'</td></tr>
					</table>
				</div>
    		</body>
		</html>';*/
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
    <td width="100" style="border:none;"><img src="http://sientisolutions.com/clients/smptradingcorp.com/html/img/logo.png"  /></td>
    <td style="border:none;">&nbsp;</td>
  </tr>
</table>
<table width="600" border="1" bgcolor="#000000">
  <tr>
    <td width="100"><p style="color:#fff;  ">Name :</p></td>
    <td>&nbsp;'.$name.'</td>
  </tr>
  <tr>
    <td><p style="color:#fff;  ">Phone :</p></td>
    <td>&nbsp;'.$phone.'</td>
  </tr>
  <tr>
    <td><p style="color:#fff;  ">Sent by :</p></td>
    <td>&nbsp;'.$email.'</td>
  </tr>
  <tr>
    <td><p style="color:#fff;  ">Subject :</p></td>
    <td>&nbsp;'.$subject.'</td>
  </tr>
   <tr>
    <td><p style="color:#fff; ">Message :</p></td>
    <td>&nbsp;'.$message.'</td>
  </tr>
     <tr>
    <td><p style="color:#fff; ">Date :</p></td>
    <td>&nbsp;'.$date.'</td>
  </tr>
     <tr>
    <td><p style="color:#fff; ">Time :</p></td>
    <td>&nbsp;'.$time.'</td>
  </tr>
</table>

</body>
</html>
';
	// Set content-type for sending HTML email
	
	
	// Send email
	 
		
		
	if(mail($admin_email, $subject, $message, $headers)){
		header("location:contact.php?msg=success");
	}else {
		header("location:contact.php?error=error");
	}
}
?>



