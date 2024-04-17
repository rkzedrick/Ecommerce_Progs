<?php
    
    include("config.php");
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="register_user.css">
    <title>Registration Form</title>
</head>
<body style="background-color: lightblue;">
    <form action = "insert_user.php" method = "POST">
        <h2>Registration Form</h2>
        
        <div class="UserType">
            <label for="UserType">User Type:</label><br>    
            <input type="text" id="UserType" name="usertype" placeholder="Staff/Student/Guest" required>
        </div>
        <div class="Label1">
            <label for="LastName">Last Name:</label><br>   
            <input type="text" id="LastName" name="lname" placeholder="Last Name" required>
        </div>
        <div class="Label2">
            <label for="FirstName">First Name:</label><br>    
            <input type="text" id="FirstName" name="fname" placeholder="First Name" required>
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
            <input type="text" id="ContactNumber" name="contactno" placeholder="Contact Number" required>
        </div>
        <div class="Label6">
            <label for="EmailAddress">Email Address:</label><br>    
            <input type="mail" id="EmailAddress" name="email" placeholder="Email Address" required>
        </div>
        <div class="Label7">
            <label for="Birthdate">Birthdate: </label><br>    
            <input type="date" id="Birthdate" name="birthdate" placeholder="Birthdate" required>
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
            <a href='admin_login.php'><button class="button" type="submit"> Submit </button></a>
            </div>
            <div class = cancel>
            <a href='admin_login.php'><button class="button" type="button"> Cancel </button></a>
            </div>
        </div>
        
    </form>

</body>
</html>