
<?php
if((isset($_POST['username']) && (isset($_POST['password'])))){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$passwords=md5($password);
$con=mysqli_connect("localhost","smpcashbook","smpcashbook","smpcashbook");
	$query=mysqli_query($con,"select * from login where username='".$username."' and password='".$passwords."'");
	if($res=mysqli_fetch_row($query)>0){
		$query=mysqli_query($con,"select * from login where username='".$username."' and password='".$passwords."'");
		if($res=mysqli_fetch_array($query)){
			$row=mysqli_fetch_array($query);
			session_start();
			$_SESSION["smp"]=$res['login_id'];
			$msg="success";
			
			?>

			<script>
window.location="home.php";
</script>
<?php
			
		}
	}else{
		
?>

			<script>
window.location="index.php?msg=error";
</script>
<?php
	}	
}


?>
