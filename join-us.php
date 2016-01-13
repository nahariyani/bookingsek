<?php
    if(isset($_POST['simpan'])){
        include_once("class/member.php");
        $obj = new member();        
                $target = NULL;
                $uploadOk = 1;
                if(isset($_FILES['ffoto']) && is_uploaded_file($_FILES['ffoto']['tmp_name'])) //cek jika telah upload file 
                {
                    $msg = $_FILES['ffoto'];
                    $filename  = basename($_FILES['ffoto']['name']);
                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
                    $source = $_FILES['ffoto']['tmp_name'];                    
                    if($_FILES['ffoto']['size'] > 5000000) //ukuran max file
                    {
                        $uploadOk = 0;
                    }
                    else if($extension != "jpg" && $extension != "png" && $extension != "jpeg") //format file yang diperbolehkan
                    {
                        $uploadOk = 0;
                    }
                    else if($uploadOk == 0)
                    {
                        echo "<br>File, tidak dapat diupload!";
                    }
                    else
                    {
                        do //membuat nama file baru dari file upload
                        {
                            $new = rand(00000,99999);
                            $newfilename=$new.".".$extension;
                            $dir = "images/upload/member";
                            if(!file_exists($dir))
                            {
                                mkdir($dir, 0777, true); //0777 default recursion, true flag
                            }
                            $target = $dir."/".$newfilename;
                        }while(file_exists($target)); 
                        move_uploaded_file($source, $target);
                    }
            }
        if($uploadOk == 1){
        	if($target!=NULL){
        		$fotoo="../../".$target;
        	}else{
        		$fotoo="";
        	}
            if($obj->addMember($_POST['fnama'],$_POST['fusername'],$_POST['fpassword'],$_POST['fno'],$_POST['femail'],$_POST['falamat'],$fotoo))
        {
            echo "<script>alert('input berhasil!');</script>";
            //header("location:index.php");
        }else{
            echo "<script>alert('Gagal input!');</script>";
        }
    }
    }
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
<title>Food_Template Bootstrap Responsive Website Template | Register :: w3layouts</title>
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
	<div class="header">
		<?include('menubar.php');?>
		
	</div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
	<div class="main">
	   <div class="container">
		  <div class="register">
		  	                          	<div class="row">
                        		<div class="col-lg-8">
                        			<h1>Daftarkan Restoran anda untuk menjadi member dari kami.</h1>
                        			<b>Keuntungan yang bisa anda dapatkan :</b>
                        			<ul>
                        				<li>Media Promosi gratis</li>
                        				<li>Sistem booking Online yang memudahkan pelanggan anda</li>
                        			</ul>
                        		</div>
                        	</div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Restoran 
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form enctype="multipart/form-data" role="form" method="post" action="#">
                                        
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="fnama" min="4" max="50" class="form-control" placeholder="Masukkan Nama Restoran" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input name="fusername" min="6" max="50" class="form-control" placeholder="Masukkan Username Restoran" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" min="8" max="50" name="fpassword" class="form-control" placeholder="Masukkan Username Restoran" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input pattern="[0-9]+" maxlength="13" name="fno"  class="form-control" placeholder="Masukkan 12 digit no hp anda" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="femail"  type="email" class="form-control" placeholder="Masukkan Email Restoran" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="falamat" class="form-control" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Upload Gambar</label>
                                            <input type="file" name="ffoto">
                                        </div>
                                        
                                        <input type="submit" class="btn btn-default" name="simpan" value="Simpan">
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
				<div class="clearfix"> </div>

		   </div>
	     </div>
	    </div>
<div class="clearfix"></div>
		
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