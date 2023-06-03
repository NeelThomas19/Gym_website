<?php

if (isset($_POST['upload'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$emailid = $_POST['emailid'];
$phonenumber = $_POST['phonenumber'];
$gender = $_POST['gender'];

$sql = "INSERT INTO `registration` (`firstname`, `lastname`, `emailid`, `phonenumber`, `gender` , `date`) VALUES ('$firstname', '$lastname', '$emailid', '$phonenumber', '$gender', current_timestamp());";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<style>
    body{
        margin: 0px;
        padding: 0px;
        background: url('image/anirudh-Xu4Pz7GI9JY-unsplash.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        height: 85vh;
    }
    form{
        color: white;
        border: 2px solid white;
        width: 30%;
        height: auto;
        margin: 100px 500px;
        padding: 20px 50px;
        
    }
    .form input{
        background: none;
        border: none;
        outline: none;
        border-bottom: 2px solid white;
        color: white;
    }
    #button input{
        margin: 15px 150px;
        border-radius: 5px;
        background: none;
        border: 2px solid white;
        color: white;
        font-size: 22px;
    }
    #button:hover input{
        cursor: pointer;
    }
    marquee{
        color: orangered;
        font-size: 50px;
        border: 1px solid gold;
        background-color: rgb(255, 251, 0);
    }
</style>
<body>
    <form>
        <div class="form">
            <label for="fname">First Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
            <input type="text" id="firstname" name="firstname" placeholder="First Name"><br><br>
        </div>
        <div class="form">
            <label for="lname">Last Name:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
            <input type="text" id="lastname" name="lastname" placeholder="Last Name"><br></br>
            
        </div>
        <div class="form">
            <label for="email">E-mail:</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;
            <input type="email" id="emailid" name="emailid" placeholder="E-mail"><br><br>
        </div>
        <div class="form">
            <label for="phone">Contact Number:</label>&nbsp;
            <input type="tel" name="phonenumber" placeholder="Contact Number"><br><br>
        </div>
        <div class="form">
            Gender:<br>
            <label for="male"><input type="radio" name="gender">Male</label>
            <label for="female"><input type="radio" name="gender">Female</label>
            <label for="others"><input type="radio" name="gender">Others</label>
        </div>
        <div id="button" class="Submit">
            <a href="Fitness Area.html"><input type="button"  name="upload" value="Submit"></a>
        </div>
    </form>
    <marquee behavior="sliding" direction="right" scrollamount="25" >First 50 customers will get special discount!!</marquee>
    <div id="content"></div>
</body>
</html>