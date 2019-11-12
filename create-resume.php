<?php 
    require('config/db.php');

    $name = $_POST['name'];
    $job = $_POST['job'];
    echo $name.' '.$job;
?>