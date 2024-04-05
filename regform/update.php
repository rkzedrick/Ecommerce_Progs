<?php
include("config.php");

if(isset($_GET['scope']) && isset($_GET['value'])) {
    $scope = $_GET['scope'];
    $value = $_GET['value'];
    

    $mysql = "SELECT * FROM student_table WHERE $scope = '$value'";
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
        echo "Error: Student information not found.";
        exit(); 
    }
} else {
    echo "Error: Field and value not provided.";
    exit(); 
}

if(isset($_POST['update'])) {
       $studid = $_POST["studid"];
       $lname = $_POST["lname"];
       $fname = $_POST["gname"];
       $mname = $_POST["mname"];
       $address = $_POST["address"];
       $gender = $_POST["gender"];
       $contact = $_POST["contactno"];
       $emailaddress = $_POST["email"];
       $birthday = $_POST["birthday"];
       $age = $_POST["age"];
       $religion = $_POST["religion"];

   
    $mysql = "UPDATE student_table SET 
            Last_Name = '$lname',
            First_Name = '$fname',
            Middle_Name = '$mname',
            Address = '$address',
            Gender = '$gender',
            Contact_number = '$contact',
            Email_Address = '$emailaddress',
            Birthday = '$birthday',
            Age = '$age',
            Religion = '$religion'
            WHERE Student_ID = '$studid'";

    if (mysqli_query($phpdb, $mysql)) {
        header("location: main.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($phpdb);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="update.css">
    <title>Update Information</title>
</head>
<body style="background-color: lightblue;">
<div class="container">
<h2>User Information</h2>
        <form action="" method="post">
                <input type="hidden" name="studid" value="<?php echo $studid; ?>">
                Last Name: <input type="text" name="lname" value="<?php echo $lname; ?>"><br> 
                First Name: <input type="text" name="gname" value="<?php echo $fname; ?>"><br>
                Middle Name: <input type="text" name="mname" value="<?php echo $mname; ?>"><br>
                Address: <input type="text" name="address" value="<?php echo $address; ?>"><br>
                Gender: <input type="text" name="gender" value="<?php echo $gender; ?>"><br>
                Contact Number: <input type="text" name="contactno" value="<?php echo $contact; ?>"><br>
                Email: <input type="email" name="email" value="<?php echo $emailaddress; ?>"><br>
                Birthday: <input type="date" name="birthday" value="<?php echo $birthday; ?>"><br>
                Age: <input type="number" name="age" value="<?php echo $age; ?>"><br>
                Religion: <input type="text" name="religion" value="<?php echo $religion; ?>"><br>
                <input type="submit" name="update" value="Update">
        </form>
</div>
</body>
</html>
