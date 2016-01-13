<?
include_once("class/member.php");
$obj = new member();        
if(isset($_POST['booking'])){
	$ps=$_POST['fpassword'];
	$tanggal=date("Y-m-d h:i:s");
	if(($_POST['fnama']!="")&&($_POST['fno']!="")&&($_POST['femail']!="")&&($_POST['fusername']!="")&&($_POST['fpassword']!="")){
		$obj->addTamu($_POST['fnama'],$_POST['fno'],$_POST['femail'],$_POST['fusername'],$_POST['fpassword'],$tanggal);
	}
		$idtamu=$obj->cekTamubyId($_POST['fusername'],$ps);
		if($idtamu!=0){
			$idtamu=$obj->viewTamubyId($_POST['fusername'],$ps);
			extract($idtamu);
		    if($obj->addBooking($_POST['id'],$id_tamu,$_POST['ftanggalbooking'],$_POST['ftempat'],$_POST['fjam'],$_POST['fjumlah'])){
		        echo "<script>alert('Pemesanan telah selesai!'); document.location=('index.php');</script>";
		    }else{
		        echo "<script>alert('Gagal input!');</script>";
		    }
		}else{
			    echo "<script>alert('Maaf anda belum terdafatar!');</script>";
		}
	
}

$tampil=$obj->viewMemberbyId($_GET['id']);
extract($tampil);
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Food_Template Bootstrap Responsive Website Template | order page :: w3layouts</title>
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
<script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script type="text/javascript">

    function hide(obj) {
    	//  alert(obj);
        obj1 = document.getElementById(obj);
        obj1.style.display = 'none';
        obj2 = document.getElementById('hide');
        obj2.style.display = 'none';
        obj3 = document.getElementById('show');
        obj3.style.display = '';
    }
    function show(obj) {
    	//  alert(obj);
        obj1 = document.getElementById(obj);
        obj1.style.display = '';
        obj2 = document.getElementById('hide');
        obj2.style.display = '';
        obj3 = document.getElementById('show');
        obj3.style.display = 'none';
    }
</script>
<script>
 $(window).load(function(){
      $('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'fade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
          waitBannerAnimation:false,
        progressBar:false
      })  
      });
      
     $(window).load (
    function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
      visible : {min: 1,
       max: 4
},
height: 'auto',
 width: 240,

    }, responsive: false, 
    
    scroll: 1, 
    
    mousewheel: false,
    
    swipe: {onMouse: false, onTouch: false}});
    
    
    });      

     </script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/simpleCart.min.js"> </script>	
</head>
<body>
    <!-- header-section-starts -->
<?include('menubar.php');?>
	<!-- header-section-ends -->
	<div class="order-section-page">
		<div class="ordering-form">
			<div class="container">
			<div class="order-form-head text-center wow bounceInLeft" data-wow-delay="0.4s">
						<h3>Reservation Form</h3>
					
					</div>
					<br>
				<div class="col-md-6 order-form-grids">
					
					<div class="order-form-grid  wow fadeInLeft" data-wow-delay="0.4s">
							<form class="form-horizontal" method="post" action="#">								
						<div class="form-group">
						    <label for="inputdate" class="col-sm-4 control-label">Nama Restoran</label>
						     <label style="text-align:left;" class="col-sm-8 control-label"><?echo ucfirst($nama);?></label>
						    <input type="hidden" name="idmember" value="<?echo $nama;?>"> 
						    <input type="hidden" name="id" value="<?echo $id_member;?>"> 					    
						</div>
						<div style="text-align:right;">
							<a onclick="hide('toggle')" id="hide" style="display:none;">Saya Sudah daftar</a>
							<span id="show">Belum punya akun ?  <a onclick="show('toggle')" id="show">Daftar disini</a></span>
						</div>
						<div class="form-group">
						    <label for="inputdate" class="col-sm-4 control-label">Username</label>
						    <div class="col-sm-8">
						      <input type="text"  min="6" max="50" name="fusername" placeholder="Masukkan Username" class="form-control"  required>
						    </div>
						</div>
						<div class="form-group">
						    <label for="inputdate" class="col-sm-4 control-label">Password</label>
						    <div class="col-sm-8">
						      <input type="password"  min="6" max="50" name="fpassword" placeholder="Masukkan Password" class="form-control" required>
						    </div>
						</div>
						<div id="toggle" style="display:none;">
										<div class="form-group">
                                            <label for="inputdate" class="col-sm-4 control-label">Nama</label>
                                            <div class="col-sm-8">
                                            <input name="fnama" min="4" max="50" class="form-control" placeholder="Masukkan Nama">
                                        	</div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputdate" class="col-sm-4 control-label">No Telp</label>
                                            <div class="col-sm-8">
                                            <input pattern="[0-9]+" maxlength="13" name="fno"  class="form-control" placeholder="Masukkan 12 digit no hp anda">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputdate" class="col-sm-4 control-label">Email</label>
                                            <div class="col-sm-8">
                                            <input name="femail"  type="email" class="form-control" placeholder="Masukkan Email Restoran" >
                                            </div>
                                        </div>	
						</div>
						  <div class="form-group">
						    <label for="inputdate" class="col-sm-4 control-label">Tanggal Booking</label>
						    <div class="col-sm-8">
						      <input name="ftanggalbooking" type="Date" class="form-control"  required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputTime" class="col-sm-4 control-label">Jam Booking</label>
						    <div class="col-sm-8">
						      <input name="fjam" type="Time" class="form-control" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPeople" type="tel" class="col-sm-4 control-label">Tempat</label>
						    <div class="col-sm-8">
						      <select  class="form-control" name="ftempat" required>
						      		<option value="indoor">Indoor</option>
						      		<option value="outdoor">Outdoor</option>
						      </select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="inputPeople" class="col-sm-4 control-label">Jumlah Tamu</label>
						    <div class="col-sm-8">
						      <input name="fjumlah" placeholder="Masukkan Jumlah Orang" type="number" class="form-control" required>
						    </div>
						  </div>
					<div class="sub-button wow swing animated" data-wow-delay= "0.4s">
					 	<input name="booking" type="submit" value="Booking Sekarang">
					</div>
					</form>
					</div>
				</div>
				<div class="col-md-6 order-form-grids">
					<table class="table table-hover">
						<tr>
							<td colspan="2">
									<img height="200px" src="<?echo substr($foto,6);?>">
							</td>
						</tr>
                                        <tr>
                                            <th>Restoran</th>
                                            <td><?echo $nama;?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat</th>
                                            <td><?echo $alamat;?></td>
                                        </tr>
                                        <tr>
                                            <th>No Telp.</th>
                                            <td><?echo $no_telp;?></td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td><?echo $email;?></td>
                                        </tr>
                     </table>
						<div class="form-group">
							
						</div>
						<div class="form-group">
							
						</div>
				</div>
				
			</div>
		</div>

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