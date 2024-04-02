<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="regform.css">
    <title>Registration Form</title>
</head>
<body style="background-color: lightblue;">
    <form action = "formreg.php" method = "POST">
        <h2>Registration Form</h2>
        <div class="UserName">
            <label for="UserName">UserName: </label><br>    
            <input type="text" id="UserName" name="username" placeholder="Username">
            <span class="error">* <?php echo $usernameErr;?></span>

        </div>
        <div class="PassWord">
            <label for="PassWord">Student ID:</label><br>    
            <input type="text" id="PassWord" name="password" placeholder="Password">
            <span class="error">* <?php echo $passwordErr;?></span>
        </div>
        <div class="StudID">
            <label for="StudentID">Student ID:</label><br>    
            <input type="text" id="StudentID" name="studid" placeholder="StudentID">
            <span class="error">* <?php echo $studidErr;?></span>
        </div>
        <div class="Label3">
            <label for="LastName">Last Name:</label><br>   
            <input type="text" id="LastName" name="lname" placeholder="Last Name">
            <span class="error">* <?php echo $lnameErr;?></span>
        </div>
        <div class="Label1">
            <label for="GivenName">Given Name:</label><br>    
            <input type="text" id="GivenName" name="gname" placeholder="First Name">
            <span class="error">* <?php echo $fnameErr;?></span>
        </div>
        <div class="Label2">
            <label for="MiddleName">Middle Name:</label><br>    
            <input type="text" id="MiddleName" name="mname" placeholder="MiddleName">
        </div>
        <div class="Label6">
            <label for="HomeAddress">Home Address:</label><br>    
            <input type="text" id="HomeAddress" name="address" placeholder="Home Address">
        </div>
        <div class="opts1">
            <label for="gender">Gender:</label><br>
            <input type="text" id="Gender" name="gender" placeholder="Gender">
        </div>
        <div class="Label5">
            <label for="ContactNumber">Contact Number:</label><br>    
            <input type="text" id="ContactNumber" name="contactno" placeholder="Contact  Number">
        </div>
        <div class="Label4">
            <label for="EmailAddress">Email Address:</label><br>    
            <input type="mail" id="EmailAddress" name="email" placeholder="Email  Address" size="30">
        </div>
        <div class="Label7">
            <label for="Birthday">Birthday: </label><br>    
            <input type="text" id="Birthday" name="birthday" placeholder="Birthday" size="30">
        </div>
        <div class="Label8">
            <label for="Age">Age: </label><br>    
            <input type="text" id="Age" name="age" placeholder="Age" size="30">
        </div>
        <div class="Label9">
            <label for="Religion">Religion: </label><br>    
            <input type="text" id="Religion" name="religion" placeholder="Religion" size="30">
        </div>

        

        <div class = "Button">
        <button name = "submit">Submit</button>
        </div>
    </form>

</body>
</html>