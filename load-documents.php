<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <script src="https://raw.githack.com/jeromeetienne/AR.js/2.0.5/aframe/build/aframe-ar.js"></script>
    <title>AResume</title>
</head>

<?php 
    require('config/db.php');

    $sql = "SELECT * FROM documents";
            $result = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result);
            if($rowcount > 0){
              while($row = mysqli_fetch_assoc($result)){
                $document = $row['document'];
                $id = $row['id'];
               
?>

<a href="uploads/documents/<?php echo $document;?>"><?php echo $document;?></a>
<br/>
<?php
              }
            }
?>
<?php
            require('footer.php');
?>