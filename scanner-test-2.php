<?php 
  require('config/db.php');
  session_start();
  $user_id = $_GET['user_id'];
  $resume_id = $_GET['resume_id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>aframe-ar clickable entities</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- A FRAME -->
  <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"></script>
  <script src="https://rawgit.com/donmccurdy/aframe-extras/master/dist/aframe-extras.loaders.min.js"> </script>
  <script>
  AFRAME.registerComponent('navigate-on-click', {
  schema: {
    url: {
      default: ''
    }
  },
  init: function () {
    console.log("hello")
    console.log(this.el)
    var data = this.data;
    var el = this.el;
    el.addEventListener('click', function () {
      //window.location.href = data.url;
      window.open(data.url, '_blank');
    });
  }
});

AFRAME.registerComponent('color-randomizer', {
  init: function () {
    let colors = ["red", "green", "blue", "black", "orange", "white"]
    var el = this.el;
    el.addEventListener('click', (e) => {     
      this.el.setAttribute('color', colors[Math.floor(Math.random() * colors.length)])
    });
  }
});
  </script>
  </head>  
  <body>
    <a-scene vr-mode-ui="enabled: false" arjs='sourceType: webcam; debugUIEnabled: false;detectionMode: mono_and_matrix; matrixCodeType: 3x3;'>
    <!-- <a-marker preset="kanji" > -->
    <a-marker preset='custom' type='pattern' url='ar-marker/pattern-profile_marker.patt' >
        <?php 
            $sql = "SELECT * FROM profile_temp WHERE user_id = $user_id AND resume_id = $resume_id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
        ?>
            <a-video src="uploads/videos/<?php echo $row['video']; ?>" width="3" height="3" rotation="-90 0 0"></a-video>
        <?php
            }
        ?>
    </a-marker>

    <a-marker preset='custom' cursor="rayOrigin: mouse;" type='pattern' url='ar-marker/pattern-edu_marker.patt' >
      <a-entity scale='0.5 0.5 0.5' position="0 0.5 0" rotation='-90 0 0'>
            <?php 
              $sql = "SELECT * FROM institution_temp WHERE user_id = $user_id AND resume_id = $resume_id";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
            ?>
            <a-text color="blue" position="-20 10 0" width="40" value="Click to view my transcript"></a-text>   
            <a-box material='src:https://aresume-procom.000webhostapp.com/images/transcript-icon.png' position="-10 1 0" width="15" height="15" depth='0.1' navigate-on-click="url: https://aresume-procom.000webhostapp.com/pdf_url.php?file=<?php echo $row['transcript'];?>"></a-box>
        
            <a-text color="blue" position="2 10 0" width="40" value="Click to view my certificate"></a-text>   
            <a-box material='src:https://aresume-procom.000webhostapp.com/images/certificate-flat.png' position="10 1 0" width="15" height="15" depth='0.1' navigate-on-click="url: https://aresume-procom.000webhostapp.com/pdf_url.php?file=<?php echo $row['certificate'];?>"></a-box>
            <?php
              }
            ?>
      </a-entity>     
    </a-marker>

    <a-marker type='barcode' value="5" >
        <?php 
            $sql = "SELECT * FROM activities_temp WHERE user_id = $user_id AND resume_id = $resume_id";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                // $photos = explode(",", $row['photos']);
                // for($i=0; $i<count($photos); $i++){
                    // echo "<script>alert(".$photo.");</script>";
                    ?>
                    
                    <!-- <a-plane width="3" height="3" src="uploads/images/<?php //echo $photos[$i];?>" rotation="-90 0 0" position="-90 0 0"></a-plane> -->
                <?php 
                // }
        ?>
            <a-plane width="5" height="5" src="uploads/images/<?php echo $row['photos'];?>" rotation="-90 0 0"></a-plane>
            <!-- <a-plane width="3" height="3" src="uploads/images/zoo1.jpeg" rotation="-90 0 0" position="-90 0 0"></a-plane> -->
        <?php
            }
        ?>
    </a-marker>

    <a-marker preset='kanji' cursor="rayOrigin: mouse;">
      <a-entity scale='0.5 0.5 0.5' position="0 0.5 0" rotation='-90 0 0'>
            <?php 
              $sql = "SELECT * FROM award_temp WHERE user_id = $user_id AND resume_id = $resume_id";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result)){
            ?>
            <a-text color="blue" position="-10 10 0" width="40" value="Click to view my certificate"></a-text>   
            <a-box material='src:https://aresume-procom.000webhostapp.com/images/award-icon-220.png' width="15" height="15" depth='0.1' navigate-on-click="url: https://aresume-procom.000webhostapp.com/pdf_url.php?file=<?php echo $row['certificate'];?>"></a-box>
            <?php
              }
            ?>
      </a-entity>     
    </a-marker>
      
    <a-camera-static />   
    </a-scene>
  </body>
  
</html>
