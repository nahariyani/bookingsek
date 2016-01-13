<?
include '../../include/valid.php';
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

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

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
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Member Restoran <a  class="btn btn-default" href="addmember.php"> <i class="fa fa-plus fa-fw"></i>Tambah Member</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Tamu</th>
                                            <th>Nama Resto</th>
                                            <th>Tgl booking</th>
                                            <th>Jam</th>
                                            <th>Tempat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?
                include_once("../class/booking.php");
                                            $obj = new booking();
                                            $no = 1;
                                            $i=0;
                                            foreach($obj->viewbooking() as $value){
                                                extract($value);
                                                
                                        ?>
                                        <tr <?if($i%2==0){echo "class='odd gradeX'";}else{echo "class='even gradeC'";}?>>
                                            <td class="center"><?php echo $i;?></td>
                                            <td><?php echo $id_tamu;?></td>
                                            <td><?php echo $id_member;?></td>
                                            <td><?php echo $tanggal_booking;?></td>
                                            <td><?php echo $jam_booking;?></td>
                                            <td><?php echo $tempat;?></td>
                                            <td>
                                                    <a  href="viewmember.php?idmember=<?echo $id_member;?>" class="btn btn-default" ><i class="fa fa-search fa-fw"></i></a> |
                                                    <a  href="editmember.php?idmember=<?echo $id_member;?>" class="btn btn-default" > <i class="fa fa-edit fa-fw"></i></a> |
                                                    <button data-toggle="modal" data-target="#deleteThis<?echo $id_member;?>" style="background-color:;"  class="btn btn-default"><i class="fa fa-trash fa-fw"></i></button>
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
                                            </td>
                                        </tr>
                                        

                                        <?}?>
                                    </tbody>
                                </table>
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






    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
