<!DOCTYPE html>
<head>
<title>Sreerudra Ayurveda Hospital</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<script src="js/jquery2.0.3.min.js"></script>
<style>
.ggg::-webkit-input-placeholder {
					color: rgb(39, 136, 99) !important;
					}
					
					.ggg:-moz-placeholder { /* Firefox 18- */
					color: rgb(39, 136, 99) !important;  
					}
					
					.ggg::-moz-placeholder {  /* Firefox 19+ */
					color: rgb(39, 136, 99) !important;  
					}
					
					.ggg:-ms-input-placeholder {  
					color: rgb(39, 136, 99) !important;  
					}
</style>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
	<h2><img src="images/logo.png" /></h2>
		<form action="logaction.php" method="post" >
			<input type="text" class="ggg" name="username" placeholder="Enter Username" required>
			<input type="password" class="ggg" name="password" placeholder="Enter Password" required>
			
			
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
        <?php
		if(isset($_GET['error'])){
		?>
		<p style="color:red;">Login Failed</p>
        <?php
		}
		?>
</div>
</div>
<script src="js/bootstrap.js"></script>

</body>
</html>
