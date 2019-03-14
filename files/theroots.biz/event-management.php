  





<!DOCTYPE html>

<html lang="en">

<head>

  <title>event-management</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  

  <link rel="stylesheet" type="text/css" href="css/style.css">

  

  

  <link href="https://fonts.googleapis.com/css?family=Jura" rel="stylesheet">

  

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">

  

  

  <!--pop image-->

  <link rel="stylesheet" href="css/viewbox.css">

    

  <link rel="icon" type="image/png" sizes="" href="images/fav.png">

    

 



  

  <style>

  

  .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {

    display: block;

    max-width: 100%;

    height: auto;

}

  .thumbnail a>img, .thumbnail>img {

    margin-right: auto;

    margin-left: auto;

	padding-bottom: 30px;

}  

  .roo-photo{

   font-family: 'Roboto', sans-serif;	

   font-weight:700;

   font-size: 100px;

   color: #343434;

   max-width: 500px;	

}

  .ser{
   font-size: 40px;
}
.carousel-inner img {
      width: 100%;
      
  }
  .navbar-dark .navbar-nav .nav-link {
    color: #FFF !important;
}
.navbar-dark .navbar-nav .nav-link:focus, .navbar-dark .navbar-nav .nav-link:hover {
    color: #F00 !important;
}

.carousel-control-prev-icon {
    
    
    background-color: red;
    border-radius: 50%;
    width: 30px;
    height: 30px;
}
.carousel-control-next-icon{
	background-color: red;
    border-radius: 50%;
    width: 30px;
    height: 30px;
}

/*contact*/

.content-header{
  font-family: 'Roboto', sans-serif;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
  font-family: 'Roboto', sans-serif;
  padding-top: 30px;
  width: 100%;
  
  min-height: 550px;
  background-color: transparent;
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px; */
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;
}


/*button*/

.adj{
   width: 100%;	
   margin: 2%;
   cursor: pointer;
}
@media (min-width: 768px) {
.dropdown .dropdown-menu{
    display: block; 
    opacity:0;
    -webkit-transition: all 250ms ease-in;
    -moz-transition: all 250ms ease-in;
    -ms-transition: all 250ms ease-in;
    -o-transition: all 250ms ease-in;
    transition: all 250ms ease-in;
}
.dropdown:hover .dropdown-menu {
    display: block;
    opacity: 1;
}
}

@media (min-width: 768px){

.navbar-right .dropdown-menu {
    right: -65px !important;
    left: auto;
	margin-top: -17px !important;
}
}

.dropdown-menu{
      background-color: rgba(255, 255, 255, 0) !important;
	  border: 0;
	 
	  
}
.dropdown-toggle::after{
     display: none;	
}
.btn-info-main{
    color: #fff;
    background-color: transparent;
    border-color: transparent;	
}

  </style>

  

  

</head>

<body>





<nav class="navbar navbar-expand-md bg-dark navbar-dark">

<div class="container">

  <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo"></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">

    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">

        <a class="nav-link" href="index.php">Home</a>

      </li>
      
      <li class="dropdown">

        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><button type="button" class="btn btn-info-main">Services</button>

        <!--<span class="caret"></span>--></a>

        <ul class="dropdown-menu">

          <li><a href="corporate-events.html"><button type="button" class="btn btn-info adj">Corporate Events</button></a></li>

          <li><a href="wedding-management.html"><button type="button" class="btn btn-info adj">Wedding Management</button></a></li>

          <!-- <li><a href="#"><button type="button" class="btn btn-info adj">Conference Management</button></a></li>-->

          <li><a href="event-pr-and-media-management.html"><button type="button" class="btn btn-info adj">Event Pr and Media Management</button></a></li>

          <li><a href="themed-birthday-parties.html"><button type="button" class="btn btn-info adj">Themed Birthday Parties</button></a></li>
          
          <!--<li><a href="#"><button type="button" class="btn btn-info adj">Venue Findings</button></a></li>-->
          
          <li><a href="wedding-special-honeymoon-packages.html"><button type="button" class="btn btn-info adj">Wedding Special Honeymoon Packages</button></a></li>

        </ul>

      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="packages.html">Packages</a>
      </li>

      <li class="nav-item">

        <a class="nav-link" href="about.html">About us</a>

      </li>
       <li class="nav-item">

        <a class="nav-link" href="videos.html">Videos</a>

      </li>
      <li class="nav-item">

        <a class="nav-link" href="contact-us.html">Contact us</a>

      </li>    

    </ul>

  </div> 

  </div> 

</nav>





           <!--roots-->

<div class="container">

 <div class="row">

  <div class="col-md-6">

     <h1 class="roo-photo">event management</h1> 

  </div>

  <div class="col-md-6">

     <img src="images/bg4.jpg" class="boxes">

  </div>

 </div>

</div>







<br>

<br>

<div class="container">

 <div class="row"> 
 
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
  
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
    <li data-target="#demo" data-slide-to="7"></li>
    <li data-target="#demo" data-slide-to="8"></li>
    <li data-target="#demo" data-slide-to="9"></li>
   
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
  
    <div class="carousel-item active">
      <img src="images/carousel-events/1.jpg" class="img-responsive" alt="Los Angeles" width="" height="">
    </div>
    <div class="carousel-item">
      <img src="images/carousel-events/2.jpg" alt="roots" width="" height="">
    </div>
    <div class="carousel-item">
      <img src="images/carousel-events/3.jpg" alt="roots" width="" height="">
    </div>
    <div class="carousel-item">
      <img src="images/carousel-events/4.jpg" alt="roots" width="" height="">
    </div>
     <div class="carousel-item">
      <img src="images/carousel-events/5.jpg" alt="roots" width="" height="">
    </div>
     <div class="carousel-item">
      <img src="images/carousel-events/6.jpg" alt="roots" width="" height="">
    </div>
     <div class="carousel-item">
      <img src="images/carousel-events/7.jpg" alt="roots" width="" height="">
    </div>
     <div class="carousel-item">
      <img src="images/carousel-events/8.jpg" alt="roots" width="" height="">
    </div>
    <div class="carousel-item">
      <img src="images/carousel-events/9.jpg" alt="roots" width="" height="">
    </div>
    <div class="carousel-item">
      <img src="images/carousel-events/10.jpg" alt="roots" width="" height="">
    </div>
   
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> 
   
