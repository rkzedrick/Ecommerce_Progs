
<?php
    session_start();
    $servername = "127.0.0.1:3307";
    $username = "root";
    $password = "";
    $database = "firstconnection";
    $conn = new mysqli($servername, $username, $password, $database);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
       $usrname = $_POST["username"];
       $psswrd = $_POST["password"];
       $conpsswrd = $_POST["confirmpassword"];
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

       $check_username = "SELECT username FROM student_table WHERE Username = '$usrname'";
        $result_user = mysqli_query($conn, $check_username);
    if(mysqli_num_rows($result_user) > 0) {
        echo "<script>alert('Username already exists. Please use different username.');</script>";
    } else {
    
        $check_email = "SELECT * FROM student_table WHERE Email_Address = '$emailaddress'";
        $result_email = mysqli_query($conn, $check_email);
        if (mysqli_num_rows($result_email) > 0){
            echo "<script>alert('Email address already exist. Please use different email.');</script>";
        } else {
            if ($psswrd !== $conpsswrd) {
                echo "<script>alert('Password and Confirm Password do not match. Please try again.');</script>";
            } else {
        
                $insert = "INSERT INTO student_table (Student_No, Username, Password, Student_ID, Last_Name, First_Name, Middle_Name, Address, 
                            Gender, Contact_number, Email_Address, Birthday, Age, Religion  ) 
                            VALUES ('','$usrname','$psswrd','$studid', '$lname', '$fname', '$mname', '$address', '$gender', '$contact', 
                                        '$emailaddress', '$birthday', '$age', '$religion')"; 
                if (mysqli_query($conn, $insert)) {
                    $_SESSION['log_user'] = $usrname;
                    header("location: login.php");
                    exit();
                } else {
                    echo "<script>alert('Error inserting data into database.');</script>";
                }
            }
        }
    }
                
                        
                                        
    }
                    
   

?>

