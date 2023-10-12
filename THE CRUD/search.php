<?php 
include('connection.php');

if(isset($_POST['submit'])){
    $searchbar = $_POST['searchbar'];

    // Use a prepared statement to prevent SQL injection
    $sth = $conn->prepare("SELECT * FROM crud WHERE username LIKE ?");
    
    // Bind the parameter (use "%" for a wildcard search)
    $searchTerm = '%' . $searchbar . '%';
    $sth->bind_param('s', $searchTerm);
    
    // Execute the query
    $sth->execute();
    
    // Get the result set
    $result = $sth->get_result();
    
    // Display search results
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output data from each row
            echo 'User ID: ' . $row['id'] . '<br>';
            echo 'Username: ' . $row['username'] . '<br>';
            echo 'Password: ' . $row['password'] . '<br>';
            echo 'Phone Number: ' . $row['phonenumber'] . '<br>';
            echo 'IDC: ' . $row['idc'] . '<br>';
            echo '<hr>';
        }
    } else {
        echo 'No results found.';
    }
    
    // Close the prepared statement
    $sth->close();
}
?>
