<?php 
    require('config/db.php');
    session_start();

    $institution = mysqli_real_escape_string($conn, $_POST['institution']);
    $studyarea = mysqli_real_escape_string($conn, $_POST['studyarea']);
    $edulevel = mysqli_real_escape_string($conn, $_POST['edulevel']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $startdate = mysqli_real_escape_string($conn, $_POST['startdate']);
    $enddate = mysqli_real_escape_string($conn, $_POST['enddate']);
    $cgpa = mysqli_real_escape_string($conn, $_POST['gpa']);

    $transcript = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  

    // $company = mysqli_real_escape_string($conn, $_POST['company']);
    // $position = mysqli_real_escape_string($conn, $_POST['position']);
    // $work_country = mysqli_real_escape_string($conn, $_POST['work_country']);
    // $work_city = mysqli_real_escape_string($conn, $_POST['work_city']);
    // $work_startdate = mysqli_real_escape_string($conn, $_POST['work_startdate']);
    // $work_enddate = mysqli_real_escape_string($conn, $_POST['work_enddate']); 

    $user_id = $_SESSION['id'];
    $resume_id = $_SESSION['resume_id'];

    $sql = "INSERT INTO institution_temp (user_id, institution, studyarea, edulevel, country, city, startdate, enddate, gpa)
        VALUES ($user_id, '$institution', '$studyarea', '$edulevel', '$country', '$city', '$startdate', '$enddate', '$cgpa')";
    $result = mysqli_query($conn, $sql);

    // $sql2 = "INSERT INTO resume (user_id, template, name, job, email, phone, location, summary, website, linkedin, github, facebook, institution, studyarea, edulevel, country, city, startdate, enddate, gpa)
    //          SELECT tt.user_id, template, pt.name, pt.job, pt.email, pt.phone, pt.location, pt.summary, pt.website, pt.linkedin, pt.github, pt.facebook, it.institution, it.studyarea, it.edulevel, it.country, it.city, it.startdate, it.enddate, it.gpa
    //          FROM template_temp AS tt 
    //          INNER JOIN profile_temp AS pt ON pt.user_id = tt.user_id
    //          INNER JOIN institution_temp AS it ON it.user_id = tt.user_id";
    //     $result2 = mysqli_query($conn, $sql2);
    //     if($result2){
    //         echo "submitted test";
    //     }else{
    //         echo mysqli_error();
    //     }
    
?>