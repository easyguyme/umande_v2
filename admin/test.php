<a href="addevent.php" class="btn  btn-success">Add Event</a>
<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Edit Event</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <div class="box-body">
            <div class="form-group col-sm-10">
                <?php
                $query = $conn->query("select * from hevents");
                while ($row = $query->fetch()) {
                $id = $row['id'];
                ?>
                <label>Event name:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="event" class="form-control" id="event" placeholder="Event name"  value="<?php echo $row['event']; ?>">
                </div>


                <!-- /.input group -->
            </div>

            <div class="form-group col-sm-7">
                <label>Event Date:From-To:</label>

                <div class="input-group">

                    <input type="text" name="tarehe" class="form-control " id="reservation" value="<?php echo $row['datere']; ?>">
                </div>
                <div class="form-group col-sm-7">
                    <label>Event Status</label>
                    <select name="status" class="form-control" required>
                        <option><?php echo $row['status']; ?></option>
                        <option>Ongoing</option>
                        <option>Upcoming</option>
                        <option>Cancelled</option>
                    </select>
                </div>
                <!-- /.input group -->
            </div>
            <?php } ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button  name="save" class="btn btn-info">Save changes</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>

<?php
if (isset($_POST['save'])){
    $event = $_POST['event'];
    $tarehe = $_POST['tarehe'];
    $status = $_POST['status'];


    $conn->query("select * from hevents where event=$event")or die(mysql_error());

    $count = $query->rowcount();

    if ($count > 0){ ?>
        <script>
            alert('Data Already Exist');
        </script>
        <?php
    }else{
        $conn->query("insert into hevents (event,date,status) values('$event','$tarehe','$status')")or die(mysql_error());
        ?>
        <script>
            window.location = "test.php";
        </script>
        <?php
    }
}
?>
<?php include('dbcon.php');?>