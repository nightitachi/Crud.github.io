<?php
    include('connection.php'); 
    if(isset($_GET['deleteid'])){
      $id = $_GET['deleteid'];
      $sql = "DELETE FROM crud WHERE id = $id";
      $result = mysqli_query($conn , $sql);
      if($result){
        header('location: check.php');
      }
      else{
        die(mysqli_error($conn));
      }
    }
?>