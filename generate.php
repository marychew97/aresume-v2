<?php require('components/header.php');?>
<?php require('config/db.php'); ?>

<?php 
    $resume_id = $_GET['id'];
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM template_temp AS tt 
            JOIN profile_temp AS pt ON tt.resume_id = pt.resume_id AND tt.user_id = pt.user_id
            JOIN institution_temp AS it ON tt.resume_id = it.resume_id AND tt.user_id = it.user_id
            JOIN work_temp AS wt ON tt.resume_id = wt.resume_id AND tt.user_id = wt.user_id
            JOIN award_temp AS awt ON tt.resume_id = awt.resume_id AND tt.user_id = awt.user_id
            JOIN activities_temp AS act ON tt.resume_id = act.resume_id AND tt.user_id = act.user_id";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $profile_image = $row['profile_image'];
        $name = $row['name'];
        $job = $row['job'];
        $email = $row['email'];
        $phone = $row['phone'];
        $location = $row['location'];
        $summary = $row['summary'];
        $website = preg_replace('#(^https?:\/\/(w{3}\.)?)|(\/$)#', '', $row['website']);
        $linkedin = preg_replace('#(^https?:\/\/(w{3}\.)?)|(\/$)#', '', $row['linkedin']);
        $github = preg_replace('#(^https?:\/\/(w{3}\.)?)|(\/$)#', '', $row['github']);
        $facebook = preg_replace('#(^https?:\/\/(w{3}\.)?)|(\/$)#', '', $row['facebook']);
        $video = $row['video'];

        $institution = $row['institution'];
        $studyarea = $row['studyarea'];
        $edulevel = $row['edulevel'];
        $country = $row['country'];
        $city = $row['city'];
        $startdate = $row['startdate'];
        $enddate = $row['enddate'];
        $gpa = $row['cgpa'];

        $company = $row['company'];
        $position = $row['position'];
        $work_country = $row['work_country'];
        $work_city = $row['work_city'];
        $work_startdate = $row['work_startdate'];
        $work_enddate = $row['work_enddate'];

        $activity_name = $row['activity_name'];
        $activity_country = $row['activity_country'];
        $activity_city = $row['activity_city'];
        $activity_startdate = $row['activity_startdate'];
        $activity_enddate = $row['activity_enddate'];
        $activity_desc = $row['activity_desc'];

        $award = $row['award'];
        $awarder = $row['awarder'];
        $award_date = $row['date'];
        $award_desc = $row['award_desc'];

        $query_string = urlencode("https://aresume-procom.000webhostapp.com/scanner-test-2.php?user_id=".$user_id."&resume_id=".$resume_id);

        ?>
        <div style="background-image:url('images/aresume-template-background.png')" class="page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-md-4 column">
                        <?php 
                            if(!empty($profile_image)){
                                ?>
                                <img src="uploads/images/<?php echo $profile_image; ?>" alt="profile-image" style="width: 60%; height: 15%; display: block; margin: auto; border-radius: 50%; margin-bottom: 20px;"/>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($name)){
                                ?>
                                <h4 style="color: #fff; text-align: center"><?php echo $name;?></h4>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($job)){
                                ?>
                                <h4 style="color: #fff; text-align: center; margin-top: 20px;"><?php echo $job;?></h4>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($video)){
                                ?>
                                <img src="ar-marker/pattern-profile_marker.png" alt="profile marker" style="width: 70px; height: 70px; display: block; margin: auto; margin-top: 20px;"/>
                                <?php
                            }
                        ?>
                        <div style="margin-top: 30px">
                        <?php 
                            if(!empty($location)){
                                ?>
                                <p style="color: #fff"><i style="color: #e1ce7a"class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $location;?></p>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($phone)){
                                ?>
                                <p style="color: #fff"><i style="color: #e1ce7a" class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $phone;?></p>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($job)){
                                ?>
                                <p style="color: #fff"><i style="color: #e1ce7a" class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $email;?></p>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($website)){
                                ?>
                                <p style="color: #fff"><i style="color: #e1ce7a" class="fa fa-globe" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $website;?></p>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($linkedin)){
                                ?>
                                <p style="color: #fff"><i style="color: #e1ce7a" class="fa fa-linkedin-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $linkedin;?></p>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($github)){
                                ?>
                                <p style="color: #fff"><i style="color: #e1ce7a" class="fa fa-github" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $github;?></p>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($facebook)){
                                ?>
                                <p style="color: #fff"><i style="color: #e1ce7a" class="fa fa-facebook-square" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;<?php echo $facebook;?></p>
                                <?php
                            }
                        ?>
                            <div class="marker">
                                <p style="color: #fff">Scan here for AR experience</p>
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=<?php echo $query_string;?>" style="display: inline-block; margin: auto; margin-right: 10px" alt="qr code" />
                                <!-- <img src="images/hiro-marker.png" style="display: inline-block; margin: auto;float:right" alt="hiro ar marker" width="100px" height="100px"/> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col col-md-1"></div> -->
                    <div class="col col-md-8" style="padding-left: 30px">
                        <?php 
                            if(!empty($summary)){
                                ?>
                                    <div style="background-color: #424b54; padding: 10px 10px 10px 40px; color: #fff;"><h4><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Career Objective</h4></div>
                                    <div style="padding: 10px 10px 10px 40px; color:#424b54; font-weight: bold">
                                        <p><?php echo $summary;?></p>
                                    </div>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($institution)){
                                ?>
                                    <div style="background-color: #424b54; padding: 10px 10px 10px 40px; color: #fff; margin-top: 20px">
                                        <h4 style="display:inline-block"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Education</h4>
                                        <img src="ar-marker/pattern-edu_marker.png" alt="education marker" style="width: 40px; height: 40px; display: inline-block; margin-left: 20px"/>
                                    </div>
                                    <div style="padding: 10px 10px 10px 40px; color: #424b54; font-weight: bold">
                                        <h5 style="margin-bottom:10px;"><?php echo $institution;?></h5>
                                        <p style="margin-bottom:0px; "><?php echo $studyarea;?> (<?php echo $edulevel;?>)</p>
                                        <p style="margin-bottom:0px; font-style: italic"><?php echo $city;?>, <?php echo $country;?></p>
                                        <p style="margin-bottom:10px; font-style: italic"><?php echo $startdate;?> - <?php echo $enddate;?></p>
                                        <?php if(!empty($gpa)) { ?>
                                            <p>CGPA: <?php echo $gpa;?></p>
                                        <?php } ?>
                                    </div>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($company)){
                                ?>
                                    <div style="background-color: #424b54; padding: 10px 10px 10px 40px; color: #fff; margin-top: 20px"><h4><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;&nbsp;Work History</h4></div>
                                    <div style="padding: 10px 10px 10px 40px; color: #424b54;; font-weight: bold">
                                        <h5 style="margin-bottom:10px;"><?php echo $position;?></h5>
                                        <p style="margin-bottom:10px;"><?php echo $company;?></p>
                                        <p style="margin-bottom:0px; font-style: italic"><?php echo $work_city;?>, <?php echo $work_country;?></p>
                                        <p style="margin-bottom:10px; font-style: italic"><?php echo $work_startdate;?> - <?php echo $work_enddate;?></p>
                                    </div>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($activity_name)){
                                ?>
                                    <div style="background-color: #424b54; padding: 10px 10px 10px 40px; color: #fff; margin-top: 20px">
                                        <h4 style="display:inline-block"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>&nbsp;&nbsp;Activities</h4>
                                        <img src="images/barcode5.png" alt="activity marker" style="width: 40px; height: 40px; display: inline-block; margin-left: 20px"/>
                                    </div>
                                    <div style="padding: 10px 10px 10px 40px; color: #424b54;; font-weight: bold">
                                        <h5 style="margin-bottom:10px;"><?php echo $activity_name;?></h5>
                                        <p style="margin-bottom:0px; font-style: italic"><?php echo $activity_city;?>, <?php echo $activity_country;?></p>
                                        <p style="margin-bottom:10px; font-style: italic"><?php echo $activity_startdate;?> - <?php echo $activity_enddate;?></p>
                                        <p style="margin-bottom:10px"><?php echo $activity_desc;?></p>
                                    </div>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($award)){
                                ?>
                                    <div style="background-color: #424b54; padding: 10px 10px 10px 40px; color: #fff; margin-top: 20px">
                                        <h4 style="display:inline-block"><i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;&nbsp;Awards</h4>
                                        <img src="ar-marker/kanji.png" alt="award marker" style="width: 40px; height: 40px; display: inline-block; margin-left: 20px"/>
                                    </div>
                                    <div style="padding: 10px 10px 10px 40px; color: #424b54;; font-weight: bold">
                                        <h5 style="margin-bottom:10px;"><?php echo $award;?>, <?php echo $awarder;?></h5>
                                        <p style="margin-bottom:0px; font-style: italic"><?php echo $award_date;?></p>
                                        <p style="margin-bottom:10px"><?php echo $award_desc;?></p>
                                    </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
?>

<?php require('footer.php');?>