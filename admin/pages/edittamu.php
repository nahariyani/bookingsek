<?php
    if(isset($_GET['idtamu'])){
        include_once("../class/tamu.php");
        $tanggal=date("Y-m-d h:i:s");
        $obj = new tamu();        
        if(isset($_POST['edit'])){
            if($obj->editTamu($_POST['fnama'],$_POST['fno'],$_POST['femail'],$_POST['fusername'],$_POST['fpassword'],$tanggal,$_POST['fid_tamu'])==true)
        {
            echo "<script>alert('edit berhasil!'); document.location=('tamu.php');</script>";
            
        }else{
            echo "<script>alert('Gagal input!');</script>";
        }  
}else{
        $tampil=$obj->viewTamubyId($_GET['idtamu']);
        extract($tampil);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">BookingSek Admin v1.0</a>
            </div>
            <!-- /.navbar-header -->

            <?include('navbar-header.php');?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <?include('sidebar.php');?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Edit</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Input Tamu Restoran
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <form enctype="multipart/form-data" role="form" method="post" action="#">
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledSelect">ID TAMU</label>
                                                <input value="<?echo $id_tamu;?>" class="form-control" id="disabledInput" type="text" placeholder="ID TAMU" disabled >
                                            </div>
                                        </fieldset>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input value="<?echo $nama;?>" name="fnama" min="4" max="50" class="form-control" placeholder="Masukkan Nama Restoran" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input value="<?echo $username;?>" name="fusername" min="6" max="50" class="form-control" placeholder="Masukkan Username Restoran" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input value="<?echo $password;?>" type="password" min="8" max="50" name="fpassword" class="form-control" placeholder="Masukkan Username Restoran" required>
                                        </div>
                                        <div class="form-group">
                                            <label>No Telp</label>
                                            <input value="<?echo $no_telp;?>" pattern="[0-9]+" maxlength="13" name="fno"  class="form-control" placeholder="Masukkan 12 digit no hp anda" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input value="<?echo $email;?>" name="femail"  type="email" class="form-control" placeholder="Masukkan Email Restoran" required>
                                        </div>
                                     
                                            <input type="hidden"  name="fid_tamu" value="<?echo $id_tamu;?>">
                                          
                                        
                                        <input type="submit" class="btn btn-default" name="edit" value="Simpan">
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
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
<?
}else
{
    echo "<script>alert('no id selected!'); document.location=('tamu.php');</script>";
  
}
?>
