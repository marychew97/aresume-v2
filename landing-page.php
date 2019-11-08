<?php require("components/header.php"); ?>
<body>
<?php require("components/navbar.php"); ?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4">AResume</h1>
        <p class="lead">Build your very own augmented resume today</p>
        <div class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Sign up to create</div>
      </div>
      <div class="col"></div>
    </div>
    
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="signup.php" id="signup">
      <div class="modal-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter your username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Your Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Confirm Password">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary"  value="Submit"/>
      </div>
      </form>
    </div>
  </div>
</div>
<?php require("footer.php"); ?>