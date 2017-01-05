<?php
include('header.php');
?>
<body>
<br>
<br>
<div class="container">
    <div class="row-fluid">
        <div class="span12">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <div class="control-group">
                    <label class="control-label" for="input01">Image:</label>
                    <div class="controls">
                        <input type="file" name="image" class="font" required>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" name="submit" class="btn btn-success">Upload</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="span12">
            <ul class="thumbnails">
                <?php
                $query=mysql_query("select * from image")or die(mysql_error());
                while($row=mysql_fetch_array($query)){
                    ?>
                    <li class="span2">
                        <div class="thumbnail"> <img src="<?php echo $row['location']; ?>" width="100" height="100" alt="" class="img-rounded"> </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {

        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);

        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/" . $_FILES["image"]["name"]);
        $location = "upload/" . $_FILES["image"]["name"];


        header('location:index.php');
    }
    ?>
</div>
</body>
</html>