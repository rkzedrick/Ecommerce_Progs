<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (!$phpdb) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $usrname= trim($_POST['username']);
    $psswrd = trim($_POST['password']);

    
    if (empty($usrname)) {
        echo "<script>alert('Username is required');</script>";
    }

   
    if (empty($psswrd)) {
        echo "<script>alert('Password is required');</script>";
    }

    if (empty($usrname) || empty($psswrd)) {
       
        exit();
    }

    
    $username = mysqli_real_escape_string($phpdb, $usrname);
    $password = mysqli_real_escape_string($phpdb, $psswrd);

    
    $mysql = "SELECT * FROM student_table WHERE Username = '$usrname' and Password = '$psswrd'";
    $result = mysqli_query($phpdb, $mysql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        
        $_SESSION['log_user'] = $usrname;
        header("location: main.php");
        exit(); 
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Welcome!</title>
</head>
<body style="background-color: lightblue;">
    <form action = "" method = "POST">
        <h2>Login</h2>
        <div class="Username">
            <label for="Username">Username:</label><br>    
            <input class="input" type="text" name="username" placeholder="Username" required>
        </div>
        <div class="Password">
            <label for="Password">Password:</label><br>    
            <input class="input" type="password" name="password" placeholder="Password" required>
        </div>
        
        <div class= buttons>
            <div class = login>
            <a href='main.php'><button class="login" type="submit">Login</button></a>
            </div>
            <div class = register>
            <a href='register.php'><button class="register" type="button">Signup</button></a>
            </div>
        </div>
        
    </form>

</body>
</html>