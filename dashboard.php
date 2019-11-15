<?php require("components/header.php"); ?>
<body>
<?php require("navbar.php"); ?>
<?php require('config/db.php'); ?>
<div class="card card-collection" style="border-color:#2b303a;">
  <div class="card-header" style="background-color: #2b303a; color: #fff">
    <h5>My Resume Collection</h5>
  </div>
  <div class="card-body">
    <div class="resume-list" style="padding: 20px">
      <?php 
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM resume WHERE user_id = $id";
        $result = mysqli_query($conn, $sql);

        $rowcount = mysqli_num_rows($result);
        if($rowcount == 0){
      ?>
        <p style="text-align: center">No resumes created yet.</p>
      <?php 
        } else{
          ?>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Resume</th>
                <th scope="col">Scanner URL</th>
                <th scope="col">View</th>
              </tr>
            </thead>
            <tbody>
          <?php
          while($row = mysqli_fetch_assoc($result)){
            ?>
              <tr>
                <th scope="row">Resume <?php echo $row['resume_id']; ?></th>
                <td><a href="scanner.php?id=<?php echo $row['resume_id'];?>">Resume <?php echo $row['resume_id']; ?> scanner URL<a></td>
                <td><a href="generate.php?id=<?php echo $row['resume_id'];?>"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;&nbsp;View<a></td>
              </tr>
            <?php
          }
          ?>
          </tbody>
          </table>
          <?php
        }
      ?>
    </div>
    <hr/>
    <div class="card-subsection">
      <h5 class="card-title">Create your resume here</h5>
      <a href="template.php" class="btn btn-primary btn-create">Create</a>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php require("footer.php"); ?>