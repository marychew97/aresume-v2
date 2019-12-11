<!doctype html>
<html>
  <head>
    
  </head>
  <body>
    <form method="post" action="" enctype='multipart/form-data' id="upload-video">
      <input type='file' name='file' />
      <input type='submit' value='Upload' name='upload'  id="submit">
    </form>
    <br/>
    <form method="post" action="submit-test.php" id="form">
      <div id="addInput">
      Name: <input type="text" name="name[]" id="name"/>
      </div>
      <input type="button" value="Add" id="add"/>
      <input type="submit" value="Submit" />
    </form>

    <form method="post" action="image-test.php" enctype='multipart/form-data' id="multiple-image">
      <input type="file" name="files[]" multiple>
      <input type='submit' value='Upload Image' name='upload'>
    </form>

    <form method="post" action="document-upload.php" enctype='multipart/form-data'>
      <input type="file" name="file" >
      <input type='submit' value='Upload Document' name='upload'>
    </form>

    <input type="button" value="sign in with linkedin" id="linkedin"/>
    <div id="profileData" style="display: none;">
    <p><a href="javascript:void(0);" onclick="logout()">Logout</a></p>
    <div id="picture"></div>
      <div class="info">
          <p id="name"></p>
          <p id="intro"></p>
          <p id="email"></p>
          <p id="location"></p>
          <p id="link"></p>
      </div>
    </div>

    <script type="in/Login"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="https://platform.linkedin.com/in.js">
      api_key: 811itp4m0jnfbe
      authorize: true
      onLoad: onLinkedInLoad
      scope: r_basicprofile r_emailaddress
    </script>
    <script>
    $('#add').on('click', function(){
      $('#addInput').append('<div>Name: <input type="text" id="name" name="name[]"/><input type="button" value="Delete" id="delete"/></div>');

    })

    $('#addInput').on('click', '#delete', function(e){
        e.preventDefault();
        $(this).parent().remove();
    })

    $('#submit').on('click', function(e){
      console.log(e.target.value);
    })

    $('#form').submit(function(e){
      e.preventDefault();
      $('#addInput input[type=text]').each(function(){
        $(this).val();
        // var formData = $('#form').serialize();
        // alert(formData)
        
      })
      // alert($('#form').serialize());
      $.ajax({
          type: 'post',
          url: 'submit-test.php',
          data: $('#form').serialize(),
          success: function(data){
            alert(data);
          }
        })
    });

    // $('#multiple-image').on('submit', function(e){
    //   e.preventDefault();
    //   var form = $('#multiple-image')[0];
    //   var formData = new FormData(form);

    //   console.log(...formData);
    //   $
    // })

    $('#linkedin').on('click', function(){
      IN.Event.on(IN, "auth", getProfileData);
    })
    
    // Setup an event listener to make an API call once auth is complete
    function onLinkedInLoad() {
        IN.Event.on(IN, "auth", getProfileData);
    }
    
    // Use the API call wrapper to request the member's profile data
    function getProfileData() {
        IN.API.Profile("me").fields("id", "first-name", "last-name", "headline", "location", "picture-url", "public-profile-url", "email-address").result(displayProfileData).error(onError);
    }

    // Handle the successful return from the API call
    function displayProfileData(data){
        var user = data.values[0];
        document.getElementById("picture").innerHTML = '<img src="'+user.pictureUrl+'" />';
        document.getElementById("name").innerHTML = user.firstName+' '+user.lastName;
        document.getElementById("intro").innerHTML = user.headline;
        document.getElementById("email").innerHTML = user.emailAddress;
        document.getElementById("location").innerHTML = user.location.name;
        document.getElementById("link").innerHTML = '<a href="'+user.publicProfileUrl+'" target="_blank">Visit profile</a>';
        document.getElementById('profileData').style.display = 'block';
    }

    // Handle an error response from the API call
    function onError(error) {
        console.log(error);
    }
    
    // Destroy the session of linkedin
    function logout(){
        IN.User.logout(removeProfileData);
    }
    
    // Remove profile data from page
    function removeProfileData(){
        document.getElementById('profileData').remove();
    }
    
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