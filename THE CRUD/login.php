<?php
    include('connection.php');
    if(isset($_POST['login'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $phonenumber = $_POST['phonenumber'];
      $idc = $_POST['idc'];

      $stmt = $conn->prepare("SELECT * FROM crud WHERE username = ?");
      $stmt->bind_param("s" ,$username);
      $stmt->execute();
      $result = $stmt->get_result();

      if($result-> num_rows ===1){
        $row = $result->fetch_assoc();
        $hashedpassword = $row['password'];
        if(password_verify($password , $hashedpassword)){
          header("Location: welcome.php");

        }
        else{
          echo'<script>
          window.location.href="login.html";
          alert("connection failed.Invalid syntaxe or password");
          </script>';
        }
      }
      else{
        echo'<script>
        window.location.href="login.html";
        alert("connection failed.Invalid syntaxe or password");
        </script>';
      }
    }else{
      echo'<script>
      window.location.href="login.html";
      alert("connection failed.Invalid syntaxe or password");
      </script>';
    }
    
?>
