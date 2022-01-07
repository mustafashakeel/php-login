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
    <title>Login Page</title>


</head>

<body>
    <div id="box">
        <form method="post">
            <div style="font-size:20px; margin:20px; color:white;">Login</div>
            <input type="text" class="text" name="user_name" placeholder="enter user name"><br>
            <input type="password" class="text" name="password" placeholder="enter password"><br>
            <input type="submit" class="button" name="button" value="Login"><br>

        </form>
        <a href="signup.php">Click here to Sign up </a>
    </div>

</body>

</html>