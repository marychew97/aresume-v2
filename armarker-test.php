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
</head>
<body style='margin : 0px; overflow: hidden;'>
    <!-- <a-scene embedded arjs='trackingMethod: best; debugUIEnabled:false; sourceType: webcam; detectionMode: mono_and_matrix; matrixCodeType: 4x4;'> -->
    <!-- <a-assets> -->
        <!-- id=“file name“ src=“file url" -->
        <!-- <a-asset-item id="NSLogo7" src="https://raw.githubusercontent.com/lajunex0/3dmodels/master/NSLogo7.gltf" crossOrigin="anonymous">
        </a-asset-item>
    </a-assets> -->
        <!-- <a-marker preset='hiro'>
            <a-box color="red"></a-box>
        </a-marker> -->

        <!-- <a-marker preset='custom' type='pattern' url='ar-marker/pattern-profile_marker.patt' > -->
            <!-- <a-box position='0 0.5 0' material='opacity: 0.5; side: double;color:red;'>
				<a-torus-knot radius='0.26' radius-tubular='0.05'
				animation="property: rotation; to:360 0 0; dur: 5000; easing: linear; loop: true">
				</a-torus-knot> -->
            <?php 
                // $sql = "SELECT * FROM profile_temp WHERE user_id = $user_id AND resume_id = $resume_id";
                // $result = mysqli_query($conn, $sql);
                // while($row = mysqli_fetch_assoc($result)){
            ?>
                <!-- <a-video src="uploads/videos/<?php //echo $row['video']; ?>" width="3" height="3" rotation="-90 0 0"></a-video> -->
            <?php
                // }
            ?>
            
        <!-- </a-marker> -->
        <!-- <a-marker preset='custom' type='pattern' url='ar-marker/pattern-educate_marker.patt' > -->
            <!-- <a-box color="red"></a-box> -->
        <!-- </a-marker> -->
        <!-- <a-marker preset='custom' type='pattern' url='ar-marker/pattern-ac_marker.patt' > -->
            <?php 
                $sql = "SELECT * FROM activities_temp WHERE user_id = $user_id AND resume_id = $resume_id";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
					$photos = explode(",", $row['photos']);
                    for($i=0; $i<count($photos); $i++){
                        ?>
                        <img src="uploads/images/<?php echo $photos[$i];?>" />
                        <!-- <a-plane width="3" height="3" src="uploads/images/zoo1.jpeg" rotation="-90 0 0" position="-90 0 0"></a-plane> -->
                    <?php 
                    }
            ?>
                <!-- <a-plane width="3" height="3" src="uploads/images/zoo1.jpeg" rotation="-90 0 0"></a-plane> -->
                <!-- <a-plane width="3" height="3" src="uploads/images/zoo1.jpeg" rotation="-90 0 0" position="-90 0 0"></a-plane> -->
            <?php
                }
            ?>
        <!-- </a-marker> -->
        <!-- <a-marker preset='kanji' > -->
        <!-- <a-marker preset='custom' type='pattern' url='ar-marker/pattern-edu_marker.patt' >
            <a-box position='0 0.5 0' material='opacity: 0.5; side: double;color:blue;'>
				<a-torus-knot radius='0.26' radius-tubular='0.05'
				animation="property: rotation; to:360 0 0; dur: 5000; easing: linear; loop: true">
				</a-torus-knot>
			</a-box> -->
            <!-- <a-plane width="3" height="3" src="uploads/images/zoo1.jpeg" rotation="-90 0 0"></a-plane> -->
        <!-- </a-marker>
        <a-entity camera></a-entity>
    </a-scene> -->
</body>
</html>
