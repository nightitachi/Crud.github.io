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


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>coordinations register</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/thE%20CRUD/login.html">LOGIN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/THE%20CRUD/check.php">USERS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/THE%20CRUD/register.html">ADD NEW</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <form action="updateEdit.php" name="formreg" id="formreg" method="get">
    <label id="label">Username :</label>
    
    
    <input type="text" name="username" id="user" value="<?php echo $username ?>"><br><br>
    <label id="label">Password :</label>
    <input type="password" name="password" id="pass" value="<?php echo $password ?>"><br><br>
    <label id="label">Phone number :</label>
    <input type="text" name="phonenumber" id="phn" value="<?php echo $phonenumber ?>"><br><br>
    <label id="label">IDC :</label>
    <input type="text" name="idc" id="idc" value="<?php echo $idc ?>"><br><br>
    <input type="hidden" name="editid" value="<?php echo $_GET['editid'] ?>">
    
    
    <button type="submit" name="save" id="save">UPDATE</button>
</form>

</body>

</html>