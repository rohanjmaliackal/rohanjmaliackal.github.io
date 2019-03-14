<?php 
$username=$_POST['username'];
$passwords=$_POST['password'];
$password=md5($passwords);

require_once("connect.php");
session_start();
$query_select=mysqli_query($con,"select * from login where username='".$username."' and password='".$password."'");
if(mysqli_fetch_row($query_select)>0){
	$query_select=mysqli_query($con,"select * from login where username='".$username."' and password='".$password."'");	
	if($row_result=mysqli_fetch_array($query_select)){
		$login_id=$row_result['login_id'];
		$_SESSION["login_id"]=$login_id;
		$status=$row_result['status'];
		if($status=="admin"){
			header("location:home.php");	
		}else{
			header("location:user/home.php");	
		}
	}
}else{
	header("location:index.php?error=error");	
}
?>