<?php


include "config.php";

//session_start();

//check if user is logged in using sessions
//if (isset($_SESSION["loggedin"]) and $_SESSION["loggedin"]==true){
//
//header("location:dashboard.php");
// exit()
//}


//session_start();


if (isset($_POST['Admin_login'])) {

    $userEmail = $_POST["emailAddress"];
    $userPassword = $_POST["password"];

// compare
    $sql = "SELECT * FROM `admin_table` WHERE  emailAddress='$userEmail'";

    $result = mysqli_query($link, $sql);

    if ($result) {

        $data = mysqli_num_rows($result);

        if ($data == 1) {
            while ($row = mysqli_fetch_array($result)) {

                $ID = $row['ID'];
                $emailAddress = $row["emailAddress"];
                $password = $row["password"];
                $firstName = $row["firstname"];

// verify the password
                if (password_verify($userPassword, $password)) {
                    
                        session_start();
                        $_SESSION["loggedin"] = true;
                        $_SESSION["ID"] = $ID;
                        $_SESSION["username"] = $firstName;
                        header("location:admindashboard.php");
                    

                } else {
                    echo "Passwords are not matching";
                }
            }
        } else {
            echo "No such email address found";
        }
    }
}
