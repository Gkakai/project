<?php
include "header.php";
include "config.php";
if (isset($_POST["SUBMIT"])) {

    $fistName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $phoneNumber = $_POST["phoneNumber"];




// insert

    $sql = "INSERT INTO `customer`( `firstName`, `secondName`, `emailAddress`, `phoneNumber`) 
VALUES ('$fistName','$secondName','$emailAddress','$phoneNumber')";


    $results = mysqli_query($link, $sql);


    if ($results) {
        echo "<p class='alert alert-success'>Records have been Added</p>";

    } else {
        echo "<p class='alert alert-success'>Error Excuting querry $sql</p>" . mysqli_error($link);
    }
}