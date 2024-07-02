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

    $sql = "UPDATE leaseCustomers SET 
        
        firstName = '$firstName',
        lastName = '$lastName',
        userName = '$userName',
        address1 = '$address1',
        address2 = '$address2',
        country = '$country',
        province = '$province',
        zip = '$zip',
        cardT = '$cardT',
        cardName = '$cardName',
        cardNumber =  '$cardNumber',
        cardExpiration = '$cardExpiration',
        cvv = '$cvv',
        sin = '$sin'
        WHERE email = '$email'";

        mysqli_query($conn, $sql);
        echo "Information Updated in the platform.";
    
    
    
    
    ?>