<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
 <title>Login</title>
 
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Allerta" rel="stylesheet">
  
   <!-- Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <link rel="icon" type="image/png" sizes="" href="img/fav.png">
  
  <style>
    
.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

  </style>
  
 
  
</head>


 
			
<body>


                                                                       
                                                                                             
                                                                         


     <center>
     <br>
     <br>
     <br>
     <br>



      <a href="index.php"><img src="img/2017-07-20.png" class="img-responsive"></a>
     </center>
    
<br>
<br>
<br>
<br>


<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="logaction.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                       <?php
									   if(isset($_GET['page'])){
										   if($_GET['page']=="online-appointment"){
											  	if(isset($_GET['specialist']) && isset($_GET['doctor']) && isset($_GET['date']) && isset($_GET['disease'])){
													   ?>
														<input type="txt" name="page" value="<?php echo $_GET['page']; ?>" hidden="true">
														<input type="txt" name="specialist" value="<?php echo $_GET['specialist']; ?>" hidden="true">
														<input type="txt" name="doctor" value="<?php echo $_GET['doctor']; ?>" hidden="true">
														<input type="txt" name="date" value="<?php echo $_GET['date']; ?>" hidden="true">
														<input type="txt" name="disease" value="<?php echo $_GET['disease']; ?>" hidden="true">
													   <?php
												   }else{
													?>
												<input type="txt" name="page" value="find-a-doctor" hidden="true">
											   <?php 
												 }
										   }else{
											   ?>
												<input type="txt" name="page" value="<?php echo $_GET['page']; ?>" hidden="true">
											   <?php
										   }
									   }else{
										?>
                                         <input type="txt" name="page" value="index" hidden="true">
                                        <?php   
									   }
									   ?>
									</div>
									<div class="form-group text-center">
										<?php
                                        if(isset($_GET['error'])){
										?>
                                        <label for="remember" style="color:red;">Login Failed</label>
                                        <?php
                                        }
										?>
										
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<?php
													if(isset($_GET['page'])){
														if($_GET['page']=='online-appointment'){
															if(isset($_GET['specialist']) && isset($_GET['doctor']) && isset($_GET['date']) && isset($_GET['disease'])){
																?>
                                        						<a href="register.php?page=<?php echo $_GET['page']; ?>&&specialist=<?php echo $_GET['specialist']; ?> && doctor=<?php echo $_GET['doctor']; ?> && date=<?php echo $_GET['date']; ?> && disease=<?php echo $_GET['disease']; ?>" tabindex="5" class="forgot-password">Don't have an account yet? Sign up Here</a>
                                       							<?php
									   						}else{
															   ?>
                                                               <a href="register.php?page=find-a-doctor" tabindex="5" class="forgot-password">Don't have an account yet? Sign up Here</a>
                                                               <?php
															}
														}else{
															?>
                                                            <a href="register.php?page=<?php echo $_GET['page']; ?>" tabindex="5" class="forgot-password">Don't have an account yet? Sign up Here</a>
                                                            <?php
														}
													}else{
													   ?>
													   <a href="register.php" tabindex="5" class="forgot-password">Don't have an account yet? Sign up Here</a>
													   <?php
												   }
												   ?>
									  
                                       
												</div>
											</div>
										</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





</body>
</html>