<?php 
    require('config/db.php');
    session_start();

    $template = $_POST['template'];
    $id = $_SESSION['id'];
    $sql = "INSERT INTO template_temp (template, user_id)
            VALUES ('$template', $id)";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "submitted";
    }

    // $sql2 = "SELECT * FROM resume, user WHERE resume.user_id = user.id";
    // $result2 = mysqli_query($conn, $sql2);

    // while($row = mysqli_fetch_assoc($result2)){
    //     $_SESSION['resume_id'] = $row['resume_id'];
    // };
    
?>