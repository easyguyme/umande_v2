<div class="box box-solid">

    <!-- /.box-header -->
    <style>


        .carousel-inner>.item>img, .carousel-inner>.item>a>img
        {
            height:300px;
            width:700px;
        }

    </style>
    <?php




    $query = $conn->query("select * from maprofile") or die(mysql_error());
    $count = $query->rowcount();
    $slides='';
    $Indicators='';
    $counter=0;

    while ($row = $query->fetch()) {

        $title = $row['title'];
        $desc = $row['desc'];
        $image = $row['image'];
        if($counter == 0)
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
            $slides .= '<div class="item active">
            <img src="makina/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';

        }
        else
        {
            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
            $slides .= '<div class="item">
            <img src="makina/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';
        }
        $counter++;
    }

    ?>
    <div class="box-body">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php echo $Indicators; ?>
            </ol>
            <div class="carousel-inner">
                <?php echo $slides; ?>
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
</div>