</div>
</div>
 
<br>
<br>


<div class="container">
 <div class="row">
   <h1 class="ser">about roots events</h1> 
 </div>
</div>  
   
     

 <div class="container">

 <div class="row">

      

  <div class="col-md-6"> 

       <img src="images/abou4.jpg" class="img-responsive">

  </div>

  <div class="col-md-6" style="color:#FFFFFF; background-color: #333; padding-top: 10px;">


       <p class="text-justify">Roots event management is another single-minded wing of talented force who have the most brilliant and innovative event management ideas. We impart custom made event plans that fit your budget. <br><br>


Our event management services include event planning, conferences, trade shows, grand openings, audio launches, conventions and other services.	We offer customary event packages that meet every requirements of a typical event. <br><br>


We take care of everything from the heart and soul of your event.  Above all our serene and sincere approach towards the needs of clients makes our presentations most beneficial and fruitful for our clients.<br><br>


Roots event management compiles imagination with experience in creating outstanding live experiences and events. We connect you with your target audience for deeper, stronger relationship and stable results. Audience experience is the core of what we do.<br>

</p>

  </div>

  

 </div>

</div>  
 


<br>
<br>




<!--<div class="container">

 <div class="row">

  <div class="col-md-6">

     <h1 class="ser">services</h1> 

  </div>

 </div>

</div>  

-->  


<!--<div class="container">

 
  <div class="row">

 

   

   

   <div class="col-xs-12 col-sm-12 col-md-6">  

     <div class="bluebutton-alter">

        <h4 class="text-center" style="color:#FFFFFF; padding-top: 65px;">Wedding special 

Honeymoon planning trips</h4>

     </div>

   </div>

 <div class="col-xs-12 col-sm-12 col-md-6">  

     <div class="bluebutton-alter">

        <h4 class="text-center" style="color:#FFFFFF; padding-top: 65px;">Premium cars for weddings</h4>

     </div>

   </div>

      

 </div>

</div>  -->




<br>

<br>


<div id="contact">
  <div class="container">
    <div class="well well-sm">
      <h3><strong>Contact Us</strong></h3>
    </div>
	
	<div class="row">
	  <div class="col-md-7" style="padding-top: 10px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.1876161181167!2d76.3002800140997!3d10.00135607575671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d16d40a6b47%3A0xccfce6f75e5ade52!2sDezirearts+Photography!5e0!3m2!1sen!2sin!4v1453548824223" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4 style="color: #FFF;"><strong></strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="name" id="name" value="" placeholder="Name">
            <p id="uploaderrormsg" style="color:#eb1c22;"></p>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" id="email" value="" placeholder="E-mail">
            <p id="uploaderrormsg1" style="color:#eb1c22;"></p>
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" id="phone" value="" placeholder="Phone">
             <p id="uploaderrormsg2" style="color:#eb1c22;"></p>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message"></textarea>
            <p id="uploaderrormsg4" style="color:#eb1c22;"></p>
          </div>
          <button class="btn btn-default" type="submit" name="button" onClick="return mailSend();">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit      
          </button>
        <p id="emailresult" style="color:#eb1c22;"></p>
        </form>
      </div>
    </div>
  </div>
</div> 
  






<div class="footer">

<br>



<p class="text-center" style="color:#FFFFFF;"><a href="#">facebook</a>&nbsp;&nbsp;<a href="#">youtube</a>&nbsp;&nbsp;<a href="#">instagram</a></p>



 <div class="container-fluid">

   <div class="row">

   

   <div class="col-md-6">

     <h1 class="roo2" style="color:#FFFFFF;">the roots</h1> 

   </div>

   

    <div class="col-md-6 cont">

    

     <div><h4 class="text-center" style="font-size:18px;"> call:  +91 97 4749 4448, 98 4747 4848<br>



       <span style="word-break:break-all">email:  chanchalraj@hotmail.com</span></h4></div> 

      

    </div>

   </div>

  </div>

  



  

  <div class="container-fluid tc">

   <div class="row">

     <div class="col-xs-6 col-sm-6 col-md-6">

     <p style="color:#FFFFFF;">© 2018 all rights reserved to roots.biz</p>

     </div>

       

     <div class="col-xs-6 col-sm-6 col-md-6 text-right">

     <p style="color:#FFFFFF;">powered by <a href="http://sientisolutions.com/" target="_blank">sientisolutions</a></p>

     </div>

   </div>

  </div>

  

</div>






<!--pop-->



<script src="js/jquery.viewbox.min.js"></script>

	<script>

		$(function(){

			

			$('.thumbnail').viewbox();

			$('.thumbnail-2').viewbox();



			(function(){

				var vb = $('.popup-link').viewbox();

				$('.popup-open-button').click(function(){

					vb.trigger('viewbox.open');

				});

				$('.close-button').click(function(){

					vb.trigger('viewbox.close');

				});

			})();

			

		});

</script>

    

<!--pop--> 





</body>

</html>

