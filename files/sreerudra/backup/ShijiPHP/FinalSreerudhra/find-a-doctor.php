<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
 <title>Find A Doctor</title>
 
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
  
  
  <!-- //calendar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="date/jquery-ui.min.js"></script>
<script src="date/jquery-ui.multidatespicker.js"></script>
<link href="date/jquery-ui.css" rel="stylesheet"> 
<link href="date/jquery-ui.multidatespicker.css" rel="stylesheet"> 
<link rel="stylesheet" href="datepic/include/ui-1.10.0/ui-lightness/jquery-ui-1.10.0.custom.min.css" type="text/css" />
<link rel="stylesheet" href="datepic/jquery.ui.timepicker.css?v=0.3.3" type="text/css" />



  <style>
  .btn-primary {
    color: #fff;
    background-color: #098745;
    border-color: #158a4c;
}
.top-links p{
    font-size: 10px;
} 
.inner-wrapper {
    max-width: 85%;
    margin: 0 auto;
    min-height: 370px;
    background-color: rgba(246,232,187,0.7);
    margin-top: 30px;
    box-shadow: 1px 5px 15px #3c3c3c;
} 
a:hover, a:focus {
    color: #059610;
    text-decoration: none;
}
a {
   color: #60ba47;	
}
.image-wrapper-fd {
    background: url(img/2.jpg) no-repeat center;
    min-height: 435px;
    background-attachment: fixed;
    background-size: cover;
    opacity: 1;
    filter: alpha(opacity=50);
    max-width: 1600px;
    margin-top: -20px;
}
table {
    background-color: white;
}
  </style>
  
 
  
</head>


 
			
<body>

<div class="top-links">
  <div class="container-fluid">
   <div class="row">
   
    <div class="top-position">
      
      <div class="col-md-6">
      <i class="fa fa-map-marker" aria-hidden="true" style="float:left; margin-right:10px;"></i><p>Sreerudra Ayurveda Multi Speciality Hospital Alappuzha</p>
     </div>
     
     <div class="col-md-3">
      <i class="fa fa-envelope-o" aria-hidden="true" style="float:left; margin-right:10px;"></i><p>sreerudraayurvedahospitalalpy@gmail.com</p>
     </div>           
     
     <div class="col-md-3">
      <i class="fa fa-phone" aria-hidden="true" style="float:left; margin-right:10px; margin-left:32px;"></i><p>+91 477 2266778, +91 9847948218, +91 8848999404</p>
     </div>           
     
     
       
     </div>
     
   </div>
  </div>
  
</div>
                                                                       
                                                    <!--navbar-->                                                
                                                                         

<nav class="navbar navbar-default sha">
  <div class="container-fluid">
    <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
           </button>
      <a class="navbar-brand" href="index.php"><img src="img/2017-07-20.png" class="img-responsive"></a>
    </div>
   <div class="collapse navbar-collapse" id="myNavbar">
     <ul class="nav navbar-nav navbar-right navbar-alter">
      <li class="active"><a href="index.php" class="cmn-t-underline">HOME</a></li>
      <li><a href="ayurveda.php" class="cmn-t-underline">AYURVEDA</a></li>
      <li><a href="our-team.php" class="cmn-t-underline">OUR TEAM</a></li>
      <li><a href="facilities.php" class="cmn-t-underline">FACILITIES</a></li>
      
      <li class="dropdown">
        <a class="dropdown-toggle cmn-t-underline" data-toggle="dropdown" href="#">SERVICES
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        
          <li ><a href="our-specialities.php">Our Specialities</a></li>
          <li><a href="our-ways-of-treatment.php">Our Ways Of Treatment</a></li>
          
        </ul>
      </li>
      
      <?php
	 
		
	  if(isset($_SESSION["login_id"])){
	  ?>
       <li class="dropdown">
        <a class="dropdown-toggle cmn-t-underline" data-toggle="dropdown" href="#">USER
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        
          <li ><a href="view-booking.php">View Booking</a></li>
          <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </li>
      
      <?php
	  }else{
		?>
         <li><a href="login.php" class="cmn-t-underline" style="background-color: #28da24;color: white;border-radius: 10%;">LOGIN</a></li>
        
        <?php  
	  }
	  ?>
     
    </ul>
   </div> 
  </div>
