<?php


include "config.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $firstName = $_REQUEST["firstName"];
    $secondName = $_REQUEST["secondName"];
    $emailAddress = $_REQUEST["emailAddress"];
    $phoneNumber = $_REQUEST["phoneNumber"];
    $password = $_REQUEST["password"];




// insert

    $sql = "INSERT INTO `customer`(`firstName`, `secondName`, `emailAddress`, `phoneNumber`, `password`) VALUES ('$firstName','$secondName','$emailAddress','$phoneNumber','$password')";


    $results = mysqli_query($link, $sql);


    if ($results) {
        echo "<p class='alert alert-success'>Records have been Added</p>";

    } else {
        echo "<p class='alert alert-success'>Error Excuting querry $sql</p>" . mysqli_error($link);
    }
}