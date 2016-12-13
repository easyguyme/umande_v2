<p class="text-center">
    <strong>Upcoming Events</strong>
</p>

<div class="box box-success">
    <div class="box-header ">

        <div class="box-tools">

        </div>
    </div>
    <!-- /.box-header -->

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Event</th>
                <th>Date</th>
                <th>Status</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $query = $conn->query("select * from hevents");
            while ($row = $query->fetch()) {
                $id = $row['id'];
                ?>
                <tr>
                    <td><?php echo $row['event']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                </tr>
            <?php } ?>
            </tbody>

        </table>

    </div>
    <!-- /.box-body -->
</div>

<?php include('dbcon.php'); ?>