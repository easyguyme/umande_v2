<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
<script src="plugins/daterangepicker/daterangepicker.css"></script>
<script src="plugins/datepicker/datepicker3.css"></script>
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.print.css" media="print">
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('sidebar.php'); ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Women Voices, ICT Choices | Calendar
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Calendar</li>
            </ol>
        </section>

        <section class="content">

<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-body no-padding">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /. box -->
    </div>


</div>






        </section>



    </div>
    <?php include('footer.php'); ?>
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
    <div class="control-sidebar-bg"></div>
</div>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<?php include('hscripts.php'); ?>
<?php include('calendarscript.php'); ?>
</body>
</html>