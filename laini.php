<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Umande Trust | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/skin-green.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>UT</b>D</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Umande</b>Trust</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->

                    <!-- Tasks Menu -->

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="dist/img/UmandeLogo.png" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Umande Trust</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="dist/img/UmandeLogo.png" class="img-circle" alt="User Image">

                                <p>
                                    Umande Trust Nairobi
                                    <small>"New Dawn:Nascent start"</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">About</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Contacts</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="http://umande.org" class="btn btn-default btn-flat">Website</a>
                                </div>
                                <div class="pull-right">
                                    <a href="http://umandetrust.blogspot.co.ke" class="btn btn-default btn-flat">Blog</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-bell"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="dist/img/UmandeLogo.png" class="img-responsive" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Umande Trust</p>
                    <!-- Status -->
                    <a href="index.php"><i class="fa fa-circle text-success"></i> New Dawn:Nascent start</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active treeview"><a href="index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-plus-square-o"></i> <span>Project Areas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="makina.php"><i class="fa fa-female"></i>Makina</a></li>
                        <li><a href="sara.php"><i class="fa fa-female"></i>Sarangombe</a></li>
                        <li><a href="lindi.php"><i class="fa fa-female"></i>Lindi</a></li>
                        <li><a href="laini.php"><i class="fa fa-female"></i>Laini Saba</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-maxcdn"></i> <span>In the Media</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-plus-square-o"></i> <span>Areas Statistics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-female"></i>Makina</a></li>
                        <li><a href="#"><i class="fa fa-female"></i>Sarangombe</a></li>
                        <li><a href="#"><i class="fa fa-female"></i>Lindi</a></li>
                        <li><a href="#"><i class="fa fa-female"></i>Laini Saba</a></li>
                    </ul>
                </li>
                <li><a href="/pages/calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> <span>Contact Us</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Women Voices, ICT Choices |
                LAINI SABA Ward
                <small>Version 1.0</small>
                <ol class="breadcrumb" style="font-size:small;color: #b21628;">
                    <li><a href="#profile"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#projects"><i class="fa fa-battery-4"></i>Projects</a></li>
                    <li><a href="#pprojects"><i class="fa fa-battery-1"></i>Planned Projects</a></li>
                    <li><a href="#budget"><i class="fa fa-bar-chart"></i>Bugdet</a></li>
                </ol>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Laini saba Ward</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-female"></i></span>

                        <div class="info-box-content">

                            <span class="info-box-number">C.B.O<small></small></span>
                            <span class="info-box-number">101</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-group"></i></span>

                        <div class="info-box-content">

                            <span class="info-box-number">N.G.O<small></small></span>
                            <span class="info-box-number">500</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-tree"></i></span>

                        <div class="info-box-content">

                            <span class="info-box-number">ENVIRONMENTAL ORGS<small></small></span>
                            <span class="info-box-number">302</span>
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
            <div class="row" id="profile">
                <div class="col-md-4">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Women Champions</dt></h3>

                            <div class="box-tools pull-right">
                                <span class="label label-danger">8 Champions</span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">
                                <li>
                                    <img src="dist/img/user1-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander Pierce</a>
                                    <span class="users-list-date">Today</span>
                                </li>
                                <li>
                                    <img src="dist/img/user8-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Norman</a>
                                    <span class="users-list-date">Yesterday</span>
                                </li>
                                <li>
                                    <img src="dist/img/user7-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Jane Wangoi</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user6-128x128.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">John</a>
                                    <span class="users-list-date">12 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander</a>
                                    <span class="users-list-date">13 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander</a>
                                    <span class="users-list-date">13 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander</a>
                                    <span class="users-list-date">13 Jan</span>
                                </li>
                                <li>
                                    <img src="dist/img/user2-160x160.jpg" alt="User Image">
                                    <a class="users-list-name" href="#">Alexander</a>
                                    <span class="users-list-date">13 Jan</span>
                                </li>

                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View All Champions</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                    <div class="box box-warning direct-chat-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Activity Brief</dt></h3>

                            <div class="box-tools pull-right">

                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>



                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- Conversations are loaded here -->
                            <div class="box-body text-left">
                                <dl>
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>

                                </dl>
                            </div>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">Read More</a>
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
                        <div class="box-body">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="dist/img/gal1.jpg" alt="First slide">

                                        <div class="carousel-caption">
                                            First Slide
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="dist/img/gal2.jpg" alt="Second slide">

                                        <div class="carousel-caption">
                                            Second Slide
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="dist/img/gallery.jpg" alt="Third slide">

                                        <div class="carousel-caption">
                                            Third Slide
                                        </div>
                                    </div>
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
                        <div class="box-footer text-center">
                            <a href="javascript:void(0)" class="uppercase">View More</a>
                        </div>
                    </div>
                    <!-- /.box -->

                </div>

            </div>
            <!-- /.row -->
            <h2 class="page-header text-center" id="projects"><dt>PROJECTS</dt></h2>
            <!-- Second row -->
            <div class="row" >
                <!-- Left col -->
                <div class="col-md-6">
                    <!-- MAP & BOX PANE -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Completed Projects</dt></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-group" id="accordion">
                                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                <div class="panel box box-primary">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                County Government's Projects
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="box-body">


                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="table-responsive">
                                                    <table class="table no-margin">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Start date</th>
                                                            <th>End date</th>
                                                            <th>Status</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><a href="#">Project 1</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 2</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 3</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 4</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer clearfix">

                                                <a href="#" class="btn btn-sm btn-success  center-block">View All complete Projects</a>
                                            </div>
                                            <!-- /.box-footer -->

                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-danger">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                N.G.O's Projects
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="box-body">


                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="table-responsive">
                                                    <table class="table no-margin">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Start date</th>
                                                            <th>End date</th>
                                                            <th>Status</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><a href="#">Project 1</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 2</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 3</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 4</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer clearfix">

                                                <a href="#" class="btn btn-sm btn-success  center-block">View All complete Projects</a>
                                            </div>
                                            <!-- /.box-footer -->

                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-success">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                C.B.O's Projects
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="box-body">


                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <div class="table-responsive">
                                                    <table class="table no-margin">
                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Start date</th>
                                                            <th>End date</th>
                                                            <th>Status</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><a href="#">Project 1</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 2</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 3</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="#">Project 4</a></td>
                                                            <td>1/11/2015</td>

                                                            <td>10/12/201</td>
                                                            <td><span class="label label-success">Complete</span></td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer clearfix">

                                                <a href="#" class="btn btn-sm btn-success  center-block">View All complete Projects</a>
                                            </div>
                                            <!-- /.box-footer -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- /.row -->

                    <!-- TABLE: LATEST ORDERS -->

                    <!-- /.box -->
                </div>
                <!-- /.col -->

                <div class="col-md-6">

                    <!-- /.box -->
                    <!-- PRODUCT LIST -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Current Projects</dt></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-group" id="accordion1">
                                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                <div class="panel box box-primary">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                                County Government's Projects
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne1" class="panel-collapse collapse in">
                                        <div class="box-body">


                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <ul class="products-list product-list-in-box">
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->

                                                    <!-- /.item -->
                                                </ul>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer clearfix">

                                                <a href="#" class="btn btn-sm btn-success  center-block">View All current Projects</a>
                                            </div>
                                            <!-- /.box-footer -->

                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-danger">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                                N.G.O's Projects
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo1" class="panel-collapse collapse">
                                        <div class="box-body">


                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <ul class="products-list product-list-in-box">
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->

                                                    <!-- /.item -->
                                                </ul>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer clearfix">

                                                <a href="#" class="btn btn-sm btn-success  center-block">View All current Projects</a>
                                            </div>
                                            <!-- /.box-footer -->

                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-success">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                                C.B.O's Projects
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree1" class="panel-collapse collapse">
                                        <div class="box-body">


                                            <!-- /.box-header -->
                                            <div class="box-body">
                                                <ul class="products-list product-list-in-box">
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->
                                                    <li class="item">
                                                        <div class="product-img">
                                                            <img src="dist/img/gallery.jpg" alt="Product Image">
                                                        </div>
                                                        <div class="product-info">
                                                            <a href="javascript:void(0)" class="product-title">Gawa umeme
                                                                <span class="label label-warning pull-right">70% complete</span></a>
                                                            <div class="progress progress-xxs">
                                                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                                            </div>
                        <span class="product-description">
                          The project was allocated a budget of Ksh. 10m
                        </span>
                                                        </div>
                                                    </li>
                                                    <!-- /.item -->

                                                    <!-- /.item -->
                                                </ul>
                                                <!-- /.table-responsive -->
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer clearfix">

                                                <a href="#" class="btn btn-sm btn-success  center-block">View All current Projects</a>
                                            </div>
                                            <!-- /.box-footer -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <h2 class="page-header text-center" id="pprojects"><dt>PLANNED PROJECTS</dt></h2>
            <div class="row" >
                <div class="col-md-5">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Project Priorities Graph</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">

                                    <div class="row">
                                        <div class="box-pane">
                                            <canvas id="pieChart" style="height:500px"></canvas>
                                        </div>

                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-5">
                                    <ul class="chart-legend clearfix">
                                        <li><i class="fa fa-circle-o text-red"></i> National Government</li>
                                        <li><i class="fa fa-circle-o text-green"></i> County Government</li>
                                        <li><i class="fa fa-circle-o text-yellow"></i> N.G.O Projects</li>
                                        <li><i class="fa fa-circle-o text-aqua"></i> C.B.O Projects</li>
                                        <li><i class="fa fa-circle-o text-light-blue"></i> E.B.O Projects</li>
                                        <li><i class="fa fa-circle-o text-gray"></i> Others</li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <div>
                            <p>Umande brings together teams of resource persons who share a passion and commitment to learn from, share and achieve lasting change with people.  This team comprises community organizers, academics, geo-informatics, urban planning, human rights, civil engineering, social scientists, environmental, gender, youth and enterprise development resource persons Team members have several years of experience from diverse research, civil society and public sector agencies .</p>
                        </div>
                        <!-- /.box-body -->

                        <!-- /.footer -->
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Project Priorities Information</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">

                                    <div class="box-body">
                                        <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-example-generic1" data-slide-to="1" class=""></li>
                                                <li data-target="#carousel-example-generic1" data-slide-to="2" class=""></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <iframe width="300" height="185" src="https://www.youtube.com/embed/Qftj6MdENb8?list=UUOKQjR2yISKjRSLRq80K5aQ" frameborder="0" allowfullscreen></iframe>

                                                    <div class="carousel-caption">
                                                        First Slide
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="dist/img/gallery.jpg" alt="Second slide">

                                                    <div class="carousel-caption">
                                                        Second Slide
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <img src="dist/img/jiko.jpg" alt="Third slide">

                                                    <div class="carousel-caption">
                                                        Third Slide
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="left carousel-control" href="#carousel-example-generic1" data-slide="prev">
                                                <span class="fa fa-angle-left"></span>
                                            </a>
                                            <a class="right carousel-control" href="#carousel-example-generic1" data-slide="next">
                                                <span class="fa fa-angle-right"></span>
                                            </a>
                                        </div>
                                    </div>


                                    <p>Umande Trust is a rights-based agency, which believes that modest resources can significantly improve access to water and sanitation services if financial resources are strategically invested in support of community-led plans and actions. Our mission is to be the partner of choice in transforming water supply, sanitation and environmental services in close partnership with communities in Kenya’s urban centres.</p>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <div class="box box-solid">

                                        <!-- /.box-header -->
                                        <div class="box-body">
                                            <div class="box-group" id="accordion2">
                                                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                                <div class="panel box box-primary">
                                                    <div class="box-header with-border">
                                                        <h4 class="box-title">
                                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                                                                Project #1
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne2" class="panel-collapse collapse in">
                                                        <div class="box-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                                            wolf <a href="#">read more >></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box box-danger">
                                                    <div class="box-header with-border">
                                                        <h4 class="box-title">
                                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
                                                                Project #2
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo2" class="panel-collapse collapse">
                                                        <div class="box-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                                            wolf .<a href="#">read more >></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel box box-success">
                                                    <div class="box-header with-border">
                                                        <h4 class="box-title">
                                                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                                                Project #3
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree2" class="panel-collapse collapse">
                                                        <div class="box-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                                                            wolf moon. <a href="#">read more >></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->

                        <!-- /.footer -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">

                    <div class="box-default no-padding collapsed-box ">
                        <div class="box box-success ">
                            <div class="box-header with-border ">
                                <h3 class="box-title" id="budget">Project Budget Chart</h3>

                                <div class="box-tools pull-right ">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <canvas id="barCharts" style="height:230px"></canvas>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box box-warning direct-chat-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Graph Explanation</dt></h3>

                            <div class="box-tools pull-right ">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- Conversations are loaded here -->
                            <div class="box-body text-left">
                                <dl>
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>

                                </dl>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer-->
                    </div>

                </div>


            </div>
            <div class="row">
                <h2 class="page-header text-center"><dt>OUR PARTNERS</dt></h2>
                <div class="box-default">
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; visibility: hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('scroller/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden;">
                            <div>
                                <img data-u="image" src="scroller/img/13.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/14.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/12.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/11.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/10.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/9.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/8.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/7.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/6.PNG" />
                            </div>
                            <a data-u="any" href="http://www.jssor.com" style="display:none">Our Partners</a>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/5.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/4.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/3.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/1.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/2.PNG" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Developed by <a href="#">Mitchsofts</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Umande Trust</a>.</strong> All rights reserved.
    </footer>

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
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/bar.js"></script>
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
