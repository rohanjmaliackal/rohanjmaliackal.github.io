<?php
namespace Instamojo;
include 'Instamojo.php';

$endpoint='https://www.instamojo.com/@sienti/';
$api_key='661aedd8489169b7fe15db4186ed855e';
$auth_tocken='b42d877c7b9a288ed64fc433ba1b8fb9';
$api=new Instamojo($api_key,$auth_tocken,$endpoint);
$payload=Array(
			'purpose'=>'pay booking',
			'amount'=>'10',
			'phone'=>'9526369515',
			'buyer_name'=>'Shiji',
			'redirect_url'=>'http://sientisolutions.com/success.php',
			'send_sms'=>true,
			'send_email'=>true,
			'webhook'=>'http://www.example.com/webhook/',
			'allow_repeated_payments'=>false
		);
		
		$request=$api->paymentRequestCreate($payload);
		//print_r($request);
		$logurl=$request['longurl'];
		header('location:'.$logurl,true);

?>