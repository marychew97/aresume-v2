

<?php 
  require('config/db.php');
  session_start();
  $user_id = $_GET['user_id'];
  $resume_id = $_GET['resume_id'];
?>
<!DOCTYPE html>
<head>
<script src="https://aframe.io/releases/0.8.0/aframe.min.js"></script> 
<script src="//cdn.rawgit.com/donmccurdy/aframe-extras/v4.1.2/dist/aframe-extras.min.js"></script> 
<script src="https://jeromeetienne.github.io/AR.js/aframe/build/aframe-ar.js"></script>
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
<body style='margin : 0px; overflow: hidden;'>
    <a-scene embedded arjs='trackingMethod: best; debugUIEnabled:false; sourceType: webcam; detectionMode: mono_and_matrix; matrixCodeType: 4x4;' vr-mode-ui="enabled: false">
    <!-- <a-assets> -->
        <!-- id=“file name“ src=“file url" -->
        <!-- <a-asset-item id="NSLogo7" src="https://raw.githubusercontent.com/lajunex0/3dmodels/master/NSLogo7.gltf" crossOrigin="anonymous">
        </a-asset-item>
    </a-assets> -->
        <!-- <a-marker preset='hiro'>
            <a-box color="red"></a-box>
        </a-marker> -->

        <a-marker preset='custom' type='pattern' url='ar-marker/pattern-profile_marker.patt' >
            <!-- <a-box position='0 0.5 0' material='opacity: 0.5; side: double;color:red;'>
				<a-torus-knot radius='0.26' radius-tubular='0.05'
				animation="property: rotation; to:360 0 0; dur: 5000; easing: linear; loop: true">
				</a-torus-knot> -->
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
        <!-- <a-marker preset='custom' type='pattern' url='ar-marker/pattern-educate_marker.patt' > -->
            <!-- <a-box color="red"></a-box> -->
        <!-- </a-marker> -->
        <a-marker preset='custom' type='pattern' url='ar-marker/pattern-ac_marker.patt' >
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
        <!-- <a-marker preset='custom' type='pattern' url='ar-marker/pattern-edu_marker.patt' > -->
            <a-entity scale='0.5 0.5 0.5' position="0 0.5 0" rotation='-90 0 0'>
                <a-text color="blue" position="0 1 0" value="Click to open google.com"></a-text>   
                <a-box material='src:https://i.imgur.com/wjobVTN.jpg'  width="1" height="1" depth='0.1' navigate-on-click="url: https://www.google.com/"></a-box>
            
                <a-text color="blue" position="0 -1 0" value="Click to change color"></a-text>   
                <a-box width="1" position="0 -2 0" height="1" depth='0.1' color-randomizer></a-box>
            </a-entity>   
            <!-- <a-box position='0 0.5 0' material='opacity: 0.5; side: double;color:blue;'>
				<a-torus-knot radius='0.26' radius-tubular='0.05'
				animation="property: rotation; to:360 0 0; dur: 5000; easing: linear; loop: true">
				</a-torus-knot>
			</a-box> -->
            <!-- <a-plane width="3" height="3" src="uploads/images/zoo1.jpeg" rotation="-90 0 0"></a-plane> -->
        </a-marker>
        <a-camera-static /> 
    </a-scene>
</body>
</html>

