<div class="col-md-6">
    <div class="box box-solid">
        <div class="box-header with-border">
            <?php
            $query = $conn->query("select * from hquotes");
            while ($row = $query->fetch()) {
            $id = $row['id'];
            ?>
            <h3 class="box-title"><dt><?php echo $row['title']; ?></dt></h3>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                <?php echo $row['inspiretitle']; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="box-body">
                            <blockquote>
                                <p>"<?php echo $row['inspire']; ?>"</p>
                                <small><?php echo $row['it']; ?><cite title="Source Title"></cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="panel box box-danger">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                <?php echo $row['populartitle']; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="box-body">
                            <blockquote>
                                <p>"<?php echo $row['popular']; ?>"</p>
                                <small><?php echo $row['pt']; ?><cite title="Source Title"></cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="panel box box-success">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <?php echo $row['motivatetitle']; ?>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="box-body">
                            <blockquote>
                                <p>"<?php echo $row['motivate']; ?>"</p>
                                <small><?php echo $row['mt']; ?><cite title="Source Title"></cite></small>
                            </blockquote>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>