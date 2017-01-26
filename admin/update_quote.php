<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->

    <?php include('sidebar.php'); ?>
    <?php $get_id = $_GET['id']; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DASHBOARD | ADMIN PANEL
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <!--todo add editable heading-->
        <section class="content">

            <div class="row">
                <div class="col-md-2">


                </div>
                <div class="col-md-8">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <?php
                            $query = $conn->query("select * from quotes where id='$get_id'");
                            while ($row = $query->fetch()) {

                            ?>
                            <h3 class="box-title">Update <?php echo $row['title']; ?></h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" class="form-horizontal" id="quoteForm">

                            <div class="box-body">

                                <div class="form-group">

                                    <label for="name" class="col-sm-2 control-label">Title:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="title" class="form-control " id="title" placeholder="Name" value="<?php echo $row['title']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="type" class="col-sm-2 control-label">Type of Quote:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="cate" class="form-control" id="type" placeholder="Type of quote" value="<?php echo $row['cate']; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="who" class="col-sm-2 control-label">By who?:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="who" class="form-control" id="who" placeholder="By who" value="<?php echo $row['who']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="quote" class="col-sm-2 control-label">Quote:</label>

                                    <div class="col-sm-10 ">
                                        <textarea class="textarea" name="neno" id="neno" form="quoteForm"  placeholder="Quote" style="width: 100%; height: 70px;color: #00a7d0; font-size: 14px; line-height: 18px; border: 1px solid #0a2b1d; padding: 10px;"><?php echo $row['neno']; ?></textarea>
                                    </div>
                                </div>

                                <?php } ?>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button name="save" class="btn btn-danger">Update</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
                <div class="col-md-2">


                </div>
            </div>
            <!--third row-->



        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include('footer.php'); ?>

    <!-- Control Sidebar -->

    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php include('hscripts.php'); ?>


<script type="text/javascript">
    $("#read").click(function() {

        $("#hidden").show();
        $("#read").hide();

    });

</script>
</body>
</html>


<?php
include('dbcon.php');
if (isset($_POST['save'])){
    $title = $_POST['title'];
    $cate = $_POST['cate'];
    $who = $_POST['who'];
    $neno = $_POST['neno'];




    $query="update quotes set title=:title , cate=:cate,neno=:neno,who=:who where id = '$get_id' ";


    $stmt=$conn->prepare($query);
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':cate', $_POST['cate'], PDO::PARAM_STR);
    $stmt->bindParam(':neno', $_POST['neno'], PDO::PARAM_STR);
    $stmt->bindParam(':who', $_POST['who'], PDO::PARAM_STR);
    $stmt->execute();




    ?>
    <script>
        window.location = "home.php";
    </script>
    <?php

}
?>