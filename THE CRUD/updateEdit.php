<?php
include('connection.php');
$id = $_GET['editid'];
$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$password = $row['password'];
$phonenumber = $row['phonenumber'];
$idc = $row['idc'];
if (isset($_GET['editid'])) {
  $username = $_GET['username'];
  $password = $_GET['password'];
  $phonenumber = $_GET['phonenumber'];
  $idc = $_GET['idc'];
  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);


  $sql = "UPDATE crud SET  username = '$username' , password = '$password', phonenumber='$phonenumber' , idc = '$idc' WHERE id= $id";
  $result = mysqli_query($conn , $sql);
  if($result){
    header('location: check.php');
  }
  else{
    die(mysqli_error($conn));
  }
}

$conn->close();

?>