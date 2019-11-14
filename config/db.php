<?php 
    // $server = '54.236.164.229';
    // $host = 'root';
    // $password = 'lamp-aws';
    // $database = 'aresume';
    $server = 'ec2-174-129-253-53.compute-1.amazonaws.com';
    $username = 'kjoiwgdfgwrxbf';
    $password = '3678cd37386aa59354c4478a4ea6d4b4016d16b49d83a6585fa07ec907d19dc5';
    $database = 'd23m1kun1tmsvj';
    $port = 5432;

    $conn = mysqli_connect($server, $username, $password, $database, $port);

    if(!$conn){
        die("Connection failed " . mysqli_connect_error());
    }
?>