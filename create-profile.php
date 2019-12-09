<?php 
    require('config/db.php');
    session_start();
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $job = mysqli_real_escape_string($conn, $_POST['job']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $summary = mysqli_real_escape_string($conn, $_POST['summary']);
    $website = mysqli_real_escape_string($conn, $_POST['website']);
    $linkedin = mysqli_real_escape_string($conn, $_POST['linkedin']);
    $github = mysqli_real_escape_string($conn, $_POST['github']);
    $facebook = mysqli_real_escape_string($conn, $_POST['facebook']);

    $user_id = $_SESSION['id'];
    $resume_id = $_SESSION['resume_id'];

    $image_name = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    $folder = "uploads/images/";
    move_uploaded_file($temp_name, $folder.$name);
    
    $sql = "INSERT INTO profile_temp (user_id, resume_id, name, job, email, phone, location, summary, website, linkedin, github, facebook, profile_image)
    VALUES ($user_id, $resume_id, '$name', '$job', '$email', '$phone', '$location', '$summary', '$website', '$linkedin', '$github', '$facebook', '$image_name')";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Profile information submitted successfully";
    }
    
?>