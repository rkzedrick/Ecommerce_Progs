<?php
    
    include("config.php");
    session_start();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        if (!$phpdb) {
            echo "<script>alert('Connection failed: " . mysqli_connect_error() . "');</script>";
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
            echo "<script>window.location.href='main.php';</script>";
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
    <link rel="stylesheet" type="text/css" href="register.css">
    <title>Registration Form</title>
</head>
<body style="background-color: lightblue;">
    <form action = "form.php" method = "POST">
        <h2>Registration Form</h2>
        <div class="Username">
            <label for="Username">Username:</label><br>    
            <input type="text" id="Username" name="username" placeholder="Username" required>
        </div>
        <div class="Password">
            <label for="Password">Password:</label><br>    
            <input type="text" id="Password" name="password" placeholder="Password" required>
        </div>
        <div class="ConfirmPassword">
            <label for="ConfirmPassword">Confirm Password:</label><br>    
            <input type="text" id="ConfirmPassword" name="confirmpassword" placeholder="Confirm Password" required>
        </div>
        <div class="StudID">
            <label for="StudentID">Student ID:</label><br>    
            <input type="text" id="StudentID" name="studid" placeholder="Student ID" required>
        </div>
        <div class="Label1">
            <label for="LastName">Last Name:</label><br>   
            <input type="text" id="LastName" name="lname" placeholder="Last Name" required>
        </div>
        <div class="Label2">
            <label for="GivenName">Given Name:</label><br>    
            <input type="text" id="GivenName" name="gname" placeholder="First Name" required>
        </div>
        <div class="Label3">
            <label for="MiddleName">Middle Name:</label><br>    
            <input type="text" id="MiddleName" name="mname" placeholder="MiddleName" required>
        </div>
        <div class="Label4">
            <label for="HomeAddress">Home Address:</label><br>    
            <input type="text" id="HomeAddress" name="address" placeholder="Home Address" required>
        </div>
        <div class="Gender">
            <label for="gender">Gender:</label><br>
            <input type="text" id="Gender" name="gender" placeholder="Gender" required>
        </div>
        <div class="Label5">
            <label for="ContactNumber">Contact Number:</label><br>    
            <input type="text" id="ContactNumber" name="contactno" placeholder="Contact  Number" required>
        </div>
        <div class="Label6">
            <label for="EmailAddress">Email Address:</label><br>    
            <input type="mail" id="EmailAddress" name="email" placeholder="Email  Address" required>
        </div>
        <div class="Label7">
            <label for="Birthday">Birthday: </label><br>    
            <input type="date" id="Birthday" name="birthday" placeholder="Birthday" required>
        </div>
        <div class="Label8">
            <label for="Age">Age: </label><br>    
            <input type="text" id="Age" name="age" placeholder="Age" required>
        </div>
        <div class="Label9">
            <label for="Religion">Religion: </label><br>    
            <input type="text" id="Religion" name="religion" placeholder="Religion" required>
        </div>  

        <div class= buttons>
            <div class = submit>
            <a href='login.php'><button class="button" type="submit"> Submit </button></a>
            </div>
            <div class = cancel>
            <a href='login.php'><button class="button" type="button"> Cancel </button></a>
            </div>
        </div>
        
    </form>

</body>
</html>