<!DOCTYPE html>
<html lang="en">
<head>
 <title>Package Window Inner</title>
 <meta charset="utf-8">
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
.top-links p{
    font-size: 10px;
} 
.inner-wrapper {
    max-width: 85%;
    margin: 0 auto;
    min-height: 450px;
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
.image-wrapper-pw {
    background: url(img/build.jpg) no-repeat center;
    min-height: 690px;
    background-attachment: fixed;
    background-size: cover;
    opacity: 1;
    filter: alpha(opacity=50);
    max-width: 1600px;
    margin-top: -20px;
}
.botm-line-two{
    height: 3px;
    width: 100px;
    background: #14D70F;
    
    border: 0;
    margin: 10px 10px 0px 0;
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeInUp {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(0, 100%, 0);
  transform: translate3d(0, 100%, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  }
  @keyframes fadeInUp {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(0, 100%, 0);
  transform: translate3d(0, 100%, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  } 
  .running{
	color: #14D70F; 
	font-family: 'Russo One', sans-serif;  
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
      <a class="navbar-brand" href="index.html"><img src="img/2017-07-20.png" class="img-responsive"></a>
    </div>
   <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right navbar-alter">
      <li><a href="index.html" class="cmn-t-underline">HOME</a></li>
      <li><a href="ayurveda.html" class="cmn-t-underline">AYURVEDA</a></li>
      <li><a href="our-team.html" class="cmn-t-underline">OUR TEAM</a></li>
      <li><a href="facilities.html" class="cmn-t-underline">FACILITIES</a></li>
      
      <li class="dropdown">
        <a class="dropdown-toggle cmn-t-underline" data-toggle="dropdown" href="#">SERVICES
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        
          <li ><a href="our-specialities.html">Our Specialities</a></li>
          <li><a href="our-ways-of-treatment.html">Our Ways Of Treatment</a></li>
          
        </ul>
      </li>
      
      <li><a href="contact-us.html" class="cmn-t-underline">CONTACT US</a></li>
    </ul>
   </div> 
  </div>
</nav>


 
 
 <?php
				 require_once("connect.php");
				 $package_id=$_GET['package_id'];
				 $query=mysqli_query($con,"select * from package where package_id='".$package_id."'");
				 if($row=mysqli_fetch_array($query)){
				 	
				 ?>
 
<!--image slider-->
<div class="container pos_relative">
    <div class="row">
    	<div class="col-md-12">
        	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="admin/upload/package/<?php echo $row['image']; ?>" alt="First slide">
                       
                    </div>
                </div>
                
                   
            </div>
        </div>
     </div>
</div>
<!--image slider-->


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class=" fadeInUp inner_head">
                <span class="running"><?php echo $row['heading']; ?></span>
                <span href="Lake_View_Cottage.html" class="pull-right golden_color running">Price:&nbsp;<?php echo $row['price']; ?></span>
            </h1>
            <p><?php echo $row['specification']; ?></p>
        </div>
     </div>
</div>


<?php
				 }
				 ?>






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
                                        in the Namboothiri community in Kerala, <a href="ayurveda.html">[…]</a></p>
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
               <p><a href="ayurveda.html">AYURVEDA</a></p>
               <br>
               <p><a href="our-team.html">OUR TEAM</a></p>
               <br>
               <p><a href="facilities.html">FACILITIES</a></p>
               <br>
               <p><a href="our-specialities.html">SERVICES</a></p>
               <br>
               <p><a href="contact-us.html">CONTACT US</a></p>
          </div>
          
          
          <div class="col-lg-3 col-md-4 col-sm-4">
          
                <h4 style="color: #14D70F;">Working Hours</h4>
                <br>
                <p>24/7 service</p>
                <br>
                 
                
                <i class="fa fa-envelope-o" aria-hidden="true" style="float:left; margin-right:10px;"></i><p class="mailer">sreerudraayurvedahospitalalpy@gmail.com</p>
                
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