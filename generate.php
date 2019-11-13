<?php require('components/header.php');?>
<?php require('navbar.php');?>
<?php require('config/db.php'); ?>

<?php 
    $resume_id = $_GET['id'];
    $sql = "SELECT * FROM resume WHERE resume_id = $resume_id";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){
        $template = $row['template'];
        $name = $row['name'];
        $job = $row['job'];
        $email = $row['email'];
        $phone = $row['phone'];
        $location = $row['location'];
        $summary = $row['summary'];
        $website = $row['website'];
        $linkedin = $row['linkedin'];
        $github = $row['github'];
        $facebook = $row['facebook'];
        ?>
        <div style="background-image:url('images/<?php echo $template;?>')" class="page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-md-4">
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
                                <h4 style="color: #fff; text-align: center"><?php echo $job;?></h4>
                                <?php
                            }
                        ?>
                        <?php 
                            if(!empty($job)){
                                ?>
                                <h4 style="color: #fff; text-align: center"><?php echo $email;?></h4>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="col col-md-1"></div>
                    <div class="col col-md-7">
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
?>

<?php require('footer.php');?>