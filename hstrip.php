<div class="row">
    <div class="col-sm-3 col-xs-6">
        <div class="description-block border-right">
            <?php
            $query = $conn->query("select * from hstrip where id=1");
            while ($row = $query->fetch()) {
            $id = $row['id'];
            ?>
            <h5 class="description-header"><?php echo $row['number']; ?></h5>
            <span class="description-text"><?php echo $row['info']; ?></span>
        </div>
        <?php } ?>
        <!-- /.description-block -->
    </div>
    <!-- /.col -->
    <div class="col-sm-3 col-xs-6">
        <div class="description-block border-right">
            <?php
            $query = $conn->query("select * from hstrip where id=2");
            while ($row = $query->fetch()) {
            $id = $row['id'];
            ?>
            <h5 class="description-header"><?php echo $row['number']; ?></h5>
            <span class="description-text"><?php echo $row['info']; ?></span>
        </div>
        <?php } ?>
        <!-- /.description-block -->
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="description-block border-right">
            <?php
            $query = $conn->query("select * from hstrip where id=3");
            while ($row = $query->fetch()) {
            $id = $row['id'];
            ?>
            <h5 class="description-header"><?php echo $row['number']; ?></h5>
            <span class="description-text"><?php echo $row['info']; ?></span>
        </div>
        <?php } ?>
        <!-- /.description-block -->
    </div>
    <div class="col-sm-3 col-xs-6">
        <div class="description-block border-right">
            <?php
            $query = $conn->query("select * from hstrip where id=4");
            while ($row = $query->fetch()) {
            $id = $row['id'];
            ?>
            <h5 class="description-header"><?php echo $row['number']; ?></h5>
            <span class="description-text"><?php echo $row['info']; ?></span>
        </div>
        <?php } ?>
        <!-- /.description-block -->
    </div>
</div>
<?php include('dbcon.php'); ?>