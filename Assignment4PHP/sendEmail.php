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


$createTableSql = "CREATE TABLE IF NOT EXISTS comment (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullName VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    preference VARCHAR(100) NOT NULL,
    comments VARCHAR(10000) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $createTableSql)) {
    echo "Table comment created successfully or already exists<br>";
} else {
    die("Error creating table: " . mysqli_error($conn));
}

    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $preference = $_POST['preference'];
    $comments = $_POST['comments'];


    $sql = "INSERT INTO comment (fullName, email, preference, comments) 
    VALUES ('$fullName', '$email', '$preference', '$comments')";
        mysqli_query($conn, $sql);

        echo "You request was sent to our team.";

    


?>