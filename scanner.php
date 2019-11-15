<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>AResume</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar.css" />
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <script src="https://raw.githack.com/jeromeetienne/AR.js/2.0.5/aframe/build/aframe-ar.js"></script>
    <script>
	  AFRAME.registerComponent('navigate-on-click', {
	    schema: {
	      url: {default: ''}
	    },
	    init: function () {
	      var data = this.data;
	      var el = this.el;
	      el.addEventListener('click', function () {
		window.open(data.url, '_blank');
	      });
	    }
	  });        
	</script>
</head>

<?php 
  require('config/db.php');
?>

  <body style='margin : 0px; overflow: hidden;'>
  <div style='position: fixed; top: 10px; left: 50px; width:100%; text-align: center; z-index: 1;'>
  <?php 
            $sql = "SELECT * FROM images";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0){ 
          ?>
      <a href="load-images.php" class="btn btn-primary" style="left: 50px;">My Gallery</a>
  <?php 
            }
  ?>
  <?php 
            $sql = "SELECT * FROM documents";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0){ 
          ?>
      <a href="load-documents.php" class="btn btn-primary" style="left: 50px;">My Documents</a>
  <?php 
            }
  ?>
  </div>
  <div style='position: fixed; top: 60px; left: 50px; width:100%; text-align: center; z-index: 1;'>
  <?php 
            $sql = "SELECT * FROM resume";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $website = $row['website'];
            $facebook = $row['facebook'];
            $github = $row['github'];
            $linkedin = $row['linkedin'];
          ?>
          <?php
            if(!empty($website)){
              ?>
              <a href="<?php echo $website; ?>" style="left: 50px;"><img src="images/website.png" style="width: 50px; height: 50px"/></a>
              <?php
            }
          ?>
          <?php
            if(!empty($linkedin)){
              ?>
              <a href="<?php echo $linkedin; ?>" style="left: 50px;"><img src="images/linkedin.png" style="width: 50px; height: 50px"/></a>
              <?php
            }
          ?>
          <?php
            if(!empty($github)){
              ?>
              <a href="<?php echo $github; ?>" style="left: 50px;"><img src="images/github.png" style="width: 50px; height: 50px"/></a>
              <?php
            }
          ?>
          <?php
            if(!empty($facebook)){
              ?>
              <a href="<?php echo $facebook; ?>" style="left: 50px;"><img src="images/facebook.png" style="width: 50px; height: 50px"/></a>
              <?php
            }
          ?>
  </div>
    <a-scene embedded arjs>
      <a-marker preset="hiro">
          <?php 
            // $user_id = $_SESSION['id'];
            // $sql = "SELECT name FROM resume WHERE user_id = $user_id";
            // $result = mysqli_query($conn, $sql);
            // $row = mysqli_fetch_assoc($result);
          ?>
          <a-text value="Hello, welcome to my profile!" color="gray" width="10" z-offset="0.1" rotation="-90 0 0" position="-0.5 0 -2"></a-text>
          <?php 
            $sql = "SELECT * FROM videos";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount == 1){
              while($row = mysqli_fetch_assoc($result)){
                $video = $row['video'];
                echo "<script>console.log('$video')</script>";
          ?>
            <a-video src="uploads/videos/<?php echo $video; ?>" width="3" height="3" rotation="-90 0 0"></a-video>
          <?php
            }
          }
          ?>
          <?php 
            $sql = "SELECT * FROM images";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
                $image = $row['image'];
          ?>
          <a-plane width="3" height="3" src="uploads/images/<?php echo $image; ?>" rotation="-90 0 0" position="4 0 0"></a-plane>
          <!-- <a-plane width="0.5" height="0.5" src="images/photo.png" rotation="-90 0 0" position="-2 0 -0.5" navigate-on-click="url: https://google.com"></a-plane>
          <a-plane width="0.5" height="0.5" src="images/folder-flat.png" rotation="-90 0 0" position="-2 0 0" navigate-on-click="url: https://google.com>"></a-plane>
          <a-plane width="0.5" height="0.5" src="images/video1.png" rotation="-90 0 0" position="-2 0 0.5" navigate-on-click="url: https://google.com>"></a-plane> -->
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </body>
  </html>
