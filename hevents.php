<p class="text-center">
    <?php
    $query = $conn->query("select * from hevents");
    while ($row = $query->fetch()) {
    ?>
    <strong><?php echo $row['title']; ?></strong>
    <?php } ?>
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
                <th>Venue</th>
                <th>Date(from-to)</th>
                <th>Status</th>

            </tr>
            </thead>
            <tbody>
            <?php
            $query = $conn->query("select * from hevents ORDER BY tarehes DESC ");
            while ($row = $query->fetch()) {
                $id = $row['id'];
                ?>
                <tr>
                    <td><?php echo $row['event']; ?></td>
                    <td><?php echo $row['venue']; ?></td>
                    <td><?php echo $row['datere']; ?></td>
                    <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                </tr>
            <?php } ?>
            </tbody>

        </table>

    </div>
    <!-- /.box-body -->
</div>

<?php include('dbcon.php'); ?>