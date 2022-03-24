<?php
//check if user is logged in.
session_start();

if (!isset($_SESSION["loggedin"]) or  $_SESSION["loggedin"]!==true){
    header("location:login.php");
    exit();
}



include "header.php";
include "config.php";


if (isset($_POST["update"]) and !empty($_POST["id"])) {

    #updating here

    //pick values
    $id=$_POST["id"];
    $up_fullName = $_POST["fullName"];
    $up_emailAddress = $_POST["emailAddress"];
    $up_phoneNumber = $_POST["phoneNumber"];
    $up_location = $_POST["location"];
    $up_dob = $_POST["dob"];
    $up_gender = $_POST["gender"];
    // files
    $photoname = $_FILES["photo"]["name"];
    $tempname = $_FILES["photo"]["tmp_name"];
    $folder = "uploads/" . $photoname;

    //cv
    $cvname = $_FILES["cv"]["name"];
    $cvtemp = $_FILES["cv"]["tmp_name"];
    $cvfolder = "uploads/." . $cvname;

    $up_sql = "UPDATE `students` SET `fullName`='$up_fullName',`emailAddress`='$up_emailAddress',`phoneNumber`='$up_phoneNumber',
                    `location`='$up_location',`dob`='$up_dob',`gender`='$up_gender',`photo`='$photoname',`cv`='$cvname' WHERE id=$id";

    $up_result = mysqli_query($link, $up_sql);


    if (move_uploaded_file($tempname,$folder)){
        echo "<p class='alert alert-success'>Image has been updated</p>";
    }else{
        echo "Error uploading image";
    }


    if (move_uploaded_file($cvtemp,$cvfolder)){
        echo "<p class='alert alert-warning'>CV has been updated</p>";
    }else{
        echo "Error uploading your cv";
    }



    if ($up_result) {
        echo "<p class='alert alert-danger'>Record updated successfully!</p>";
        echo  "<a href='documents.php' class='col-md-6 btn btn-primary'> BACK </a>";

    } else {
        echo "error updating record $up_sql" . mysqli_error($link);
    }


} else {

if (isset($_GET["id"]) and !empty($_GET["id"])) {

$id = $_GET["id"];

$sql = "SELECT * FROM `students` WHERE id=$id";
$result = mysqli_query($link, $sql);

if ($result) {

$data = mysqli_num_rows($result);

if ($data == 1) {

$row = mysqli_fetch_array($result);

$fullName = $row["firstName"];
$secondName = $row["secondName"];
$emailAddress = $row["emailAddress"];
$phoneNumber = $row['phoneNumber'];


?>

<div class="row m-2">
    <div class="card">
        <div class="card-header text-primary bg-white">UPDATE THE RECORD</div>
        <div class="card-body">
            <form action="update.php" method="post" enctype="multipart/form-data">
                <div class="row m-2 p-2">
                    <div class="col-md-6">
                        <label class="form-label grey">Full Name</label>
                        <input class="form-control" type="text" name="fistName" value="<?php echo $fistName; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label grey">secondName</label>
                        <input class="form-control" type="text" name="secondName" value="<?php echo $secondName; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label grey">Email Address</label>
                        <input class="form-control" type="text" name="emailAddress"
                               value="<?php echo $emailAddress; ?>">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label grey">phoneNumber</label>
                        <input class="form-control" type="text" name="phoneNumber"
                               value="<?php echo $phoneNumber; ?>">
                    </div>

                </div>
                
                
                   
                    <div>
                        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
                    </div>

                    <div class="row m-2 p-2">
                        <div class="col-md-6">
                            <input type="submit" name="update" class="col-md-8 btn btn-primary" value="UPDATE">
                        </div>
                        <div class="col-md-6">
                            <a href="documents.php" class="col-md-8 btn btn-danger">CANCEL</a>
                        </div>

                    </div>


                </div>
        </div>
    </div>
    <?php
    }


    } else {
        echo "Error executing query $sql" . mysqli_error($link);
    }

    }
    }
    ?>