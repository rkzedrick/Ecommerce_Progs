<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "firstconnection";
$conn = new mysqli($servername, $username, $password, $database);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usrname = $psswrd = $studid = $lname = $fname = $mname = $address = $gender = $contact = $emailaddress = $birthday = $age = $religion = "";
    $usernameErr = $passwordErr = $studidErr = $lnameErr = $emailErr = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $usrname = test_input($_POST["username"]);

        $check_username_query = "SELECT * FROM firstconnection WHERE Student_ID='$usrname'";
        $result = mysqli_query($conn, $check_username_query);
        if(mysqli_num_rows($result) > 0){
            $usernameErr = "Username is already taken";
        }
    
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $psswrd = test_input($_POST["password"]);
    }

    if (empty($_POST["studid"])) {
        $studidErr = "Student ID is required";
    } else {
        $studid = test_input($_POST["studid"]);
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Last Name is required";
    } else {
        $lname = test_input($_POST["lname"]);
    }

    if (empty($_POST["fname"])) {
        $fnameErr = "First Name is required";
    } else {
        $fname = test_input($_POST["fname"]);
    }

    if (empty($usernameErr) && empty($passwordErr) && empty($studidErr) && empty($lnameErr) && empty($fnameErr)) {
        $insert = "INSERT INTO student_table (Student_ID, Password, Student_No, Last_Name, First_Name, Middle_Name, Address, 
        Gender, Contact_number, Email_Address, Birthday, Age, Religion) 
        VALUES ('$usrname', '$psswrd', '$studid', '$lname', '$fname', '$mname', '$address', '$gender', '$contact', 
        '$emailaddress', '$birthday', '$age', '$religion')";

        mysqli_query($conn, $insert);
    }
}
?>