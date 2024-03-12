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
    <div class="Label1">
            <label for="GivenName">Given Name:</label><br>    
            <input type="text" id="GivenName" name="GivenName" placeholder="First Name">
        </div>
        <div class="Label2">
            <label for="MiddleInitial">Middle Initial:</label><br>    
            <input type="text" id="MiddleInitial" name="MiddleInitial" placeholder="Middle Initial">
        </div>
        <div class="Label3">
            <label for="LastName">Last Name:</label><br>   
            <input type="text" id="LastName" name="LastName" placeholder="Last Name">
        </div>
        <div class="opts1">
            <label for="gender">Gender:</label><br>

                <select id="gends" >
                    <option value="pls">Please select an option</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Others</option>
                    <option value="xxx">Rather not say</option>
                </select><br>
        </div>
        <div class="spec">
            <label for="spec">if others, please specify</label><br>   
            <input type="text" id="spec" name="spec" placeholder="specify your gender">
        </div>
        <div class="Label4">
            <label for="EmailAddress">Email Address:</label><br>    
            <input type="text" id="EmailAddress" name="EmailAddress" placeholder="Email  Address" size="30">
        </div>

        <div class="Label5">
            <label for="ContactNumber">Contact Number:</label><br>    
            <input type="text" id="ContactNumber" name="ContactNumber" placeholder="Contact  Number">
        </div>

        <div class="Label6">
            <label for="HomeAddress">Home Address:</label><br>    
            <input type="text" id="HomeAddress" name="HomeAddress" placeholder="Home  Address">
        </div>

        <div class = "Button">
        <button name = "submit">Submit</button>
        </div>
    </form>

</body>
</html>