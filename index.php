<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include_once("class/makanan.php");
    $obj = new makanan(); 
?>
<!DOCTYPE html>
<html>
<head>
<title>Bookingsek-Reservasi Online</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<script src="js/jquery.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />

<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	    <style media="screen" type="text/css">

.loginmodal-container {
  text-align: center;
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}


</style> 
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		
			<?include('menubar.php');?>

			



		<div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
		    <div class="container">
				<div class="banner-info">
					<div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
						<h1>Hello</h1>
						<div class="line">
							<h2>Selamat Datang diBookingsek</h2>
						</div>
					</div>
					<div class="col-lg-3">
					</div>
					<div class="col-lg-6">
					<div class="form-list wow fadeInRight" data-wow-delay="0.5s">
						<form method="post" action="restaurants.php">
						  <ul class="navmain">
							<li><span>Pencarian Restaurant</span>
							<input style="color:black;" type="text" name="typeahead" class="typeahead  tt-query col-lg-12" autocomplete="off" spellcheck="false" placeholder="Cari Restoran" >
							 <!--<input  type="text"  value="Cari Restoran" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Cari Restoran';}" name="typeahead" id="typeahead">-->
							</li>
						  </ul>
						  <div class="srch"><button name="cari" ></button>	</div>
						</form>
						</div>
					</div>
					<div class="col-lg-3">
					</div>
					<!-- start search-->
		
				</div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Booking Restoran tidak pernah semudah ini</h3>
					<div class="dotted-line">
						<h4>Hanya 4 langkah </h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="one"></i><br>
							<i class="one-icon"></i>
							<p>Pilih <span>Restoran</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="two"></i><br>
							<i class="two-icon"></i>
							<p>Login <span>/Daftar Member</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="three"></i><br>
							<i class="three-icon"></i>
							<p>Konfirm <span>Reservasi Anda</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="four"></i><br>
							<i class="four-icon"></i>
							<p>Enjoy <span></span></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="popular-restaurents" id="Popular-Restaurants">
			<div class="container">
				<div class="col-md-12 top-cuisines">
					<div class="top-cuisine-head">
						<h3>FYI, Makanan Khas Semarang</h3>
					</div>
					<div class="top-cuisine-grids">
						<?
							foreach ($obj->viewMakanan() as $value) {
								extract($value);
						?>
						<div class="top-cuisine-grid wow bounceIn" data-wow-delay="0.4s">
						    <a href=""><img src="<?echo substr($foto,6);?>" class="img-responsive" alt="" /> </a>
							<label style="width:100%;"><?echo $nama;?></label>
					    </div>
					    <?}?>
					    		
						
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2014  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com" target="target_blank">W3Layouts</a></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script type="text/javascript">
	window.onload = function() {
  		obj1 = document.getElementById(obj);
        obj1.style.display = '';
        obj2 = document.getElementById('hide');
        obj2.style.display = '';
        obj3 = document.getElementById('show');
        obj3.style.display = 'none';
	};
</script>
<script type="text/javascript">

			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<script>
	    $(document).ready(function(){
			    $('input.typeahead').typeahead({
			        name: 'typeahead',
			        remote:'result.php?key=%QUERY',
			        limit : 10
			    });
			});
	    </script>
	    <script src="typeahead.min.js"></script>
</body>
</html>
