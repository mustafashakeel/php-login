<?php

$dbhost = "localhost:8889";
$dbuser = "root";
$dbpass = "root";
$dbname = "login_project";
if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
    die(" failed to connect to database ");
}
