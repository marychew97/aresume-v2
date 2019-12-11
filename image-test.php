<?php 
    include "config/db.php";

    if(isset($_POST)){
        //to store uploaded files path
        $images_arr = array();
        $image_count = count($_FILES['files']['name']);
        $name = $_FILES['files']['name'];
        $temp_name  = $_FILES['files']['tmp_name'];
        $images = implode(',', $_FILES['files']['name']);
        
        echo $images;
        if(isset($name)){
            if(!empty($name)){   
            
              $folder = "uploads/images/";

              for($i=0; $i<$image_count; $i++){
                move_uploaded_file($temp_name[$i], $folder.$name[$i]);
              }
              

              $sql = "INSERT INTO image_test (image)
                      VALUE ('$images')";

              $result = mysqli_query($conn, $sql);

              $sql2 = "SELECT * FROM image_test";
              $result2 = mysqli_query($conn, $sql2);
              $json_array = array();
              while($row = mysqli_fetch_assoc($result2)){
                    $json_array = $row;
                  }
                  
              echo json_encode($json_array); 
            }       
        }  else {
            echo 'You should select a file to upload !!';
        }
    }

?>