<?php require("components/header.php"); ?>
<body>
<?php require("navbar.php"); ?>
<?php require("config/db.php"); ?>

<div class="container-fluid form-content">
    <div class="progress" style="height: 30px">
        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">Personal information &nbsp;<i class="fa fa-check-circle" aria-hidden="true"></i></div>
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">Education background</div>
    </div>
    <div class="tab-container">
        <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: none">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div style="margin-top: 50px">
                <i class="fa fa-user" aria-hidden="true" style="font-size: 30px; display: block; margin: auto; text-align: center; margin-bottom: 10px; color: #D64933"></i>
                <h6 style="text-align: center; color: #D64933">My Personal Information</h6>
                <form method="POST" action="create-resume.php" id="create-resume">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Current Job</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="What do you do?">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email">
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Phone</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your contact number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Location</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Where do you live?">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Summary</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell us about yourself"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="profile-upload">
                            <label class="custom-file-label" for="inputGroupFile01">Upload your profile picture</label>
                        </div>
                    </div>
                    <h6 style="text-align: center; margin-top: 100px">Social medias</h6>
                    <small class="form-text text-muted" style="text-align: center">Provide links for any social media that you have</small>
                    <div class="container-fluid" style="margin-top: 50px">
                        <div class="row">
                            <div class="col col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;Website</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your website link">
                                </div>
                            </div>
                            <div class="col col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><i class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;&nbsp;LinkedIn</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your LinkedIn profile link">
                                </div>
                            </div>
                            <div class="col col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><i class="fa fa-github" aria-hidden="true"></i>&nbsp;&nbsp;GitHub</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your GitHub profile link">
                                </div>
                            </div>
                            <div class="col col-sm-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><i class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp;&nbsp;Facebook</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Facebook profile link">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <button class="btn btn-primary btn-file" name="submit" href="#profile" aria-controls="profile"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Next</button> -->
                    <!-- <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Next</a> -->
                    <button class="btn btn-primary btn-file" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Next</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div style="margin-top: 50px">
            <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 30px; display: block; margin: auto; text-align: center; margin-bottom: 10px; color: #D64933"></i>
            <h6 style="text-align: center; color: #D64933">My Education Background</h6>
            <form method="POST" action="create-resume.php" id="create-resume">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Institution</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Which institution do/did you study?">
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Area of study</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="What do you study?">
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Your highest education level</label>
                            <select class="custom-select">
                                <option value="Some High School">Some High School</option>
                                <option value="High School Diploma">High School Diploma</option>
                                <option value="Some College">Some College</option>
                                <option value="Associate Degree">Associate Degree</option>
                                <option value="Bachelor's Degree">Bachelor's Degree</option>
                                <option value="Master's Degree or Higher">Master's Degree or Higher</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Country</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Which country do you study?">
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">City</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Which city do you study?">
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Start Date</label>
                            <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="The starting date of your study">
                        </div>
                    </div>
                    <div class="col col-sm-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">End Date</label>
                            <input type="date" class="form-control" id="exampleInputPassword1" placeholder="The ending date of your study">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Present</label>
                            </div>
                        </div>
                    </div>
                    <div class="col col-sm-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">GPA</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your GPA">
                    </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-file"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;Add</button>
                <button class="btn btn-primary btn-file" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;Next</button>
                </form>
            </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>
    </div>
</div>

<!-- <div class="container-fluid form-content">
    <div class="tab-container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-video-camera"  aria-hidden="true"></i>&nbsp;&nbsp;Videos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-file" aria-hidden="true"></i>&nbsp;&nbsp;Documents</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Photos</a>
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
                                <input type="file" class="custom-file-input" id="video-input" aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
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
                        <img src="images/folder-flat.png" alt="folder-image"/>
                    </div>
                    <div class="col md-8 right-container">
                    <h4>Upload your documents</h4>
                    <form method="POST" action="document-upload.php" enctype="multipart/form-data">
                        <div id="addDocuments">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="document-input" aria-describedby="inputGroupFileAddon01">
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
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"> -->
        <!-- <div class="container">
                <div class="row"> -->
                    <!-- <div class="col md-4 left-container">
                        <img src="images/photo.png" alt="photo-image"/>
                    </div> -->
                    <!-- <div class="col md-8 right-container"> -->
                    <h4 style="margin-top: 50px; text-align:center">Upload your photos</h4>
                    <form method="POST" action="image-upload.php" enctype="multipart/form-data" id="image-upload-form">
                    <span class="btn btn-primary btn-file"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;Add and upload <input type="file" name="file" id="photo-input"/></span>
                        <!-- <div id="addPhotos">
                            <input type="file" name="files[]" id="files" multiple /> -->
                            <!-- <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file[]" id="photo-input" aria-describedby="inputGroupFileAddon01" multiple>
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div> -->
                        <!-- </div> -->
                        <div id="gallery" class="container">
                            <div class="row" style="padding-top:10px">
                                
                                <?php 
                                    $sql = "SELECT * FROM images";
                                    $result = mysqli_query($conn, $sql);

                                    $rowcount = mysqli_num_rows($result);
                                    if($rowcount > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            $id = $row['id'];
                                            $image = $row['image'];
                                ?>
                                <div class="col col-sm-3" id="addPhotos">
                                    <img src="uploads/images/<?php echo $image; ?>" alt="<?php echo $id;?>" style="width:150px; height:150px; display: block; margin: auto;"/>
                                    <br/>
                                    <button class="btn btn-danger btn-delete" data-toggle="modal" data-target="#exampleModal" id=<?php echo $id; ?>>Delete</button>
                                </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <!-- <button class="btn btn-primary btn-add" id="addImgbutton" style="color: #2B303A">Add</button> -->
                        <!-- <button class="btn btn-primary btn-file" type="submit" name="submit"><i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;&nbsp;Upload</button> -->
                    </form>
                    <!-- </div>
                </div> -->
            </div>
        </div></div>
    </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete image?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="delete-image.php" >
                <div class="modal-body">
                    Are you sure you want to delete this image?
                    <input type="hidden" id="delete-id" name="id"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
            </div>
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