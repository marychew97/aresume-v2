<?php require("components/header.php"); ?>
<body>
<?php require("navbar.php"); ?>


<div class="container-fluid form-content">
    <div class="progress" style="height: 30px">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Personal information &nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i></div>
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Education background</div>
    </div>
    <div class="tab-container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-video-camera"  aria-hidden="true"></i>&nbsp;&nbsp;Videos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Photos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-file" aria-hidden="true"></i>&nbsp;&nbsp;Documents</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container">
                <div class="row">
                    <div class="col md-4 left-container">
                        <img src="images/video1.png" alt="video-image"/>
                    </div>
                    <div class="col md-8 right-container">
                    <h4>Upload your videos</h4>
                    <form method="POST" action="video-upload.php" enctype="multipart/form-data">
                    <div id="addVideos">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-add" id="addVideobutton" style="color: #2B303A">Add</button>
                        <button class="btn btn-primary btn-file" type="submit" name="submit"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;Upload</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="container">
                <div class="row">
                    <div class="col md-4 left-container">
                        <img src="images/photo.png" alt="video-image"/>
                    </div>
                    <div class="col md-8 right-container">
                    <h4>Upload your photos</h4>
                    <form method="POST" action="document-upload.php" enctype="multipart/form-data">
                    <div id="addDocuments">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-add" id="addDocbutton" style="color: #2B303A">Add</button>
                        <button class="btn btn-primary btn-file" type="submit" name="submit"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;Upload</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="container">
                <div class="row">
                    <div class="col md-4 left-container">
                        <img src="images/folder-flat.png" alt="video-image"/>
                    </div>
                    <div class="col md-8 right-container">
                    <h4>Upload your documents</h4>
                    <form method="POST" action="image-upload.php" enctype="multipart/form-data">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file" id="file">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <button class="btn btn-primary btn-add" id="addImgbutton" style="color: #2B303A">Add</button>
                        <button class="btn btn-primary btn-file" type="submit" name="submit"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;Upload</button>
                    </form>
                    </div>
                </div>
            </div>
        </div></div>
    </div>
    </div>
    <!-- <div class="row">
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
    </div> -->
</div>


<?php require("footer.php"); ?>