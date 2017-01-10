<?php
include('dbcon.php');

if (isset($_POST['changes'])) {
    $title = $_POST['title'];
    $info = $_POST['info'];
    $remo = $_POST['remo'];

    //$conn->query("update home set title = '$title'  , info = '$info' , more = '$more' where id = '1' ") or die(mysql_error());
    $conn->query("update home set title = '$title' , info ='$info' , remo = '$remo' where id =1 ") or die(mysql_error());
    ?>

    <script>
        window.location = "dashboard.php";
    </script>

<?php     }  ?>