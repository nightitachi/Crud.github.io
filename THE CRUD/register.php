<?php
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $phonenumber = $_POST['phonenumber'];
  $idc = $_POST['idc'];
  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);


  $sql = "INSERT INTO crud (username , password , phonenumber , idc) VALUES('$username' , '$hashedpassword' , '$phonenumber','$idc' )";
  if ($conn->query($sql) === TRUE) {
    header('location: check.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>
