<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    
    $hostname = 'localhost';// '127.0.0.1';
    $username = 'phpmyadmin';
    $password = 'daffa417';
    $dbname = 'healnessia';

    //create connection
    $conn = mysqli_connect($hostname, $username, $password, $dbname); //or die('connection failed');
    
    //test connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // echo "Connected successfully";
?>
