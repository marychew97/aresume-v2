<?php 
    require('config/db.php');

    
        $username = $_POST['name'];

        $count = count($username);

            for($i=0; $i<$count; $i++){
                if(trim($username[$i]) != ''){
                    $sql = "INSERT INTO user (username)
                            VALUES ('".mysqli_real_escape_string($conn, $username[$i])."')";
                            $result = mysqli_query($conn, $sql);
                }
        }
            
?>