</nav>


<div class="image-wrapper-fd">
   
     <div class="container-fluid">
       <div class="row">
       
         <div class="inner-wrapper">
         
         
            
            
               <div class="container">
	<div class="row">
    <br>
    <br>

	<form class="form-horizontal" name="finddoctor" action="online-appointment.php" method="get"> 

 <?php
							if(isset($_GET['msg'])){ ?>
								<script>
									$( document ).ready(function(){
										$('.alert-danger').fadeIn('slow', function(){
											$('.alert-danger').delay(6000).fadeOut('slow'); 
										});
									});
								</script>
								<center>
								<div class="alert alert-danger" style="width:50%;">
									<button type="button" class="close" data-dismiss="alert">�</button>
									<strong>Success!</strong> Booked Successfully.
								</div>
								</center>
							<?php
							}
							?>


<fieldset>

<!-- Form Name -->
<legend class="text-center">Find your doctor</legend>

<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Speciality</label>
  <div class="col-md-4">
    
    										 <select class=" form-control" id="specialist" name="specialist" onChange="getDoctor();">
                                            <option value="">Select Specialist</option>
                                            <?php
											require_once("connect.php");
											$query_specialist=mysqli_query($con,"select * from specialist where status='0'");
											if(mysqli_fetch_row($query_specialist)>0){
												$query_specialist=mysqli_query($con,"select * from specialist where status='0'");
												while($row_specialist=mysqli_fetch_array($query_specialist)){
											?>
                                            	<option value="<?php echo $row_specialist['specialist']; ?>"><?php echo $row_specialist['specialist']; ?></option>
                                            <?php
												}
											}
											?>
                                            </select> 
  </div>
</div>


<div class="form-group" id="result">
  <label class="col-md-4 control-label" for="selectbasic">Select Doctor</label>
   <div class="col-lg-4" >
                                           <select class=" form-control" id="doctor" name="doctor">
                                            <option value="">Select Doctor</option>
                                            
                                            </select>
                                        </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select date</label>
  <div class="col-md-4">
     <input id="mdp-demo" class=" form-control" name="date" onChange="return getBook();">
											<script>
                                            $('#mdp-demo').datepicker();
                                            </script> 
                                            <p id="datemsg" style="color:red;"></p>
  </div>
</div>

<!-- Text input-->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Location</label>  
  <div class="col-md-4">
  <input id="textinput" name="textinput" type="text" placeholder="Enter the year of construction of your car" class="form-control input-md" required="">
    
  </div>
</div>-->

<!-- Select Basic -->


<!-- Select Basic -->
<!--<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Model</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">3-series</option>
      <option value="2">5-series</option>
    </select>
  </div>
</div>-->

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Disease</label>
  <div class="col-md-4">
    <input type="text" name="disease" class=" form-control"/>
  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
  	<input type="submit" id="button1id" value="Next" class="btn btn-primary" />
  <!--  <input type="reset" id="button1id" value="Cancel" class="btn btn-inverse" />-->
   
  </div>
</div>
</fieldset>
</form>

	</div>
</div>
              
                 
                 
                 
              
            </div>
         
       </div>
     </div>
   
</div>



 <!--footer-->
                                           
                                           
                                           
