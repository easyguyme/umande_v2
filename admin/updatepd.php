<?php
include('dbcon.php');
error_reporting(E_ALL);
if (isset($_POST['changes'])) {
    $title = $_POST['title'];
    $info = $_POST['info'];
    $more = $_POST['more'];

    $conn->query("update home set title = '$title'  , info = '$info' , more = '$more' where id = '$1' ") or die(mysql_error());
}
?>