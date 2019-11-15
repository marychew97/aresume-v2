<?php require('components/header.php'); ?>
<?php require('navbar.php'); ?>
<?php require('config/db.php'); ?>

<div class="card card-collection" style="border-color:#2b303a;">
  <div class="card-header" style="background-color: #2b303a; color: #fff">
    <h5 style="text-align: center;">Choose a template</h5>
  </div>
  <div class="card-body" style="padding: 10px;margin:0px">
      <div class="container">
          <div class="row">
          <?php 
            $user_id = $_SESSION['id'];
            $sql = "SELECT * FROM template";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0){
                while($row = mysqli_fetch_assoc($result)){
            ?>
              <div class="col col-md-3">
              <div class="card mb-3">
              <img src="images/<?php echo $row['template'];?>" alt="<?php echo $row['template']; ?>" class="card-img-top" style="width: 100%"/>
              <div class="card-body" style="background-color: #2B303A">
                <button style="margin: 0px auto; display: block; background-color: #2B303A; border: none; color:#fff; cursor: pointer" class="btn btn-primary" type="submit"><a href="profile.php" style="color: #fff">Choose</a></button>
              </div>
                <!-- <form method="post" action="template-submit.php" id="template-form"> -->
                  <!-- <img src="images/<?php //echo //$row['template'];?>" alt="<?php //echo //$row['template']; ?>" class="card-img-top" style="width: 100%"/> -->
                  <!-- <div class="card-body" style="background-color: #2B303A">
                      <input type="hidden" value="<?php //echo //$row['blank_template']; ?>" name="template"/> -->
                      <!-- <a style="margin: 0px auto; display: block; background-color: #2B303A; border: none; color:#fff; cursor: pointer" href="create.php?template=<?php //echo $row['blank_template'];?>&id=<?php //echo $_SESSION['id']; ?>" class="btn btn-primary">Choose</a> -->
                      <!-- <button style="margin: 0px auto; display: block; background-color: #2B303A; border: none; color:#fff; cursor: pointer" class="btn btn-primary" type="submit">Choose</button> -->
                  <!-- </div>
                </form> -->
                </div>
              </div>
              <?php
            }
        }
    ?>
          </div>
      </div>
  </div>
</div>

<?php require('footer.php'); ?>