
<?php
session_start();
include_once("class/tamu.php");
if(!isset($_SESSION['username'])){
  include_once 'include/config.php';
  ?>  
    <script>
      alert('Akses ditolak! silahkan login terlebih dahulu.');
      location.href='index.php';
    </script>
  <?
}
if(isset($_GET['id_booking'])){
    $obj = new tamu();        
    if($obj->hapusBooking($_GET['id_booking'])){
        echo "<script>alert('Penghapusan data berhasil!'); document.location=('user.php');</script>";
    }else{
        echo "<script>alert('Gagal input!');</script>";
    }
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Food_Template Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
<script src="typeahead.min.js"></script>

<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script src="js/simpleCart.min.js"> </script>	
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
<script>
	    $(document).ready(function(){
			    $('input.typeahead').typeahead({
			        name: 'typeahead',
			        remote:'result.php?key=%QUERY',
			        limit : 10
			    });
			});
	    </script>
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		
		
<div class="menu-bar">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="top-menu">
					
				</div>
				<form method="post">
				<div class="login-section">
					<ul>
						<li><a href="logout.php" onclick="return confirm('Apakah anda ingin logput?')">Logout</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>



		
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
		<div>
			<div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Data Booking anda
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                        Actions
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">Action</a>
                                        </li>
                                        <li><a href="#">Another action</a>
                                        </li>
                                        <li><a href="#">Something else here</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Resto</th>
                                                    <th>Tanggal Booking</th>
                                                    <th>Jam Booking</th>
                                                    <th>Tempat</th>
                                                    <th>Jumlah Orang</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?
											
											$obj=new tamu;
											$data=$obj->viewTamubyId($_SESSION['username']);
											extract($data);
											$no=1;
											if($obj->cekBooking($id_tamu)){
												foreach ($obj->viewBooking($id_tamu) as $value) {
													extract($value);
											?>
								                                                <tr>
                                                    <td><?echo $no++;?></td>
                                                    <td><?echo $id_member;?></td>
                                                    <td><?echo $tanggal_booking;?></td>
                                                    <td><?echo $jam_booking;?></td>
                                                    <td><?echo $tempat;?></td>
                                                    <td><?echo $jumlah_orang;?></td>
                                                    <td><?if($status==0){
                                                    	echo "<p style='color:blue;'>ordered</p>";
                                                    }else if($status==1){
                                                    	echo "<p style='color:green;'>booked</p>";
                                                    }else{
                                                    	echo "<p style='color:red;'>canceled</p>";
                                                    }
                                                    ?>
                                                    </td>
                                                    <td><?if ($status==2){ echo "No Action";}else{?><a onclick="return confirm('Apakah anda ingin membatalkan pesanan?, jika anda membatalkannya anda tidak bisa mengubahnya.')" href="?id_booking=<?echo $id_booking;?>" style="color=red;">Cancel</a><?}?></td>
                                                </tr>
                                                <?
													}
												}else{
													
													?>
													          <tr>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                </tr>
													<?
												}
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.col-lg-4 (nested) -->
                                <div class="col-lg-8">
                                    <div id="morris-bar-chart"></div>
                                </div>
                                <!-- /.col-lg-8 (nested) -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

			
		</div>
		<div class="ordering-section" id="Order">
			<div class="container">
				<div class="ordering-section-head text-center wow bounceInRight" data-wow-delay="0.4s">
					<h3>Booking Restoran tidak pernah semudah ini</h3>
					<div class="dotted-line">
						<h4>Hanya 4 Langkah</h4>
					</div>
				</div>
				<div class="ordering-section-grids">
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="one"></i><br>
							<i class="one-icon"></i>
							<p>Choose <span>Your Restaurant</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="two"></i><br>
							<i class="two-icon"></i>
							<p>Order  <span>Your Cuisine</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="three"></i><br>
							<i class="three-icon"></i>
							<p>Pay   <span> online / on delivery</span></p>
							<label></label>
						</div>
					</div>
					<div class="col-md-3 ordering-section-grid">
						<div class="ordering-section-grid-process wow fadeInRight" data-wow-delay="0.4s"">
							<i class="four"></i><br>
							<i class="four-icon"></i>
							<p>Enjoy <span>your food </span></p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
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
</body>
</html>
