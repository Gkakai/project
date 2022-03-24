<?php


include "Config.php";
if (isset($_POST["register"])) {
    $firstName = $_POST["fistName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST['emailAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirmPass = $_POST["confirmPass"];


// Validate
    if (strlen($password) < 6) {
        $passError = "Password must have more than 6 characters";
        echo $passError;
    } else {
        $storePass = password_hash($password, PASSWORD_DEFAULT);
    }
    if ($confirmPass != $password) {
        $conPassErr = "Password do not Match!";
        echo $confirmPass;
    }
    if (empty($passError) and empty($conPassErr)) {
        $sql = "INSERT INTO `admin_table`('firstName`, `secondName`, `emailAddress`, `phoneNumber`, `gender`, `password`); 
        VALUES ('$firstName','$secondName','$emailAddress','$phoneNumber','$gender','$password',)";


        $result = mysqli_query($link, $sql);
        if ($result) {
            echo "You have been registered";
            header("location:Admin_login.php");
        } else {
            echo "Error executing query" . mysqli_error($link);
        }
    }
    mysqli_close($link);
}
?>