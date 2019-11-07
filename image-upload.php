<?php 
    include "config/db.php";

    if(isset($_POST)){
        $name       = $_FILES['file']['name'];  
        $temp_name  = $_FILES['file']['tmp_name'];  
        if(isset($name)){
            if(!empty($name)){      
              $folder = "uploads/images/";
              move_uploaded_file($temp_name, $folder.$name);

              $sql = "INSERT INTO images (image)
                      VALUE ('$name')";

              $result = mysqli_query($conn, $sql);

              if($result){
                echo "Image file uploaded successfully";
              }
            }       
        }  else {
            echo 'You should select a file to upload !!';
        }
    }

?>