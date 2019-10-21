<?php require("components/header.php"); ?>
<body>
<?php require("components/navbar.php"); ?>

<div class="cards-collection">
    <div class="card bg-dark text-white">
    <img src="images/aresume-template.png" class="card-img" alt="...">
    <div class="card-img-overlay">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Details
        </button>
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

<?php require("components/footer.php"); ?>