<?php
namespace Instamojo;
include 'Instamojo.php';


$endpoint='https://instamojo.com/api/1.1/payment-requests/';
$api_key='661aedd8489169b7fe15db4186ed855e';
$auth_tocken='b42d877c7b9a288ed64fc433ba1b8fb9';
$api=new Instamojo($api_key,$auth_tocken,$endpoint);
$payment_id=$_GET['payment_request_id'];

echo $response['payments'][0]['payment_id'];
print_r($respone);

$booking_id=$response['payments'][0]['payment_id'];
require_once("connect.php");
session_start();
$login_id=$_SESSION["login_id"];

mysqli_query($con,"insert into pay(login_id,payment_id,booking_id) values('".$login_id."','".$payment_id."','".$booking_id."')");

mysqli_query($con,"update booking set pay='paid' where booking_id='".$booking_id."'");



header("location:online-payment.php?msg=success");
?>