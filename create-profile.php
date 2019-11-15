<?php 
    require('config/db.php');
    session_start();

    // if(isset($_POST)){
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

        $institution = $_POST['institution'];
        $studyarea = $_POST['studyarea'];
        $edulevel = $_POST['edulevel'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $gpa = $_POST['gpa'];

        $company = $_POST['company'];
        $position = $_POST['position'];
        $work_country = $_POST['work_country'];
        $work_city = $_POST['work_city'];
        $work_startdate = $_POST['work_startdate'];
        $work_enddate = $_POST['work_enddate']; 
    
        $user_id = $_SESSION['id'];

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