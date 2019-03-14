<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMP TRADING CORPORATION</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/default.css" rel="stylesheet">
    
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animated.css">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
    
   

<!----------------PAGE LOAD EFFECT----------------->

<style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
	position: fixed;
	left: 0px;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 9999;
	background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
}
#first-slider .carousel-indicators {
    bottom: 0;
    display: none;
}
#first-slider .slide1 {
    background-image:url(img/banner_inner.png) !important;
    background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide1 h3, #first-slider .slide2 h3, #first-slider .slide3 h3, #first-slider .slide4 h3 {
    color: #fff;
    font-size: 44px;
    text-transform: uppercase;
    text-align: center;
    font-weight: 700;
    font-family: 'Bungee', cursive;
    border-top: 1px solid #fff;
    border-bottom: 1px solid #fff;
    max-width: 87%;
    margin: 15% auto 0px auto;
}
#first-slider .carousel .item {
    min-height: 341px;
    height: 100%;
    width: 100%;
}
</style>


<script src="js/jquery.min.js"></script>
<script src="js/modernizr.js"></script>
 <script >
//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>

<!-----------------PAGE LOAD EFFECT----------------->



</head>

<body id="page-top" class="index">

<div class="se-pre-con"></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand " href="#page-top"><img src="img/logo.png" class="logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                                              
                    <li class="page-scroll">
                        <a href="index.html" >HOME</a>
                    </li>
                    <li class="page-scroll">
                        <a href="about.html" >ABOUT US</a>
                    </li>
                    <li class="page-scroll">
                        <a href="product.html">PRODUCTS</a>
                    </li>
                     
                     <li class="page-scroll">
                        <a href="contact.php" class="on">CONTACT US</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!-- banner -->
   
        <div class="container"> 
            <div class="row">
                <div class="col-lg-12">
                  

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container">
                   <div class="col-md-12 ">
                        <h3 data-animation="animated fadeIn">CONTACT US</h3>
                       
                     </div>
                </div></div>
             </div> 
            
    
        </div>
       
    </div>
</div>



                </div>
            </div>
        </div>
    <!-- banner -->
    
    
    
     <!-- content -->
     <div class="container m_top_40">
    
             
             <div class="col-md-12 col-sm-12 col-xs-12 bg_blue">
             <h1>CONTACT US</h1>

             <div class="row">
             <div class="col-md-7">

             <div class="row">
<form name="smp" method="post"  action="contactaction.php" onsubmit="return validateForm()">
               <div class="col-md-6">
               <p class="fnt_cnt">Your Name <span>*</span></p>
               <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" 
                 aria-required="true">
                </div>

                <div class="col-md-6">
                <p class="fnt_cnt">Email Id <span>*</span></p>
               <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="email" id="email" 
                 aria-required="true">
                </div>
                
                 <div class="col-md-12">
                <p class="fnt_cnt">Phone <span>*</span></p>
               <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="phone" id="phone"
                 aria-required="true">
                </div>

                <div class="col-md-12">
                <p class="fnt_cnt">Subject</p>
               <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="subject" id="subject" 
                 aria-required="true">
                </div>

                 <div class="col-md-12">
                <p class="fnt_cnt">Message</p>
              <textarea maxlength="3000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"  aria-required="true" style="height: 120px;"></textarea>
                <p><center style="color:#008fd5;font-size:14px;" id="mailmsg"><?php  if(isset($_GET['msg'])){   echo "Message Send Successfully ";   }   ?> <?php  if(isset($_GET['error'])){   echo "Message Send Failed ";   }   ?> </p>
               <!--<a href="" class="send_message">Send Message</a>-->
				<input type="submit" class="send_message" value="SEND MESSAGE" id="submit"/>
                 <br clear="all" />


                </div>

            </form>
            
             </div>

             </div>

             <div class="col-md-5">
               <p class="head_product head_product_contact">THE OFFICE</p>
               <table>
                 <tr>
                   <td valign="top" width="20"><img src="img/address.png"></td>
                    <td>
                    <p class="cnt_para">
                    2/111M,JK arcade,  <br/>
                    Opp.State Warehouse Error north p.o   <br/>
                    Cochin-682306
                    </p>
                    </td>
                 </tr>


                 <tr>
                   <td valign="top" width="20"><img src="img/phone1.png"></td>
                    <td>
                    <p class="cnt_para">
                   +91 8593811118<br/>
                   +91 9037778444
                    </p>
                    </td>
                 </tr>

                  <tr>
                   <td valign="top" width="20"><img src="img/email1.png"></td>
                    <td>
                    <a href="" class="cnt_link cnt_para">smptradingcorp@gmail.com</a><br/>
                    <a href="" class="cnt_link cnt_para">info@smptradingcorp.com</a>
                    </td>
                 </tr>


               </table>

              <p class="head_product head_product_contact">BUSINESS HOURS</p>
                <table>
                 <tr>
                   <td valign="top" width="20"><img src="img/time1.png"></td>
                    <td>
                    <p class="cnt_para">
                    Mon to Sat : 9 AM to 6.30PM<br/>
                    Sunday : off
                    </p>
                    </td>
                 </tr>


               </table>

                <p class="head_product head_product_contact">FOLLOW US</p>
                <table>
                 <tr>
                  <td><a href=""><img src="img/f.png"></a></td>
                  <td><a href=""><img src="img/t.png"></a></td>
                  <td><a href=""><img src="img/y.png"></a></td>
                  <td><a href=""><img src="img/g.png"></a></td>
                 </tr>


               </table>
               <br />

               


             </div>
             </div>
               
             </div>
             
             
             <div class="row">

              <div class="col-md-12">
              
              

