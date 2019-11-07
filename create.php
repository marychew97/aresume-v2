<?php require("components/header.php"); ?>
<body>
<?php require("components/navbar.php"); ?>


<div class="container-fluid form-content">
    <div class="progress" style="height: 30px">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Personal information &nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i></div>
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Education background</div>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="accordion form-card" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fa fa-video-camera"  aria-hidden="true"></i>&nbsp;&nbsp;Videos
                    </button>
                </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    Upload your videos
                    <form method="POST" action="video-upload.php" enctype="multipart/form-data">
                    <div id="addVideos">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-file" id="addVideobutton">ADD</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fa fa-file" aria-hidden="true"></i>&nbsp;&nbsp;Documents
                    </button>
                </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                   Upload your documents
                   <form method="POST" action="document-upload.php" enctype="multipart/form-data">
                    <div id="addDocuments">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-file" id="addDocbutton">ADD</button>
                    </form>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Photos
                    </button>
                </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    Upload your photos
                    <form method="POST" action="image-upload.php" enctype="multipart/form-data">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file" id="file">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <input class="btn btn-primary btn-file" type="submit" value="submit" name="submit" />
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md">
            <object width="400px" height="600px" data="fpdf"></object>
        </div>
    </div>
</div>


<?php require("components/footer.php"); ?>