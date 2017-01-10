
<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Add Event</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <div class="box-body">
            <div class="form-group col-sm-10">
                <label>Event name:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="event" class="form-control" id="event" placeholder="Event name" required>
                </div>


                <!-- /.input group -->
            </div>
            <div class="form-group col-sm-10">
                <label>Event Venue:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="venue" class="form-control" id="venue" placeholder="Event venue" required>
                </div>


                <!-- /.input group -->
            </div>

            <div class="form-group col-sm-7">
                <label>Event Date:From-To:</label>

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tarehe" class="form-control pull-right" id="reservation" required>
                </div>
                <div class="form-group col-sm-7">
                    <label>Event Status</label>
                    <select name="status" class="form-control" required>
                        <option></option>
                        <option>Ongoing</option>
                        <option>Upcoming</option>
                        <option>Cancelled</option>
                    </select>
                </div>
                <!-- /.input group -->
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button  name="save" class="btn btn-info">Save changes</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>

<?php
include('dbcon.php');
if (isset($_POST['save'])){
    $event = $_POST['event'];
    $venue = $_POST['venue'];
    $tarehe = $_POST['tarehe'];
    $status = $_POST['status'];



        $conn->query("insert into hevents (event,venue,datere,status) values('$event','$venue','$tarehe','$status')")or die(mysql_error());
        ?>
        <script>
            window.location = "addevent.php";
        </script>
        <?php

}
?>


