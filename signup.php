<?php 
    require('config/db.php');

    if(isset($_POST)){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm'];

        $sql = "INSERT INTO user (email, password, username)
                VALUES ('$email', '$password', '$username')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo "Success";
        }

        // $sql2 = "SELECT * FROM user WHERE email = $email";
        // $result2 = mysqli_query($conn, $sql2);
        // $json_array = array();
        
        // while($row = mysqli_fetch_assoc($result2)){
        //     $json_array = $row;
        // }

        // echo json_encode($json_array);
    }
?>