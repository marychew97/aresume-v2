<?php 
    require('config/db.php');
    session_start();

    // if(isset(mysqli_real_escape_string($_POST)){
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

        $institution = mysqli_real_escape_string($conn, $_POST['institution']);
        $studyarea = mysqli_real_escape_string($conn, $_POST['studyarea']);
        $edulevel = mysqli_real_escape_string($conn, $_POST['edulevel']);
        $country = mysqli_real_escape_string($conn, $_POST['country']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $startdate = mysqli_real_escape_string($conn, $_POST['startdate']);
        $enddate = mysqli_real_escape_string($conn, $_POST['enddate']);
        $gpa = mysqli_real_escape_string($conn, $_POST['gpa']);

        $company = mysqli_real_escape_string($conn, $_POST['company']);
        $position = mysqli_real_escape_string($conn, $_POST['position']);
        $work_country = mysqli_real_escape_string($conn, $_POST['work_country']);
        $work_city = mysqli_real_escape_string($conn, $_POST['work_city']);
        $work_startdate = mysqli_real_escape_string($conn, $_POST['work_startdate']);
        $work_enddate = mysqli_real_escape_string($conn, $_POST['work_enddate']); 
    
        $user_id = $_SESSION['id'];

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

        echo $institution;
        echo $studyarea;
        echo $edulevel;
        echo $country;
        echo $city;
        echo $startdate;
        echo $enddate;
        echo $gpa;

        echo $company;
        echo $position;
        echo $work_country;
        echo $work_city;
        echo $work_startdate;
        echo $work_enddate; 
    
        echo $user_id;

        $sql = "INSERT INTO resume (user_id, name, job, email, phone, location, summary, website, linkedin, github, facebook, institution, studyarea, edulevel, country, city, startdate, enddate, gpa, company, position, work_country, work_city, work_startdate, work_enddate)
        VALUES ($user_id, '$name', '$job', '$email', '$phone', '$location', '$summary', '$website', '$linkedin', '$github', '$facebook', '$institution', '$studyarea', '$edulevel', '$country', '$city', '$startdate', '$enddate', '$gpa', '$company', '$position', '$work_country', '$work_city', '$work_startdate', '$work_enddate')";
        $result = mysqli_query($conn, $sql);

        echo $sql;
            echo $result;
        if($result){
            echo $sql;
            echo $result;
        }
    
?>