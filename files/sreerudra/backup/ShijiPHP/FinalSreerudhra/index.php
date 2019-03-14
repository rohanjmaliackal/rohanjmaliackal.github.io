<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Sreerudra</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <script src="js/jquery-3.2.1.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  
  
  <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
  
  <!-- Web Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <link rel="icon" type="image/png" sizes="" href="img/fav.png">
  
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/waypoints.css">
  
  <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
  <script src="js/waypoints.js" type="text/javascript"></script>
  
  
<style>
.carousel {
    position: relative;
    margin-top: -20px !important;
}
.top-links p{
    font-size: 10px;
}
.services-rectangle  h4{
	
	text-align: center;
    	
}
.hear{
   text-align: center;
   padding-top: 40px;
}
.hear h4{
	color: #FFF;
}
.but{
   text-align: center;	
   padding-top: 45px;
   
}
a:hover, a:focus {
    color: #059610;
    text-decoration: none;
}
a {
   color: #ffffff;	
}
.our-ser{
   
}
.scrollup{
font-size: 40px;
color: #059610;
/*background-color: #2196F3;
border: 1px solid #A2A2A2;*/
text-align: center;
padding: 6px;
width: 30px;
height: 30px;
position: fixed;
bottom: 65px;
right:30px;
cursor: pointer;
}

