
<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "practicalmidterm";
    $conn = new mysqli($servername, $username, $password, $database);

    if($_SERVER["REQUEST_METHOD"] == "POST"){
       $userty = $_POST["usertype"];
       $lname = $_POST["lname"];
       $fname = $_POST["fname"];
       $mname = $_POST["mname"];
       $address = $_POST["address"];
       $gender = $_POST["gender"];
       $contact = $_POST["contactno"];
       $emailaddress = $_POST["email"];
       $birthdate = $_POST["birthdate"];
       $age = $_POST["age"];
       $religion = $_POST["religion"];

       $insert = "INSERT INTO user (user_id, user_type , last_name, first_name, middle_name, address, 
                            gender, contact_number, email_address, birth_date, age, religion  ) 
                            VALUES ('','$userty', '$lname', '$fname', '$mname', '$address', '$gender', '$contact', 
                                        '$emailaddress', '$birthdate', '$age', '$religion')";
            mysqli_query($conn, $insert);
            }
        

?>

