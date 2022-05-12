<?php
session_start();
?>
<?php


include "config.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {

    $emailAddress = $_REQUEST["emailAddress"];
    $password = $_REQUEST["password"];
   




// insert

    $sql = "SELECT `emailAddress`, `password` FROM `customer`";


    $results = mysqli_query($link, $sql);
    if (empty($emailAddress) & empty($password)){
        header("location:customer_login.php?error=Email or Password missing");
    }else{
        $_SESSION['login']=$emailAddress;
        header("location:customer_dashboard.php");
    }
    
    
}