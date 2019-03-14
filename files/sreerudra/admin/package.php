<!DOCTYPE html>
<head>
<title>Sreerudra Ayurveda Hospital</title>
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>


<!--start multiple image upload-->
<link href="upimg/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="upimg/jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#images').on('change',function(){
		$('#multiple_upload_form').ajaxForm({
			target:'#images_preview',
			beforeSubmit:function(e){
				
				$('.uploading').show();
			},
			success:function(e){
				$('.uploading').hide();
			},
			error:function(e){
			}
		}).submit();
	});
});
$(document).ready(function(){
	$('#imgupload').on('click',function(){
		document.getElementById("imgval").value='1';
		
	});
});
</script>
<!--end multiple image upload-->

<style>
 .fileUpload {
		position: relative;
		overflow: hidden;
		color: #333;
    background-color: #ffffff;
    border-color: #2e6da4;
	}
	.fileUpload input.upload {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 20px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
	}
	.image-preview-input {
		position: relative;
		overflow: hidden;
		margin: 0px;    
		color: #fff;
		background-color: #134a39;
		border-color: #ccc;    
	}
	.image-preview-input input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 20px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
	}
	.image-preview-input-title {
		margin-left:2px;
	}
	.fstElement { font-size: 10px; }
	.fstToggleBtn { min-width: 16.5em; }
	.submitBtn { display: none; }
	.fstMultipleMode { display: block; }
	.fstMultipleMode .fstControls { width: 100%; }
	.fileUpload {
		position: relative;
		overflow: hidden;
		margin: 10px;
	}
	.fileUpload input.upload {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 20px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
	}
	.image-preview-clear:hover{
		background-color: #134a39;
		border-color: #fff;
	}
</style>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
   
   
   <a href="home.php" class="logo">
        <img src="images/logo.png" style="width:80%;"/>
    </a>
    
    
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li id="header_notification_bar" class="dropdown">
            <a href="logout.php">
				Logout
            </a>
           
        </li>
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                
                <li style="margin-top: 50px;">
                    <a href="specialist.php">
                         <i class="fa fa-doctor"></i>
                        <span>Add Department</span>
                    </a>
                </li>
                <li class="sub-menu" >
                    <a href="javascript:;" class="active">
                        <i class="fa fa-book"></i>
                        <span>Packages</span>
                    </a>
                    <ul class="sub">
						<li><a href="package.php" class="active">Add Package</a></li>
						<li><a href="view-package.php">View Package</a></li>
                    </ul>
                </li>
                <li>
                    <a href="doctor.php">
                         <i class="fa fa-doctor"></i>
                        <span>Add Doctor </span>
                    </a>
                </li>
                 <li>
                    <a href="view-doctor.php">
                        <i class="fa fa-th"></i>
                        <span>View Doctor </span>
                    </a>
                </li>
                <li>
                    <a href="leave.php">
                        <i class="fa fa-envelope"></i>
                        <span>Doctor On Leave</span>
                    </a>
                </li>
                  <li>
                    <a href="availabile.php">
                         <i class="fa fa-list-alt"></i>
                        <span>Doctor Unavailability</span>
                    </a>
                </li>
                  <li>
                    <a href="view-booking.php">
                         <i class="fa fa-stack-exchange"></i>
                        <span>View Booking</span>
                    </a>
                </li>
                 <li>
                    <a href="view-refund.php">
                         <i class="fa fa-stack-exchange"></i>
                        <span>Refund</span>
                    </a>
                </li>
                  <li>
                    <a href="tocken.php">
                         <i class="fa fa-cloud-download"></i>
                        <span>Tocken Download</span>
                    </a>
                </li>
                 <li>
                    <a href="search.php">
                         <i class="fa fa-cloud-download"></i>
                        <span>Search Details</span>
                    </a>
                </li>
               
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
	 		<div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Packages
                            
                        </header>
                        <div class="panel-body">
                            <div class="form">
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
									<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Success!</strong> Package Saved Successfully.
								</div>
								</center>
							<?php
							}
							?>
                             <?php
							if(isset($_GET['image'])){ ?>
								<script>
									$( document ).ready(function(){
										$('.alert-danger').fadeIn('slow', function(){
											$('.alert-danger').delay(6000).fadeOut('slow'); 
										});
									});
								</script>
								<center>
								<div class="alert alert-danger" style="width:50%;">
									<button type="button" class="close" data-dismiss="alert">×</button>
                                                    <strong><?php echo $_GET['image']; echo "&nbsp;"; ?> file not uploaded.</strong> Upload PDF,EXCEl,DOCS,RTF OR TXT format Document.
								</div>
								</center>
							<?php
							}
							?>

                <form class="cmxform form-horizontal" action="package-action.php" method="post" enctype="multipart/form-data" name="multiple_upload_form" id="multiple_upload_form">
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Package Name</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="heading" name="heading" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Price</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="price" name="price" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="username" class="control-label col-lg-3">Specifications</label>
                                        <div class="col-lg-6">
                                            <div id="sample">
											  <script type="text/javascript" src="js/nicEdit-latest.js"></script> <script type="text/javascript">
                                            //<![CDATA[
                                                    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
                                              //]]>
                                              </script>
                                             
                                              <textarea name="specification" cols="40">
                                            </textarea><br />
                                             
                                             
                                            </div>
                                           <!-- <input class="form-control " id="specification" name="specification" type="text">-->
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                     	<label for="password" class="control-label col-lg-3">Image</label>
                                         <div class="col-lg-6">
                                             <input type="hidden" name="image_form_submit" value="1"/>
                                              <input type="text" name="imgval" id="imgval" value="" hidden="true"/>
                                               <div id="filediv">
                                                    <div class="input-group image-preview">
                                                         <input type="text" class="image-preview-filename form-control">
                                                         <span class="input-group-btn">
                                                               <button type="button" class="btn btn-default image-preview-clear" style="display:none;padding: 6px 10px;">
                                                                     &#10060;
                                                               </button>
                                                               <div class="btn btn-default image-preview-input" style="padding: 6px 10px;">
                                                                   <span class="image-preview-input-title">Upload Photo</span>
                                                                   <input type="file"  name="images"  id="images" class="form-control br-radius-zero upload"/> 
                                                               </div>
                                                          </span>
                                                      </div>
                                               </div>
                                               <div class="uploading none">
                                                <label>&nbsp;</label>
                                                 <img src="upimg/uploading.gif"/>
                                                </div>
                                                <div class="gallery" id="images_preview"></div>
                                         </div>
                                    </div>
                                   
                                    <div class="form-group">
                                    <div class="col-lg-offset-3 col-lg-6">
                                      <input type="submit" id="imgupload" class="btn btn-primary upload-result" value="Save" name="submit" style="width:25%;float:left!important;" >


                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
		</div>
	</section>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p style="margin-left:20%;">Designed by <a href="https://sientisolutions.com">Sienti Solutions</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	

<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-69265879-1', 'auto');
      ga('send', 'pageview');

</script>
<script>
	$(document).on('click', '#close-preview', function(){ 
    	$('.image-preview').popover('hide');
	});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");

    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Upload Image"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Upload Image");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
        }        
        reader.readAsDataURL(file);
    });  
});
</script>
</body>
</html>