hr.botm-line {
    height: 3px;
    width: 100px;
    background: #14D70F;
    /* position: relative; */
    border: 0;
    margin: 5px 20px 0px 0;
}
.botm-line-two{
    height: 3px;
    width: 100px;
    background: #14D70F;
    
    border: 0;
    margin: 0px 10px 0px 0;
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

                                                  <!--carousel-->


<div class="container-fluid">
  <div class="row">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/office.jpg" alt="" style="width:100%;">
      </div>
      <div class="item">
        <img src="img/1.jpg" alt="" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/2.jpg" alt="" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/3.jpg" alt="" style="width:100%;">
      </div>
      
       
    </div>
    
    

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true" style="padding-top: 150%;"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true" style="padding-top: 150%;"></i>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div> 





                                        <!--button-section-->

<div class="btn-outer-wrapper">

<div class="container-fluid">
 <div class="row">
  <div class="fx">
 
   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <a href="find-a-doctor.php"><button class="button button2"><i class="fa fa-user-md fa-lg" aria-hidden="true" style="float:left; padding-top:3px;"></i>FIND A DOCTOR</button></a>
   </div>
   <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <a href="online-appointment.php"><button class="button button2"><i class="fa fa-file-text fa-lg" aria-hidden="true" style="float:left; padding-top:3px;"></i>ONLINE APPOINTMENT</button></a>
   </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <a href="package-window.php"><button class="button button2"><i class="fa fa-list-alt fa-lg" aria-hidden="true" style="float:left; padding-top:3px;"></i>PACKAGE WINDOW</button></a>
   </div>
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
     <a href="online-payment.php"><button class="button button2"><i class="fa fa-credit-card fa-lg" aria-hidden="true" style="float:left; padding-top:3px;"></i>ONLINE PAYMENT</button></a>
   </div>
   
   </div>
 </div>
</div>

</div>


                                     <!--our-services-section-->
                                     
                                     
<div class="container-fluid">
 <div class="row">
 
   <div class="image-wrapper">
   
     <div class="container-fluid">
       <div class="row">
       
         <div class="inner-wrapper">
            <div class="our-ser">
              <h3>OUR SERVICES</h3>
              
              <center>
                 <hr class="botm-line">
              </center>
              
              <h2>WHAT WE DO</h2>
            </div>
            
              <div class="container">
                 <div class="row one">
                 
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                       <div class="services-rectangle-one">
                           
                          <div class="hear">
                       <i class="fa fa-medkit fa-2x" style="color:#FFFFFF; aria-hidden="true"></i>
                        <h4>Arthritis</h4>
                          </div>
                             
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                       <div class="services-rectangle-two">
                         <div class="hear">
                       <i class="fa fa-medkit fa-2x" style="color:#FFFFFF; aria-hidden="true"></i>
                       <h4>Cancer</h4>
                         </div>
                       </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                       <div class="services-rectangle-three">
                          <div class="hear">
                       <i class="fa fa-medkit fa-2x" style="color:#FFFFFF; aria-hidden="true"></i>
                       <h4>Diabetes</h4>
                          </div>
                       </div>
                    </div>
                   <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                       <div class="services-rectangle">
                       </div>
                    </div>-->
                    
                 </div>
                 
                 <div class="row one">
                 
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                       <div class="services-rectangle-four">
                           <div class="hear">
                       <i class="fa fa-stethoscope fa-2x" style="color:#FFFFFF; aria-hidden="true"></i>
                       <h4>Skin complaints</h4>
                           </div>
                       </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                       <div class="services-rectangle-five">
                           <div class="hear">
                       <i class="fa fa-stethoscope fa-2x" style="color:#FFFFFF; aria-hidden="true"></i>
                       <h4>Kidney disorders</h4>
                           </div> 
                       </div>
                    </div>
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                       <div class="services-rectangle-six">
                          <div class="hear">
                       <i class="fa fa-stethoscope fa-2x" style="color:#FFFFFF; aria-hidden="true"></i>
                       <h4>Excess weight</h4>
                          </div>
                       </div>
                    </div>
                    <!--<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                       <div class="services-rectangle">
                       </div>
                    </div>-->
                    
                 </div>
                 
              </div>
                   <div class="but">
     <button class="button button2"><a href="our-specialities.php" style="font-family: 'lato', sans-serif; font-size:18px;"> Read More</a></button>
                   </div>
            </div>
         
       </div>
     </div>
   
   </div>


 </div>
</div>


                                                <!--section-cards-->


<!--start waypointdelayed animation-->
<section class="staggered-animation-container">



 
<div class="card-wrapper">
  
             <div class="container-fluid">
                 <div class="row">
                 
                 
<section class="os-animation" data-os-animation="fadeIn" data-os-animation-delay=".2s">

                 
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

                      <div class="card">
                        <a href="our-specialities.php">
                          <img src="img/fitoesterol.jpg" class="img-rounded card-image" alt="Cinque Terre" width="" height="">
                        </a>  
                     <div class="algn">     
                          <h2 class="text-center" style="font-size:20px; margin-bottom: 20px; color:#666; font-family: 'Russo One', sans-serif;">ABOUT US</h2>
                          <p class="text-center text-justify" style="font-size:13px;">Sreerudra Ayurveda Hospital Sreerudra
hospital and research centre was established in 2002 in a humble way by  Dr. K 
S Vishnu Namboothiri, MD ( Ayurveda ), 
PGDYT and  MSc  Yoga  (Senior  Medical 
Officer, Alappuzha ) member of    KUDAL
MANA Family. Kudlamana  family is one
 of the respectable families in the Namboothiri community in  Kerala ,</p>
                    </div>

                       
                       </div>

                       </div>
                       
                     
                    
                    
                    
                        
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                       <div class="card">
                        <a href="ayurveda.php">
                          <img src="img/capsule.jpg" class="img-rounded card-image" alt="Cinque Terre" width="" height="">
                        </a>  
                          
                                 
                     <div class="algn">     
                          <h2 class="text-center" style="font-size:20px; margin-bottom: 20px; color:#666; font-family: 'Russo One', sans-serif;">AYURVEDA</h2>
                              
                          <p class="text-center text-justify" style="font-size:13px;">The science of life as the word meaning denotes is not just a traditional system of healing instead it’s a definite way to wellbeing. The science is divided into SWASATHAVRITHA and ATHURAVRITHA. Swasathavritha deals with means and methods to healthy longevity and Athuravritha deals with diseases and its holistic management. </p>
                    </div>
                          
                       
                       </div>
                    </div>
                    
                    
                    
                    
                         
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                       <div class="card">
                         <a href="facilities.php">
                           <img src="img/thulasi.jpg" class="img-rounded card-image" alt="Cinque Terre" width="" height="">
                         </a>  
                                  
                     <div class="algn">     
                          <h2 class="text-center" style="font-size:20px; margin-bottom: 20px; color:#666; font-family: 'Russo One', sans-serif;">FACILITIES</h2>
                          <p class="text-center text-justify" style="font-size:13px;">The hospital boasts of state of the art facility with a combination of modern and traditional treatment facilities available to make the treatments effective. Its located in Alleppey, which is known as the Venice of the east. One of the major tourist attractions of Kerala, India The surroundings are quite, </p>
                    </div>
                       
                       </div>
                    </div>
                    
                    
                    
                  
                        
                    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                   
                       <div class="card">
                         <a href="our-team.php">
                          <img src="img/capsules.jpg" class="img-rounded card-image" alt="Cinque Terre" width="" height="">
                         </a> 
                                 
                     <div class="algn">     
                          <h2 class="text-center" style="font-size:20px; margin-bottom: 20px; color:#666; font-family: 'Russo One', sans-serif;">OUR TEAM</h2>
                          <p class="text-center text-justify" style="font-size:13px;">Dr. K S Vishnu Namboothiri MD (Ayurveda), PGDYT and MSc Yoga – Head of  Clinical Advisory Board N N Mayalekshmi , MSc Zoology – Managing Director Dr. Rabith k Rajan BAMS, PGDYT  –  Chief physician Dr. Asiwarya, BAMS Dr. Arya, BAMS</p>
                    </div>
                       
                       </div>

                    </div>
                    
</section>                    
                    
                    
                    
                        
                    
                </div>
             </div> 
                
</div> 
 
     
</section>
<!--end waypointdelayed animation-->

 
                                     <!--section-two-div-->
                                     

<!--start waypointdelayed animation-->
<section class="staggered-animation-container"> 

                                      

<div class="two-div-wrapper">

  <div class="container-fluid">
       <div class="row">
           <div class="col-md-6">
    <section class="os-animation" data-os-animation="fadeInLeftBig" data-os-animation-delay=".2s">
              <div class="left-image-wrapper">
                <img class="img-responsive" src="img/tools.png">
              </div>
    </section>          
           </div>
       
           <div class="col-md-6">
            
              <div class="right-image-wrapper">
                
                  <div class="ayurveda-text text-center">
                    <h2>Ayurveda</h2>
                    
                    
                              <center>
                 <hr class="botm-line-two">
                              </center>
                              
                              
                    <br>

                    <p class="text-justify">The science of life as the word meaning denotes is not just a traditional system
                       of healing instead it’s a definite way to wellbeing. The science is divided into SWASATHAVRITHAand ATHURAVRITHA. Swasathavritha deals  with means and methods 
                       to healthy longevity and Athuravritha deals with diseases and its holistic man
                       agement. <a href="ayurveda.php">[…]</a></p>
                  </div>  
                
              </div>
               
           </div>
       </div>
  </div>     

</div>



</section>
<!--end waypointdelayed animation-->



                                     <!--vedapuridiv-->
                                     
<div class="vedapuri">
<div class="container-fluid">
       <div class="row">
       
         
            <div class="col-md-6">
            
                
          
               
                       
                   <div class="vedapuri-text">
                   
                             <h1>AN ISO 9001 2015 CERTIFIED HOSPITAL</h1>
                    </div>       
                          
                       
               </div>
               
                <div class="col-md-6">
               
                       <div class="vedapuri-image">
                           <img class="img-responsive" src="img/crt.jpg">
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
                                        in the Namboothiri community in Kerala, <a href="ayurveda.php">[…]</a></p>
	         </div>
          </div>
          
          <div class="col-lg-3 col-md-4 col-sm-4">
               <h4 style="color: #14D70F; font-family:'Russo One', sans-serif;">Services</h4>
               <br>
               <p>Arthritis</p>
               <br>
               <p>Cancer</p>
               <br>
               <p>Diabetes</p>
               <br>
               <p>Skin complaints</p>
               <br>
               <p>Kidney disorders</p>
          </div>
          
          <div class="col-lg-3 col-md-4 col-sm-4">
               <h4 style="color: #14D70F; font-family: 'Russo One', sans-serif;">Explore</h4>
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
          
                <h4 style="color: #14D70F; font-family: 'Russo One', sans-serif;">Working Hours</h4>
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







<div class="scrollup" href="#"><i class="fa fa-angle-double-up" aria-hidden="true"></i></div>
<script>
    // scrolltop
$('.scrollup').click(function (){
$("html,body").animate({
scrollTop: 0
}, 1000);
return false;
});
</script>
</div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".mouse").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});





//bottom to top

// fadeIn fadeOut
$(window).scroll(function () {
if ($(this).scrollTop() > 400) {
$('.scrollup').fadeIn();
} else {
$('.scrollup').fadeOut();
}
});


</script>

                                          
                                           
                                           


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
