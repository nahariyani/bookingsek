<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Bookingsek-Restoran</title>
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
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>		
<script src="js/simpleCart.min.js"> </script>	
</head>
<body>
    <!-- header-section-starts -->
	<?include('menubar.php');?>


	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">
				<?
					include_once("class/member.php");
				    $obj = new member();        
				    if(isset($_POST['cari'])){
				    	//echo "<script>alert('fail');</script>";
				    	$tampil=$obj->viewLikeMember($_POST['typeahead']);
					        foreach ($tampil as $value) {
								extract($value);
						?>
				Hasil Pencarian
				<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="<?echo substr($foto, 6);?>" class="img-responsive" alt="" />
					</div> 
					<div class="col-md-4 restaurent-title">
						<div class="logo-title">
							<h4><a href="#"><?echo ucfirst($nama);?></a></h4>
						</div>
						<div class="AddressResto">
							<h5><?echo $alamat;?></h5>
						</div>
						<div class="NoTelpResto">
							<h5><?echo $no_telp;?></h5>
						</div>
						
					</div>
					<div class="col-md-4 buy">
						
						<a class="morebtn hvr-rectangle-in" href="order.php?id=<?echo $id_member;?>">Pesan Tempat</a>
					</div>
					<div class="clearfix"></div>

				</div>
					<?}
					echo "<hr/>";
					    
					}else{foreach ($obj->viewMember() as $value) {
								extract($value);
				?>

				<div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="0.4s">
					<div class="col-md-3 restaurent-logo">
						<img src="<?echo substr($foto, 6);?>" class="img-responsive" alt="" />
					</div>
					<div class="col-md-4 restaurent-title">
						<div class="logo-title">
							<h4><a href="#"><?echo ucfirst($nama);?></a></h4>
						</div>
						<div class="AddressResto">
							<h5><?echo $alamat;?></h5>
							
						</div>
						
					</div>
					<div class="col-md-4 buy">
						
						<a class="morebtn hvr-rectangle-in" href="order.php?id=<?echo $id_member;?>">Pesan Tempat</a>
					</div>
					<div class="clearfix"></div>
				</div>
					<?} }?>


			</div>
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

</body>
</html>