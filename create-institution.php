<?php 
    require('config/db.php');
    session_start();

        $institution = $_POST['institution'];
        $studyarea = $_POST['studyarea'];
        $edulevel = $_POST['edulevel'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $gpa = $_POST['gpa'];
    
        $user_id = $_SESSION['id'];

        $sql = "INSERT INTO institution_temp (user_id, institution, studyarea, edulevel, country, city, startdate, enddate, gpa)
            VALUES ($user_id, '$institution', '$studyarea', '$edulevel', '$country', '$city', '$startdate', '$enddate', '$gpa')";
        $result = mysqli_query($conn, $sql);

        $sql2 = "INSERT INTO resume (user_id, template, name, job, email, phone, location, summary, website, linkedin, github, facebook, institution, studyarea, edulevel, country, city, startdate, enddate, gpa)
                 SELECT tt.user_id, template, pt.name, pt.job, pt.email, pt.phone, pt.location, pt.summary, pt.website, pt.linkedin, pt.github, pt.facebook, it.institution, it.studyarea, it.edulevel, it.country, it.city, it.startdate, it.enddate, it.gpa
                 FROM template_temp AS tt 
                 INNER JOIN profile_temp AS pt ON pt.user_id = tt.user_id
                 INNER JOIN institution_temp AS it ON it.user_id = tt.user_id";
            $result2 = mysqli_query($conn, $sql2);
            if($result2){
                echo "submitted test";
            }else{
                echo mysqli_error();
            }
    
?>