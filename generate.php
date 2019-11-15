<?php require('components/header.php');?>
<?php require('config/db.php'); ?>

<?php 
    $resume_id = $_GET['id'];
    $sql = "SELECT * FROM resume WHERE resume_id = $resume_id";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
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

        $institution = $row['institution'];
        $studyarea = $row['studyarea'];
        $edulevel = $row['edulevel'];
        $country = $row['country'];
        $city = $row['city'];
        $startdate = $row['startdate'];
        $enddate = $row['enddate'];
        $gpa = $row['gpa'];

        $company = $row['company'];
        $position = $row['position'];
        $work_country = $row['work_country'];
        $work_city = $row['work_city'];
        $work_startdate = $row['work_startdate'];
        $work_enddate = $row['work_enddate'];
        ?>
        <div style="background-image:url('images/aresume-template-background.png')" class="page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-md-4 column">
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
                                <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=https://aresumefyp.000webhostapp.com/scanner.php?id=<?php echo $resume_id;?>" style="display: inline-block; margin: auto; margin-right: 10px" alt="qr code" title="" />
                                <img src="images/hiro-marker.png" style="display: inline-block; margin: auto;float:right" alt="hiro ar marker" width="100px" height="100px"/>
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
                                    <div style="background-color: #424b54; padding: 10px 10px 10px 40px; color: #fff; margin-top: 20px"><h4><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Education</h4></div>
                                    <div style="padding: 10px 10px 10px 40px; color: #424b54;; font-weight: bold">
                                        <h5 style="margin-bottom:10px;"><?php echo $institution;?></h5>
                                        <p style="margin-bottom:0px; "><?php echo $studyarea;?> (<?php echo $edulevel;?>)</p>
                                        <p style="margin-bottom:0px; font-style: italic"><?php echo $city;?>, <?php echo $country;?></p>
                                        <p style="margin-bottom:10px; font-style: italic"><?php echo $startdate;?> - <?php echo $enddate;?></p>
                                        <?php if(!empty($gpa)) { ?>
                                            <p>GPA: <?php echo $gpa;?></p>
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
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
?>

<?php require('footer.php');?>