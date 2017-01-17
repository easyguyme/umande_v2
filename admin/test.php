<?php
include('dbcon.php');
if (isset($_POST['facebook'])){

    $link = $_POST['facebooks'];



    $conn->query("update social set link = '$link' where account = 'facebook' ")or die(mysql_error());


    ?>
    <script>
        window.location = "dashboard.php";
    </script>
    <?php

}elseif (isset($_POST['twitter'])){
    $link = $_POST['twitters'];



    $conn->query("update social set link = '$link' where account = 'twitter' ")or die(mysql_error());


    ?>
    <script>
        window.location = "dashboard.php";
    </script>
    <?php


}elseif (isset($_POST['instagram'])){
    $link = $_POST['instagrams'];



    $conn->query("update social set link = '$link' where account = 'instagram' ")or die(mysql_error());


    ?>
    <script>
        window.location = "dashboard.php";
    </script>
    <?php

}elseif (isset($_POST['youtube'])) {
    $link = $_POST['youtubes'];



    $conn->query("update social set link = '$link' where account = 'youtube' ")or die(mysql_error());


    ?>
    <script>
        window.location = "dashboard.php";
    </script>
    <?php
}

?>

