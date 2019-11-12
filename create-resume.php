<?php 
    require('config/db.php');

    $name = $_POST['name'];
    $job = $_POST['job'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $summary = $_POST['summary'];
    $website = $_POST['website'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $facebook = $_POST['facebook'];

    $user_id = $_GET['id'];

    $sql = "INSERT INTO resume ('user_id', 'resume_name', 'name', 'email', 'location', 'linkedin', 'github', 'facebook', 'phone', 'summary', 'website', 'job', 'profile_image', 'award_id', 'education_id', 'interest_id', 'language_id', 'location_id', 'profile_id', 'publication_id', 'reference_id', 'work_id', 'skill_id', 'volunteer_id', 'resume_link', 'documents', 'videos', 'images')
            VALUES ($user_id, , '$name', '$email', '$location', '$linkedin', '$github', '$facebook', '$phone', '$summary', '$website', '$job', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '')";
    $result = mysqli_query($conn, $sql);
    echo $sql;
    echo $result;
    if($result){
        echo "submitted";
    } else{
        echo "error";
    }
    // $institution = $_POST['institution'];
    // $studyarea = $_POST['studyarea'];
    // $edulevel = $_POST['edulevel'];
    // $country = $_POST['country'];
    // $city = $_POST['city'];
    // $startdate = $_POST['startdate'];
    // $enddate = $_POST['enddate'];
    // $gpa = $_POST['gpa'];
    echo $name;
    echo $job;
    echo $email;
    echo $phone;
    echo $location;
    echo $summary;
    echo $website;
    echo $linkedin;
    echo $github;
    echo $facebook;
    // echo $institution;
    // echo $studyarea;
    // echo $edulevel;
    // echo $country;
    // echo $city;
    // echo $startdate;
    // echo $enddate;
    // echo $gpa;
?>