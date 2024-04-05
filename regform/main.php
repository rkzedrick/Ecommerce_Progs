<?php
    include("config.php");
    session_start();
    
       
    if (!isset($_SESSION['log_user'])) {
        header("location: login.php");
        exit();
    }
    
    $usrname = $_SESSION['log_user'];
    
    
    $mysql = "SELECT * FROM student_table WHERE Username = '$usrname'";
    $result = mysqli_query($phpdb, $mysql);
    
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
       
        $studid = $row['Student_ID'];
        $lname = $row['Last_Name'];
        $fname = $row['First_Name'];
        $mname = $row['Middle_Name'];
        $address = $row['Address'];
        $gender = $row['Gender'];
        $contact = $row['Contact_number'];
        $emailaddress = $row['Email_Address'];
        $birthday = $row['Birthday'];
        $age = $row['Age'];
        $religion = $row['Religion'];
    } else {
        $errorMessage = "Error: Student information not found.";
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Main page</title>
</head>
<body style="background-color: lightpink;">

<div class = container>
<h2>User Information</h2>
        
        <div class="StudID">
            <p>Student ID: <?php echo $studid; ?> </p> 
        </div>
        <div class="Label1">
            <p>Last Name: <?php echo $lname; ?> </p>
        </div>
        <div class="Label2">
            <p>Given Name: <?php echo $fname; ?>
        </div>
        <div class="Label3">
            <p>Middle Name: <?php echo $mname; ?> </p>
        </div>
        <div class="Label4">
            <p>Home Address: <?php echo $address; ?> </p>
        </div>
        <div class="Gender">
            <p>Gender: <?php echo $gender; ?> </p>
        </div>
        <div class="Label5">
            <p>Contact Number: <?php echo $contact; ?> </p>
        </div>
        <div class="Label6">
            <p>Email Address: <br> <br> <?php echo $emailaddress ?> </p>
        </div>
        <div class="Label7">
            <p>Birthday: <?php echo $birthday; ?> </p>
        </div>
        <div class="Label8">
            <p>Age: <?php echo $age; ?> </p>
        </div>
        <div class="Label9">
            <p>Religion: <?php echo $religion; ?> </p>
        </div>  
<div class= buttons>
            <div class = update>
            <a href="update.php?scope=Last_Name&value=<?php echo $lname; ?>"><button class="update" type = "button">Update</a></button>
            </div>
            <div class = logout>
            <a href='login.php'><button class="button" type="button"> Logout </button></a>
            </div>
        </div>
</div>


    

</body>
</html>