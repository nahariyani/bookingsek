<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <?
                include_once("resto-controller.php");
                                            $obj = new member();
                                            $no = 1;
                                            $i=0;
                                            foreach($obj->viewMember() as $value){
                                                extract($value);
                                                $i++;
            ?>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="<?echo $foto;?>" style="width:100px;">
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div><?echo $nama;?></div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <?}?>
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </div>