<?php

$dbhost = "localhost:8889";
$dbuser = "root";
$dbpass = "root";
$dbname = "mylogin";

// Method 1 - mysqli Procedural
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die(" failed to connect to database ");

}

// Method 2 mysqli Object Oriented 


    // if (new mysqli($dbhost, $dbuser, $dbpass, $dbname)) {
    //     die(" failed to connect to database ");
    // }


// Method 3  - PDO 

// try {
//     $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//   } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//   }