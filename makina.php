<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Women Voices, ICT Choices |
                MAKINA Ward
                <small>Version 1.1</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Makina Ward</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-cubes"></i></span>

                        <div class="info-box-content">


                            <span class="info-box-number"><strong><a href="project/makina.php" class="uppercase">Projects</a></strong></span>
                            <span class="info-box-number" style="font-size: x-small;"><a href="project/makina.php" class="uppercase">Complete | Current | Planned</a></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-calendar-check-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-number" style="font-size: large"><strong><a href="event/makina.php" class="uppercase">Events & Activities</a></strong></span>
                            <span class="info-box-number" style="font-size: x-small;"><a href="event/makina.php" class="uppercase">Upcoming | Ongoing | Cancelled</a></span>

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->


                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-line-chart"></i></span>

                        <div class="info-box-content">

                            <span class="info-box-number" style="font-size: large"><strong> <a href="plans/makina.php" class="uppercase">Plans & Budgets</a></strong></span>
                            <span class="info-box-number" style="font-size: x-small;"><a href="plans/makina.php" class="uppercase">Community priorities | County priorities</a></span>
                        </div>

                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue"><i class="fa fa-envelope"></i></span>

                        <div class="info-box-content">

                            <span class="info-box-number" style="font-size: large"><strong><a href="contact.php" class="uppercase">Contact us</a></strong></span>
                            <span class="info-box-number" style="font-size: x-small;"><a href="contact.php" class="uppercase">Email | Location | Phone </a></span>

                        </div>

                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Top row -->
            <div class="row">
                <div class="col-md-4"  >
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Women Champions</dt></h3>

                            <div class="box-tools pull-right">
                                <?php

                                $query = $conn->query("select * from profiles where page='makina'") or die(mysql_error());
                                $count = $query->rowcount();


                                ?>

                                <span class="label label-danger"><?php  echo $count;  ?> Champions</span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">

                                <?php

                                $query = $conn->query("select * from profiles where page='makina'") or die(mysql_error());
                                while ($row = $query->fetch()) {


                                    ?>
                                    <li>
                                        <img src="makina/champs/<?php echo $row['image']; ?>" alt="User Image">
                                        <a class="users-list-name" href="#"><?php echo $row['jina']; ?></a>
                                        <span class="users-list-date"><?php echo $row['age']; ?></span>
                                    </li>
                                <?php }?>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="profile/makina.php" class="uppercase">View All Champions</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                    <div class="box box-warning ">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Area Profile Table</dt></h3>

                            <div class="box-tools pull-right">

                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>



                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <table class="table table-striped">
                                <tr>
                                    <th style="width: 10px"></th>

                                    <th></th>

                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td>Area coverage</td>

                                    <td><span class="badge bg-red">55 KM<sup>2</sup></span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Population</td>

                                    <td><span class="badge bg-yellow">70,123</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Number of villages</td>

                                    <td><span class="badge bg-light-blue">11</span></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Name of villages</td>

                                    <td><span class="badge bg-green">This  won't fit</span></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td>Ward development fund (2017/2018)</td>

                                    <td><span class="badge bg-red">21,345,567</span></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td>Name of MCA</td>

                                    <td><span class="badge bg-purple">Benazir Omotto</span></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td>Name of ward Admin</td>

                                    <td><span class="badge bg-yellow">Omotto Benazir</span></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="#" class="uppercase">Read More</a>
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-4">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Photo Gallery</dt></h3>
                            <div class="box-tools pull-right">

                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>



                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box box-solid">

                            <!-- /.box-header -->
                            <style>


                                .carousel-inner>.item>img, .carousel-inner>.item>a>img
                                {
                                    height:300px;
                                    width:700px;
                                }

                            </style>
                            <?php




                            $query = $conn->query("select * from magallery") or die(mysql_error());
                            $count = $query->rowcount();
                            $slides='';
                            $Indicators='';
                            $counter=0;

                            while ($row = $query->fetch())
                            {

                                $title = $row['title'];
                                $desc = $row['dscn'];
                                $image = $row['image'];
                                if($counter == 0)
                                {
                                    $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
                                    $slides .= '<div class="item active">
            <img src="makina/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';

                                }
                                else
                                {
                                    $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
                                    $slides .= '<div class="item">
            <img src="makina/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';
                                }
                                $counter++;
                            }

                            ?>
                            <div class="box-body">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php echo $Indicators; ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php echo $slides; ?>
                                    </div>

                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="fa fa-angle-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="profile/makina.php" class="uppercase">View More</a>
                        </div>
                    </div>
                    <!-- /.box -->

                </div>

            </div>
            <!-- /.row -->

            <!-- Second row -->


            <div class="row" >


            </div>

            <div class="row">
                <?php include('partners.php'); ?>
            </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include('footer.php'); ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>



                </ul>
                <!-- /.control-sidebar-menu -->


                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->

            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->


                    <!-- /.form-group -->


                    <!-- /.form-group -->




                    <!-- /.form-group -->


                    <!-- /.form-group -->


                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/mapie.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/mabar.js"></script>
<script src="scroller/js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: true,
            $Idle: 0,
            $AutoPlaySteps: 4,
            $SlideDuration: 2500,
            $SlideEasing: $Jease$.$Linear,
            $PauseOnHover: 4,
            $SlideWidth: 140,
            $Cols: 7
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 809);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };
</script>
<script type="text/javascript">jssor_1_slider_init();</script>

</body>
</html>
