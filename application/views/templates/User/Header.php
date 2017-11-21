<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Travel Sarana | Home :: w3layouts</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url();?>assets/css/style1.css" rel="stylesheet" type="text/css" media="all" />	
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mr Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='<?php echo base_url();?>assets///fonts.googleapis.com/css?family=Hind:400,300' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url();?>assets///fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!--google fonts-->
<!-- animated-css -->
		<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
<!-- animated-css -->
<script src="<?php echo base_url();?>assets/js/modernizr.js"></script>
<script>
    $(document).ready(function(){
        if (Modernizr.touch) {
            // show the close overlvbaray button
            $(".close-overlay").removeClass("hidden");
            // handle the adding of hover class when clicked
            $(".branch-gd").click(function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            // handle the closing of the overlay
            $(".close-overlay").click(function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".branch-gd").hasClass("hover")) {
                    $(this).closest(".branch-gd").removeClass("hover");
                }
            });
        } else {
            // handle the mouseenter functionality
            $(".branch-gd").mouseenter(function(){
                $(this).addClass("hover");
            })
            // handle the mouseleave functionality
            .mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
    });
</script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>


</head>
<body>
<!--header-top start here-->
<div class="top-header">
	<div class="container">
		<div class="top-header-main">
			<div class="col-md-4 top-social wow bounceInLeft" data-wow-delay="0.3s">
			    <ul>
			    	<li><h5>Follow Us :</h5></li>
			    	<li><a href="#"><span class="fb"> </span></a></li>
			    	<li><a href="#"><span class="in"> </span></a></li>
			    	
			    </ul>
			</div>
			<div class="col-md-8 header-address wow bounceInRight" data-wow-delay="0.3s">
				<ul>
					<li><span class="phone"> </span> <h6><h6>082385040007  082383333315</h6></li>
					<li><a href="<?php echo base_url()."index.php/Welcome/login_memberr";?>" data-hover="Login">Login</a></li>
				</ul>
			</div>
		  <div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header-top end here-->
<!--header start here-->
	<!-- NAVBAR
		================================================== -->
<div class="header">
	<div class="fixed-header">	

		    <div class="navbar-wrapper">
		      <div class="container">
		        <nav class="navbar navbar-inverse navbar-static-top">
		             <div class="navbar-header">
			              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			              </button>
			           
			          </div>
		            <div id="navbar" class="navbar-collapse collapse">
		            <nav class="cl-effect-16" id="cl-effect-16">
		              <ul class="nav navbar-nav">
		               <li><a class="active" href="<?php echo base_url()."Index.php/Welcome/index";?>" data-hover="Home">Home</a></li>
		                <li><a href="<?php echo base_url()."Index.php/Welcome/About";?>" data-hover="About">About</a></li>
						
						<li><a href="<?php echo base_url()."Index.php/Welcome/Contact";?>" data-hover="Contact">Contact</a></li>
						
						
						<li><a href="<?php echo base_url()."Index.php/Welcome/Pemesanan";?>" data-hover="Pemesanan">Pemesanan</a></li>							
		              </ul>
		            </nav>

		            </div>
		            <div class="clearfix"> </div>
		             </nav>
		          </div>
		           <div class="clearfix"> </div>
		    </div>
	 </div>
</div>
<!--header end here-->
<!--banner  start hwew-->
