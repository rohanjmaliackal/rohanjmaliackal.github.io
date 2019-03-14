<?php

		//$admin_email ="shijijohn1990@gmail.com";
                $admin_email ="info@anezanzare.com";
	   
		$email=$_POST["email"];
		$name="iu";
		$phone="pp";
        $user="lll";
	 	$pass="pp";
		$message="oo";

               
		
		$code="ll";
	    $subject="Newsletter";
		$date=date("d-m-Y");
		$dates = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
		$time=$dates->format('H:i:s a');
	
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	 	$headers .= 'From: '.$email."\r\n".
		'Reply-To: '.$email."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$mail='MIME-Version: 1.0' . "\r\n";

$message='<html>
<head>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}
header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
nav {
    float: left;
    max-width: 300px;
    margin: 0;
    padding: 1em;
}
nav ul {
    list-style-type: none;
    padding: 0;
}
nav ul a {
    text-decoration: none;
}
article {
    margin-left: 170px;
    padding: 1em;
    overflow: hidden;
}
td{
	padding:10px; 
	text-align:center;
}
th{
	padding:10px;
	color:#000;
	font-size:18px;
	border-bottom:1px solid #ccc;
}
</style>
</head>
<body><div class="container">
<header>
   <h1>Newsletter</h1>
</header>
<nav>
  <ul>
    <img src="http://anezanzarestudio.com/html/img/logo.png" />
  </ul>
</nav>
<article><table style="width:40%;height:auto;">
            <tbody><tr class="cart-headers" >
               <td>Email</td>
                <td>'.$email.'</td>
                 </tr></tbody><tfoot></tfoot></table></article><footer>'.$date.'</footer></div></body></html>';


	if(mail($admin_email, $subject, $message, $headers)){
		$msg='success';
		$data = array(
            "msg"     => $msg
        );
        echo json_encode($data);
   	}else{
    	$msg='error';
		$data = array(
            "msg"     => $msg
        );
        echo json_encode($data);
   	}

?>