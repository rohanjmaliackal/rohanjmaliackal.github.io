<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
 <title>Register</title>
 
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
    


  </style>
  
 
  
</head>


 
			
<body>


                                                                       
                                                                                             
                                                                         


     <center>
     <br>
     <br>
     <br>
     



      <a href="index.php"><img src="img/2017-07-20.png" class="img-responsive"></a>
     </center>
    

<br>
<br>
<br>



<div class="container">
	<div class="row">
	<form class="form-horizontal" action="regaction.php" name="reg" method="post">
<fieldset>

<!-- Form Name -->
<legend><!--Form Name--></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Name</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required autocomplete="off">
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
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="user@domain.com" autocomplete="off" class="form-control input-md" required onKeyUp="return getUser()">
       <span class="help-block" id="usernamemsg" style="color: red;display:none;"></span>
     
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Mobile Number</label>  
  <div class="col-md-5">
  <input id="phone" name="phone" type="text" placeholder="Mobile Number" class="form-control input-md" required autocomplete="off">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Password</label>  
  <div class="col-md-5">
  <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md" required autocomplete="off">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Confirm Password</label>  
  <div class="col-md-5">
  <input id="cpassword" name="cpassword" type="password" placeholder="Re-type password" class="form-control input-md" required autocomplete="off">
    
  </div>
</div>




<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Gender</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="Female">
      Female
    </label>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
   <input type="submit" value="Submit" class="btn btn-success" onClick="return getPassword();"/>
    <span class="help-block" id="passwordmsg" style="color: red;display:none;"></span>
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
                                        						<a href="login.php?page=<?php echo $_GET['page']; ?>&&specialist=<?php echo $_GET['specialist']; ?> && doctor=<?php echo $_GET['doctor']; ?> && date=<?php echo $_GET['date']; ?> && disease=<?php echo $_GET['disease']; ?>" tabindex="5" class="forgot-password">Don't have an account yet? Sign up Here</a>
                                       							<?php
									   						}else{
															   ?>
                                                               <a href="login.php?page=find-a-doctor" tabindex="5" class="forgot-password">Already have an account? Sign In Here</a>
                                                               <?php
															}
														}else{
															?>
                                                            <a href="login.php?page=<?php echo $_GET['page']; ?>" tabindex="5" class="forgot-password">Already have an account? Sign In Here</a>
                                                            <?php
														}
													}else{
													   ?>
													   <a href="login.php" tabindex="5" class="forgot-password">Already have an account? Sign In Here</a>
													   <?php
												   }
												   ?>
                                                   
                                                   
                                                   
                                       
												</div>
											</div>
										</div>
									</div>

</fieldset>
</form>
	</div>
</div>


                                      
     <script>
	function getUser(){ 
		var username=document.getElementById("email").value;
		
						$.ajax({
								url: "exists.php",
								type: "POST",
								dataType:"JSON",
								data: {"username":username},
								success: function (data) {
									if(data.msg=="success"){
										document.getElementById("usernamemsg").style.display="none";
										 return false;		
									}else{
										document.getElementById("usernamemsg").style.display="block";
										document.getElementById('usernamemsg').innerHTML = "Username already Exists";
										return false;
									}
								}
						});	
						return false;
	}
	</script>    
    
    
                                     
     <script>
	function getPassword(){ 
		var password=document.getElementById("password").value;
		var cpassword=document.getElementById("cpassword").value;
		if(password==cpassword){
			document.getElementById("passwordmsg").style.display="none";
			return true;		
		}else{
			document.getElementById("passwordmsg").style.display="block";
			document.getElementById('passwordmsg').innerHTML = "Password Doesn't Match";
			return false;
		}
	}
	</script>                                       

</body>
</html>