<footer id="foot">
   <div class="container-fluid">
       <div class="row">
       
        <div class="footer-top">
          <div class="col-lg-3 col-md-4 col-sm-4">
             <div class="footer-logo">
				<img src="img/footer-logo.png">
			 </div>
             
             <br>

			 <div class="footer-text">
				<p class="text-justify">Sreerudra Ayurveda Hospital Sreerudra hospital
                                        and research centre was established in  2002 in a 
                                        humble way by Dr. K S Vishnu Namboothiri, MD (Ayurveda), PGDYT and MSc Yoga  (Senior Medical Officer, Alappuzha) member  of KUDALMANA  Family. Kudalmana family is one of the respectable families
                                        in the Namboothiri community in Kerala, <a href="ayurveda.php">[�]</a></p>
	         </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-sm-4">
               <h4 style="color: #14D70F;">Services</h4>
               <br>
               <p>Arthritis</p>
               <br>
               <p>Cancer</p>
               <br>
               <p>Diabetes</p>
               <br>
               <p>Skin Complaints</p>
               <br>
               <p>Kidney Disorders</p>
          </div>
          
          <div class="col-lg-3 col-md-4 col-sm-4">
               <h4 style="color: #14D70F;">Explore</h4>
               <br>
               <p><a href="ayurveda.php">AYURVEDA</a></p>
               <br>
               <p><a href="our-team.php">OUR TEAM</a></p>
               <br>
               <p><a href="facilities.php">FACILITIES</a></p>
               <br>
               <p><a href="our-specialities.php">SERVICES</a></p>
               <br>
               <p><a href="contact-us.php">CONTACT US</a></p>
          </div>
          
          
          <div class="col-lg-3 col-md-4 col-sm-4">
          
                <h4 style="color: #14D70F;">Working Hours</h4>
                <br>
                <p>24/7 service</p>
                <br>
                 
                
                 <i class="fa fa-envelope-o" aria-hidden="true" style="float:left; margin-right:10px;"></i><p class="mailer">sreerudraayurvedahospitalalpy@gmail.com</p>
                 <p class="mailer">sreerudraayurvedahospitalalpy@outlook.com</p>
                
                <br>

                  <i class="fa fa-phone" aria-hidden="true" style="float:left; margin-right:10px;"></i><p>+91 477 2266778, +91 9847948218, +91 8848999404</p>
                <br>

                <a href="https://www.facebook.com/sreerudraayurveda/" class="social" target="_blank">
                <i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
                
                <a href="https://twitter.com/sreerudra_ayur" class="social" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;
                
                <a href="https://www.instagram.com/sreerudra_ayurveda/" class="social" target="_blank">
                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                  
               <a href="https://www.tripadvisor.in/MemberProfile-a_uid.C06609EC3F07971DB61F54D003F301C6/" class="social" target="_blank"><img src="img/trip.png"></a>
                
                
          </div>
         </div> 
          
       </div>
   </div>
   
<div class="container-fluid">
       <div class="row"> 
          <div class="footer-bottom">
          
             <div class="col-md-10">
             

                <p style="padding-top: 20px;"> &nbsp; copyright&copy; 2017 sreerudra all rights reserved</p>
             </div>
             
             <div class="col-md-2">
             

                <p style="padding-top: 20px;">powered by sientisolutions &nbsp;</p>
             </div>
             
          </div>
       </div>
</div>
          
</footer>                                           
                                           

<div class="container-fluid">
 <div class="row">
 
  <div class="col-md-12">
	<div class="mapper">
		                
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.4338783961794!2d76.34134951433781!3d9.470937293215096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0884bedf9402bd%3A0x759b1a377a112d72!2sSreerudra+Ayurveda+Multi+Speciality+Hospital!5e0!3m2!1sen!2sin!4v1505128083594" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                       					
	</div>
 </div> 
 
 </div>
</div>                                           
                                           
                                           


                                           <!--smoothpagescroll-->


<script>

$(document).ready(function(){
			// $fn.scrollSpeed(step, speed, easing);
			jQuery.scrollSpeed(100, 600);
});

// Custom scrolling speed with jQuery
// Source: github.com/ByNathan/jQuery.scrollSpeed
// Version: 1.0.2

