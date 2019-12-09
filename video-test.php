<!doctype html>
<html>
  <head>
    
  </head>
  <body>
    <form method="post" action="" enctype='multipart/form-data' id="upload-video">
      <input type='file' name='file' />
      <input type='submit' value='Upload' name='upload'  id="submit">
    </form>
    <script>
    $('#submit').on('click', function(e){
      console.log(e.target.value);
    })
    
    </script>
  </body>
</html>

<?php 
    include "config/db.php";
    session_start();
    
    if(isset($_POST)){
        $maxsize = 5242880; // 5MB
  
        $name = $_FILES['file']['name'];
        $target_dir = "uploads/videos/";
        $target_file = $target_dir . $_FILES["file"]["name"];
 
        $user_id = $_SESSION['id'];

        // Select file type
        $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
        // Valid file extensions
        $extensions_arr = array("mp4","avi","3gp","mov","mpeg");
 
        // Check extension
        if( in_array($videoFileType,$extensions_arr) ){
  
           // Check file size
        //    if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
        //      echo "File too large. File must be less than 5MB.";
        //    }else{
             // Upload
             if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
               // Insert record
               $query = "INSERT INTO videos(video,user_id) VALUES('".$name."',$user_id)";
 
               $query = mysqli_query($conn,$query);
               if($query)
               {
               echo "Upload successfully";
               }
             }
        //    }
 
        }else{
           echo "<script>alert('Invalid file extension.')</script>";
        }
  
      } 

?>