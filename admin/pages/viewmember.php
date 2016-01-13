<?
if($_POST){
    include_once("../class/member.php");
    $obj = new member();        
    if($obj->hapusMember($_POST['id'])){
        echo "<script>alert('Penghapusan data berhasil!'); document.location=('member.php');</script>";
    }else{
        echo "<script>alert('Gagal input!');</script>";
    }
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

    <title>Admin bookingSek.Com</title>
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
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.php">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->
 <!-- /.navbar-header -->

            <?include('navbar-header.php');?>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <?include('sidebar.php');?>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <?
                        include_once("../class/member.php");
                        $obj = new member();        
                        $tampil=$obj->viewMemberbyId($_GET['idmember']);
                        extract($tampil);
                      ?>
                        <div class="panel-heading">
                            Data Member Restoran<?echo $nama;?> <a  class="btn btn-default" href="addmember.php"> <i class="fa fa-plus fa-fw"></i>Tambah Member</a>
                        </div>
                        <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Hover Rows
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                        <tr>
                                            <th>ID Member</th>
                                            <td><?echo $id_member;?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Member</th>
                                            <td><?echo $nama;?></td>
                                        </tr>
                                        <tr>
                                            <th>Username</th>
                                            <td><?echo $username;?></td>
                                        </tr>
                                        <tr>
                                            <th>Password</th>
                                            <td><?echo $password;?></td>
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
                                        <tr>
                                            <th colspan="2">
                                              <a  href="editmember.php?idmember=<?echo $id_member;?>" class="btn btn-default" > <i class="fa fa-edit fa-fw"></i>Edit Data</a> |
                                                    <button data-toggle="modal" data-target="#deleteThis<?echo $id_member;?>" style="background-color:;"  class="btn btn-default"><i class="fa fa-trash fa-fw"></i>Hapus Data</button>
                                                    <div class="modal fade" id="deleteThis<?echo $id_member;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                                    <div class="loginmodal-container">
                                                      <h1>Konfirmasi Hapus</h1><br>
                                                      <p>
                                                        Apakah <?echo $nama;?> yakin akan anda hapus ?
                                                        <br>
                                                      </p>
                                                    <form method="POST" > 
                                                      <input type="hidden" value="<?echo $id_member;?>" name="id"> 
                                                      <input type="submit" value="HAPUS" name="hapus" class="btn"> 
                                                      <input type="button" data-dismiss="modal" value="CLOSE" class="btn">
                                                      </form>
                                                    </div>
                                                  </div>
                                            </th>
                                        </tr>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <img height="200px" src="<?echo $foto;?>">
                </div>
                <!-- /.col-lg-6 -->
            </div>


                            <!-- /.table-responsive -->
                            
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

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