<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6v5-2uaq_wusHDktM9ILcqIrlPtnZgEk&sensor=false">
</script>
<script type="text/javascript">
		
		var map;
        function initialize() {
            var myLatlng = new google.maps.LatLng(9.983667,76.330149);
			var myOptions = {
                zoom:16,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            map = new google.maps.Map(document.getElementById("gmap"), myOptions);
			// marker refers to a global variable
            marker = new google.maps.Marker({
                position: myLatlng,
                map: map
            });
			
			
			infowindow = new google.maps.InfoWindow({content:'<strong>SMP Trading Corporation</strong><br>Eroor North,<br>Ernakulam<br>Kerala 682306'});
		google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);
			/* marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
        draggable: true,
		animation: google.maps.Animation.DROP
            });*/
            google.maps.event.addListener(map, "click", function(event) {
                var clickLat = event.latLng.lat();
                var clickLon = event.latLng.lng();
				/*var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(clickLat,clickLon),
                        map: map,
        				draggable: false,
						animation: google.maps.Animation.DROP
                });*/
			});
    	}   

    	window.onload = function () { initialize() };
</script>

     <style>
 		div#gmap {
        	/*//width: 100%;*/
        	height: 372px;
		}
    </style>
 
    

	<div id="gmap"></div>
              
              
                </div>
                </div>
      
     </div>
     <!-- content -->
    
    
    

    
    
    
    <!--slider-->
    
    
      <div id="demo" style="min-height: 183px;">
        <div class="container">
          <div class="row">
            <div class="span12">

              <div id="owl-demo" class="owl-carousel">
                  
                <div class="item">
                <img src="img/products/ser1.jpg" width="100%"  />
                <h1 class="head_slide">PARTICLE BOARD</h1>
                </div>
                
                <div class="item">
                <img src="img/products/ser2.jpg" width="100%"  />
                <h1 class="head_slide">PLYWOOD</h1>
                </div>
                
                
                <div class="item">
                <img src="img/products/ser3.jpg" width="100%"  />
                <h1 class="head_slide">MDF</h1>
                </div>
                
                
                <div class="item">
                <img src="img/products/ser4.jpg" width="100%"  />
                <h1 class="head_slide">VENEER</h1>
                </div>
                
                
                <div class="item">
                <img src="img/products/ser5.jpg" width="100%"  />
                <h1 class="head_slide">DOORS</h1>
                </div>
                
                
                <div class="item">
                <img src="img/products/ser6.jpg" width="100%" />
                <h1 class="head_slide">MULTI WOOD</h1>
                </div>
                
                <div class="item">
                <img src="img/products/ser7.jpg" width="100%"  />
                <h1 class="head_slide">HDF</h1>
                </div>
                
                
                <div class="item">
                <img src="img/products/ser8.jpg" width="100%"  />
                <h1 class="head_slide">MICA</h1>
                </div>
                
                
              </div>
              

            </div>
          </div>
        </div>

    </div>
