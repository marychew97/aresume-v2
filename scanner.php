
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <script src="https://raw.githack.com/jeromeetienne/AR.js/2.0.5/aframe/build/aframe-ar.js"></script>
    <title>AResume</title>

    <link rel="stylesheet" href="css/navbar.css" />
</head>

<?php 
  require('config/db.php');
?>

  <body style='margin : 0px; overflow: hidden;'>
  <div style='position: fixed; top: 10px; width:100%; text-align: center; z-index: 1;'>
  <?php 
            $sql = "SELECT * FROM images";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0){ 
          ?>
      <a href="/aresume/load-images.php" class="btn btn-primary">My Gallery</a>
  <?php 
            }
  ?>
  <?php 
            $sql = "SELECT * FROM images";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0){ 
          ?>
      <button class="btn btn-primary">
          My Documents
      </button>
  <?php 
            }
  ?>
  </div>
    <a-scene embedded arjs>
      <a-marker preset="hiro">
          <?php 
            $sql = "SELECT * FROM images";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0){
              while($rowcount = mysqli_fetch_assoc($result)){
                $image = $rowcount['image'];
                echo "<script>console.log('$image')</script>";
          ?>
          <!-- <a-box position='0 0.5 0' material='color: yellow;'></a-box> -->
          <!-- <a-plane width="1.0" height="1.0" src="https://www.youtube.com/watch?v=0aj8ajIBAVo&list=RD0aj8ajIBAVo&start_radio=1" rotation="-90 0 0"></a-plane> -->
          <a-video src="bigfoot.mp4" width="1" height="1" rotation="-90 0 0"></a-video>
          <?php
            }
          }
          ?>
      </a-marker>
      <a-entity camera></a-entity>
    </a-scene>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    </body>
  </html>
