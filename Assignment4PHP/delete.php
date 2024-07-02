<?php
    $serverName ='localhost:3307';
    $userName='root';
    $password='';
    $dbname='test';

    $conn = mysqli_connect($serverName, $userName, $password, $dbname);
    
    if (mysqli_connect_error()) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connection Successful<br>";

    $email = $_POST['email'];
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $userName=$_POST['userName'];
    
    $selectSql = "SELECT * FROM leaseCustomers WHERE email = '$email'";
    $result = mysqli_query($conn, $selectSql);
    
    
    
    if (mysqli_num_rows($result) > 0) {
        $deleteSql = "DELETE FROM leaseCustomers WHERE email = '$email'";
        if (mysqli_query($conn, $deleteSql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }} else {
        echo "Record for: $firstName $lastName, email $email, user $userName does not exist";
    }
    


    ?>