</div>

    <br><br>



     <!--slider-->

<div class="container-fluid ftr_1">
     <div class="container">
         <div class="row">
         
         <div class="col-md-3">
         <img src="img/location.png" class="ftr_img" />
         <h5 class="head3">Address</h5>
            <p class="text-center ftr_para">2/111M,JK arcade,  <br>
            Opp.State Warehouse Error north p.o<br>
            Cochin-682306</p>
         </div>
         
         
         <div class="col-md-3">
         <img src="img/phone.png" class="ftr_img" />
         <h5 class="head3">phone</h5>
            <p class="text-center ftr_para">
              +91 8593811118<br>
              +91 9037778444</p>
         </div>
         
         
         
          <div class="col-md-3">
         <img src="img/email.png" class="ftr_img" />
         <h5 class="head3">email</h5>
            <a href="" class="ftr_link text-center">smptradingcorp@gmail.com</a>
            <a href="" class="ftr_link text-center">info@smptradingcorp.com</a>
         </div>
         
         
          <div class="col-md-3">
         <img src="img/time.png" class="ftr_img" />
         <h5 class="head3">Working Hours</h5>
            <p class="text-center ftr_para">
            Mon to Sat : 9 AM to 6.30PM<br>
            Sunday : off
             </p>
         </div>
         
         
         </div>
     </div>
</div>
  
<div class="container-fluid ftr_2">
     <div class="container">
     
         <div class="col-md-6">
         <p class="cpy">Copyright © 2017 SMP TRADING CORPORATION PVT.LTD.</p>
         </div>
         
         <div class="col-md-6">
         <p class="pwd">Powered by <a href="http://www.sientisolutions.com/" target="_blank">sienti solutions pvt ltd</a></p>
         </div>
         
     </div>
</div>

    

   
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>



    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>



    <!--slider-->

 
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="owl-carousel/owl.theme.css" rel="stylesheet">
    <script src="owl-carousel/owl.carousel.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>


 


    <script>
$(document).ready(function() {
 
  var time = 7; // time in seconds
 
  var $progressBar,
      $bar, 
      $elem, 
      isPause, 
      tick,
      percentTime;
 
    //Init the carousel
    $("#owl-demo").owlCarousel({
      slideSpeed : 500,
      paginationSpeed : 500,
	  navigation : true, // Show next and prev buttons
      afterInit : progressBar,
	  items:4,
	  autoplayTimeout:1000,
      autoplayHoverPause:true,
      afterMove : moved,
      startDragging : pauseOnDragging
    });
 
    //Init progressBar where elem is $("#owl-demo")
    function progressBar(elem){
      $elem = elem;
      //build progress bar elements
      buildProgressBar();
      //start counting
      start();
    }
 
    //create div#progressBar and div#bar then prepend to $("#owl-demo")
    function buildProgressBar(){
      $progressBar = $("<div>",{
        id:"progressBar"
      });
      $bar = $("<div>",{
        id:"bar"
      });
      $progressBar.append($bar).prependTo($elem);
    }
 
    function start() {
      //reset timer
      percentTime = 0;
      isPause = false;
      //run interval every 0.01 second
      tick = setInterval(interval, 10);
    };
 
    function interval() {
      if(isPause === false){
        percentTime += 1 / time;
        $bar.css({
           width: percentTime+"%"
         });
        //if percentTime is equal or greater than 100
        if(percentTime >= 100){
          //slide to next item 
          $elem.trigger('owl.next')
        }
      }
    }
 
    //pause while dragging 
    function pauseOnDragging(){
      isPause = true;
    }
 
    //moved callback
    function moved(){
      //clear interval
      clearTimeout(tick);
      //start again
      start();
    }
 
    //uncomment this to make pause on mouseover 
    // $elem.on('mouseover',function(){
    //   isPause = true;
    // })
    // $elem.on('mouseout',function(){
    //   isPause = false;
    // })
 
});
	
    </script>
    
    

<!--slider-->

<!--.......................... email send validation..................-->


 <script src="js/valid.js" type="text/javascript"></script>
   
  <!--.......................... email send validation..................-->  

</body>

</html>
