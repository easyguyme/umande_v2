<?php $get_id = $_GET['id']; ?>

<div class="box box-info">
    <a href="addevent.php" class="btn  btn-success">Add Event</a>
    <div class="box-header with-border">
        <h3 class="box-title">Edit Event</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <div class="box-body">
            <?php
            $query = $conn->query("select * from hevents where id='$get_id'");
            while ($row = $query->fetch()) {

                ?>
            <div class="form-group col-sm-10">

                <label>Event name:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="event" class="form-control" id="event" placeholder="Event name"  value="<?php echo $row['event']; ?>" required>
                </div>


                <!-- /.input group -->
            </div>
                <div class="form-group col-sm-10">

                    <label>Event Venue:</label>

                    <div class="input-group  col-sm-8">

                        <input type="text" name="venue" class="form-control" id="venue" placeholder="Event venue"  value="<?php echo $row['venue']; ?>" required>
                    </div>


                    <!-- /.input group -->
                </div>

            <div class="form-group col-sm-7">
                <label>Event Date:From-To:</label>

                <div class="input-group">

                    <input type="text" name="tarehe" class="form-control " id="reservation" value="<?php echo $row['datere']; ?>" required>
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
            <button  name="update" class="btn btn-info">Update changes</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>

<?php
include('dbcon.php');
if (isset($_POST['update'])){
    $event = $_POST['event'];
    $venue = $_POST['venue'];
    $tarehe = $_POST['tarehe'];
    $status = $_POST['status'];



    $conn->query("update hevents set event = '$event', venue='$venue', datere='$tarehe',status='$status' where id = '$get_id' ")or die(mysql_error());


    ?>
    <script>
        window.location = "addevent.php";
    </script>
    <?php

}
?>
