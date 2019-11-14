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
    
        // $profile_name = $_FILES['file']['name'];  
        // $temp_name  = $_FILES['file']['tmp_name']; 
    
        $user_id = $_SESSION['id'];
        
        // if(isset($profile_name)){
        //     if(!empty($profile_name)){
        //         $folder = "uploads/images/";
        //         move_uploaded_file($temp_name, $folder.$name);

        //         $sql = "INSERT INTO profile_temp (user_id, name, job, email, phone, location, summary, website, linkedin, github, facebook, profile_img)
        //                 VALUES ($user_id, '$name', '$job', '$email', '$phone', '$location', '$summary', '$website', '$linkedin', '$github', '$facebook', '$profile_name')";
        //         $result = mysqli_query($conn, $sql);

        //         $sql2 = "INSERT INTO resume (user_id, template, name, job, email, phone, location, summary, website, linkedin, github, facebook, profile_img)
        //                 SELECT tt.user_id, template, pt.name, pt.job, pt.email, pt.phone, pt.location, pt.summary, pt.website, pt.linkedin, pt.github, pt.facebook, pt.profile_img
        //                 FROM template_temp AS tt 
        //                 INNER JOIN profile_temp AS pt ON pt.user_id = tt.user_id";
        //         $result2 = mysqli_query($conn, $sql2);
        //         if($result2){
        //             echo "submitted test";
        //         }else{
        //             echo mysqli_error();
        //         }
        //     }
        // } else{
            $sql = "INSERT INTO profile_temp (user_id, name, job, email, phone, location, summary, website, linkedin, github, facebook)
            VALUES ($user_id, '$name', '$job', '$email', '$phone', '$location', '$summary', '$website', '$linkedin', '$github', '$facebook')";
            $result = mysqli_query($conn, $sql);

            // $sql2 = "INSERT INTO resume (user_id, template, name, job, email, phone, location, summary, website, linkedin, github, facebook)
            //      SELECT tt.user_id, template, pt.name, pt.job, pt.email, pt.phone, pt.location, pt.summary, pt.website, pt.linkedin, pt.github, pt.facebook
            //      FROM template_temp AS tt 
            //      INNER JOIN profile_temp AS pt ON pt.user_id = tt.user_id";
            // $result2 = mysqli_query($conn, $sql2);
            // if($result2){
            //     echo "submitted test";
            // }else{
            //     echo mysqli_error();
            // }
        // }
        
    
        // $sql = "INSERT INTO resume_test (name, job, email, phone, location, summary, website, linkedin, github, facebook)
        //         VALUES ('$name', '$job', '$email', '$phone', '$location', '$summary', '$website', '$linkedin', '$github', '$facebook')";
        
        // if($result){
        //     echo "submitted";
        // } else{
        //     echo mysqli_error();
        // }
    
        
    // }
    
?>