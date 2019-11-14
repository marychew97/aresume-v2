<?php 
    // $server = '54.236.164.229';
    // $host = 'root';
    // $password = 'lamp-aws';
    // $database = 'aresume';
    $server = 'localhost';
    $host = 'root';
    $password = '';
    $database = 'd23m1kun1tmsvj';

    $conn = mysqli_connect($server, $host, $password, $database);

    if(!$conn){
        die("Connection failed " . mysqli_connect_error());
    }
?>