(function($) {
    
    jQuery.scrollSpeed = function(step, speed, easing) {
        
        var $document = $(document),
            $window = $(window),
            $body = $('html, body'),
            option = easing || 'default',
            root = 0,
            scroll = false,
            scrollY,
            scrollX,
            view;
            
        if (window.navigator.msPointerEnabled)
        
            return false;
            
        $window.on('mousewheel DOMMouseScroll', function(e) {
            
            var deltaY = e.originalEvent.wheelDeltaY,
                detail = e.originalEvent.detail;
                scrollY = $document.height() > $window.height();
                scrollX = $document.width() > $window.width();
                scroll = true;
            
            if (scrollY) {
                
                view = $window.height();
                    
                if (deltaY < 0 || detail > 0)
            
                    root = (root + view) >= $document.height() ? root : root += step;
                
                if (deltaY > 0 || detail < 0)
            
                    root = root <= 0 ? 0 : root -= step;
                
                $body.stop().animate({
            
                    scrollTop: root
                
                }, speed, option, function() {
            
                    scroll = false;
                
                });
            }
            
            if (scrollX) {
                
                view = $window.width();
                    
                if (deltaY < 0 || detail > 0)
            
                    root = (root + view) >= $document.width() ? root : root += step;
                
                if (deltaY > 0 || detail < 0)
            
                    root = root <= 0 ? 0 : root -= step;
                
                $body.stop().animate({
            
                    scrollLeft: root
                
                }, speed, option, function() {
            
                    scroll = false;
                
                });
            }
            
            return false;
            
        }).on('scroll', function() {
            
            if (scrollY && !scroll) root = $window.scrollTop();
            if (scrollX && !scroll) root = $window.scrollLeft();
            
        }).on('resize', function() {
            
            if (scrollY && !scroll) view = $window.height();
            if (scrollX && !scroll) view = $window.width();
            
        });       
    };
    
    jQuery.easing.default = function (x,t,b,c,d) {
    
        return -c * ((t=t/d-1)*t*t*t - 1) + b;
    };
    
})(jQuery);

</script>   
   
   
<script>
   function getDoctor() {
	   var specialist_id=document.getElementById("specialist").value;
	  var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		 document.getElementById("result").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "ajax_doctor.php?specialist_id="+specialist_id, true);
	  xhttp.send();
	}
   </script>

    
<script>
   function getName(id) { 
	   var specialist_id=document.getElementById("specialist").value;
	 
	   var xhttp = new XMLHttpRequest();
	  xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
		 document.getElementById("resultname").innerHTML = this.responseText;
		}
	  };
	  xhttp.open("GET", "ajax_doctorname.php?id="+id+"&& specialist_id="+specialist_id, true);
	  xhttp.send();
	}
   </script>

  <script>
	function getBook(){ 
		var date=document.getElementById("mdp-demo").value; 
		var doctor=document.getElementById("doctor").value;
		if(doctor!='' && date!=''){
			  var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				 document.getElementById("datemsg").innerHTML = this.responseText;
				}
			  };
			  xhttp.open("GET", "existsdate.php?date="+date+"&& doctor="+doctor, true);
			  xhttp.send();
			  
			  /*$.ajax({
								url: "existsdate.php",
								type: "POST",
								dataType:"JSON",
								data: {"date":date,"doctor":doctor},
								success: function (data) {
									alert(data.msg);
									if(data.msg=="success"){
										document.getElementById("datemsg").style.display="none";
										 return false;		
									}else if(data.msg=="close"){
										document.getElementById("datemsg").style.display="block";
										document.getElementById('datemsg').innerHTML = "closed";
										return false;
									}
									else if(data.msg=="leave"){
										document.getElementById("datemsg").style.display="block";
										document.getElementById('datemsg').innerHTML = "leave";
										return false;
									}
									else if(data.msg=="offday"){
										document.getElementById("datemsg").style.display="block";
										document.getElementById('datemsg').innerHTML = "offday";
										return false;
									}else{
										document.getElementById("datemsg").style.display="block";
										document.getElementById('datemsg').innerHTML = "Not Available";
										return false;
									}
								}
						});	*/
						//return false;
		} //return false;
	}
	</script>  

  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59afdb1f4854b82732fee764/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>