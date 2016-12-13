<div class="col-md-6">
    <div class="box box-solid">
        <div class="box-header with-border">
            <h3 class="box-title"><dt>Quotes of the day</dt></h3>
        </div>
        <!-- /.box-header -->
        <?php
        $query = $conn->query("select * from hquotes");
        while ($row = $query->fetch()) {
        $id = $row['id'];
        ?>
        <div class="box-body">
            <div class="box-group" id="accordion">
                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                <div class="panel box box-primary">
                    <div class="box-header with-border">
                        <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                Inspirational Quotes
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
                                Popular Quotes
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
                                Motivational Quotes
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