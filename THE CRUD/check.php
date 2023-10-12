<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style1.css">
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
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link" href="search.html">SEARCH</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">user n°</th>
        <th scope="col">username</th>
        <th scope="col">password</th>
        <th scope="col">phone number</th>
        <th scope="col">idc</th>
        <th scope="col">operations</th>

      </tr>
    </thead>

    <tbody>
      <?php
      $sql = "SELECT * FROM crud";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $username = $row['username'];
          $password = $row['password'];
          $phonenumber = $row['phonenumber'];
          $idc = $row['idc'];

          echo '
        <tr>
            <th scope="row">' . $id . '</th>
            <td>' . $username . '</td>
            <td>' . $password . '</td>
            <td>' . $phonenumber . '</td>
            <td>' . $idc . '</td>
            <td>
                <form action="delete.php" method="GET">
                    <input type="hidden" name="deleteid" value="' . $id . '">
                    <button class="btn btn-danger"  value="' . $id . '" type="submit">DELETE</button>
                </form>
                <form action="edit.php" method="GET">
                    <input type="hidden" name="editid" value="' . $id . '">
                    <button class="btn btn-primary" type="submit">EDIT</button>
                </form>
            </td>
        </tr>';
        }
      }
      ?>

    </tbody>
  </table>
</body>

</html>