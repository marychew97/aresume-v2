<?php 
    require('config/db.php');

    $template = $_POST['template'];

    $sql = "INSERT INTO resume2 (template)
            VALUES ('$template')";
    $result = mysqli_query($conn, $sql);
    echo $sql;
    echo $result;
    if($result){
        echo "submitted";
    }
?>