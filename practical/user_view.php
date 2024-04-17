<?php
    include("config.php");
    session_start();
    
       
    if (!isset($_SESSION['log_user'])) {
        header("location: login.php");
        exit();
    }
    
    $usrname = $_SESSION['log_user'];
    
    
    $mysql = "SELECT * FROM  user ";
    $result = mysqli_query($phpdb, $mysql);
    
    
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
       
        $userty = $row['user_type'];
        $lname = $row['last_name'];
        $fname = $row['first_name'];
        $mname = $row['middle_name'];
        $address = $row['address'];
        $gender = $row['gender'];
        $contact = $row['contact_number'];
        $emailaddress = $row['email_address'];
        $birthdate = $row['birth_date'];
        $age = $row['age'];
        $religion = $row['religion'];
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
    <link rel="stylesheet" type="text/css" href="user_view.css">
    <title>Main page</title>
</head>
<body style="background-color: lightpink;">

<div class = container>
<h2>User Information</h2>
<table >
  <tr>
    <th>User Type</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Middle Name</th>
    <th>Home Address</th>
    <th>Gender</th>
    <th>Contact Number</th>
    <th>Email Address</th>
    <th>Birthdate</th>
    <th>Age</th>
    <th>Religion</th>
  </tr>
  <?php foreach($result as $row): ?>
  <tr>
    <td><?= htmlspecialchars($row['user_type']) ?></td>
    <td><?= htmlspecialchars($row['last_name']) ?></td>
    <td><?= htmlspecialchars($row['first_name']) ?></td>
    <td><?= htmlspecialchars($row['middle_name']) ?></td>
    <td><?= htmlspecialchars($row['address']) ?></td>
    <td><?= htmlspecialchars($row['gender']) ?></td>
    <td><?= htmlspecialchars($row['contact_number']) ?></td>
    <td><?= htmlspecialchars($row['email_address']) ?></td>
    <td><?= htmlspecialchars($row['birth_date']) ?></td>
    <td><?= htmlspecialchars($row['age']) ?></td>
    <td><?= htmlspecialchars($row['religion']) ?></td>
  </tr>
  <?php endforeach ?>
</table>
    </table>
        
        <!-- <div class="UserType">
            <p>User Type: <?php echo $userty; ?> </p> 
        </div>
        <div class="Label1">
            <p>Last Name: <?php echo $lname; ?> </p>
        </div>
        <div class="Label2">
            <p>First Name: <?php echo $fname; ?>
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
            <p>Birthdate: <?php echo $birthdate; ?> </p>
        </div>
        <div class="Label8">
            <p>Age: <?php echo $age; ?> </p>
        </div>
        <div class="Label9">
            <p>Religion: <?php echo $religion; ?> </p>
        </div>   -->
<div class= buttons>
            <div class = logout>
            <a href='admin_login.php'><button class="button" type="button"> Logout </button></a>
            </div>
        </div>
</div>


    

</body>
</html>