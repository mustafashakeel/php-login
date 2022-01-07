<?php 

include("connect.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] =="POST"){

    // echo " <h1> from POST FORM</h1>";

    // Collect the Form Data 
   $name =$_POST['user_name'];
   $password = $_POST['password'];

// Get method
//    $name =$_GET['user_name'];
//    $password = $_GET['password'];


  // echo $name ."  password " .$password;
   if(!empty($name) && !empty($password) && !is_numeric($name)){


    // 
    $user_id = random_num(20);
    // echo "<h1> ".$user_id ."</h1>";
    $query = "insert into users(user_id,user_name,password) values('$user_id','$name','$password')";
    mysqli_query($con, $query);
// Login page

    header("Location:login.php");



   }else{
       echo "Please enter username and password";
   }


}


?>

<!DOCTYPE html>
<html lang="en">
<style>
    .text {

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    .button {

        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box {

        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>


</head>

<body>
    <div id="box">
        <form method="post">
            <div style="font-size:20px; margin:20px; color:white;">Signup  Page</div>
            <input type="text" class="text" name="user_name" placeholder="enter user name"><br>
            <input type="password" class="text" name="password" placeholder="enter password"><br>
            <input type="submit" class="button" name="button" value="Signup"><br>

        </form>
        <a href="signup.php">Click here to login up </a>
    </div>

</body>

</html>