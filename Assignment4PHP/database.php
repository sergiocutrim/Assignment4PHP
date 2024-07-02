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

    
    $createTableSql = "CREATE TABLE IF NOT EXISTS leaseCustomers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(100) NOT NULL,
        lastName VARCHAR(100) NOT NULL,
        userName VARCHAR(100) NOT NULL,
        email VARCHAR(50) NOT NULL,
        address1 VARCHAR(100) NOT NULL,
        address2 VARCHAR(100) NOT NULL,
        country VARCHAR(10) NOT NULL,
        province VARCHAR(4) NOT NULL,
        zip VARCHAR(100) NOT NULL,
        cardT VARCHAR(16) NOT NULL,
        cardName VARCHAR(100) NOT NULL,
        cardNumber VARCHAR(16) NOT NULL,
        cardExpiration VARCHAR(100) NOT NULL,
        cvv VARCHAR(3) NOT NULL,
        sin VARCHAR(10) NOT NULL,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

    )";

    if (mysqli_query($conn, $createTableSql)) {
        echo "Table leaseCustomers created successfully or already exists<br>";
    } else {
        die("Error creating table: " . mysqli_error($conn));
    }
    
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $userName=$_POST['userName'];
    $email=$_POST['email'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $country=$_POST['country'];
    $province=$_POST['province'];
    $zip=$_POST['zip'];
    $cardT=$_POST['cardT'];
    $cardName=$_POST['cardName'];
    $cardNumber=$_POST['cardNumber'];
    $cardExpiration=$_POST['cardExpiration'];
    $cvv=$_POST['cvv'];
    $sin=$_POST['sin'];

       

    $sql = "INSERT INTO leaseCustomers (firstName, lastName, userName, email, address1, address2, country, province,
    zip, cardT, cardName, cardNumber, cardExpiration, cvv, sin) 
    VALUES ('$firstName', '$lastName', '$userName', '$email', '$address1', '$address2', '$country', '$province',
    '$zip', '$cardT', '$cardName', '$cardNumber', '$cardExpiration', '$cvv', '$sin')";
        mysqli_query($conn, $sql);

        echo "Information Registered in the platform.";

        

?>

