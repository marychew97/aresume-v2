<?php 
    $server = 'localhost';
    $host = 'root';
    $password = '';
    $database = 'aresume';

    $conn = mysqli_connect($server, $host, $password, $database);

    if(!$conn){
        die("Connection failed " . mysqli_connect_error());
    }
?>