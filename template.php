<?php require('components/header.php'); ?>
<?php require('navbar.php'); ?>
<?php require('config/db.php'); ?>

<div class="card card-collection">
  <div class="card-header">
    <h5 style="text-align: center">Choose a template</h5>
  </div>
  <div class="card-body" style="padding: 10px;margin:0px">
      <div class="container">
          <div class="row">
          <?php 
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
                    <a style="margin: 0px auto; display: block; background-color: #2B303A; border: none; color:#fff; cursor: pointer" href="create.php?php=<?php echo $row['blank_template']; ?>" class="btn btn-primary">Choose</a>
                </div>
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