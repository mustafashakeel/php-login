<?php

$dbhost = "localhost:8889";

$dbuser = "root";
$dbpass = "root";
$dbname = "mylogin";


$dbuser = "vanarts";

// Lets use Constants 
define("DBHOST", "localhost:8889");
define("DBUSER", "root");
define("DBPASS", "root");
define("DBNAME", "mylogin");


if (!$con = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME)) {
    die("Connection failed: " . mysqli_connect_error());
}

define("subjects", ["javascript", "Photoshop", " php"]);




// if (!$con = mysqli_connect(DBHOST, DBUSER, DBPASS, DBUNAME)) {
//     die("Connection failed: " . mysqli_connect_error());
// }


  

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