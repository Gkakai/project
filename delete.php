<?php

include "header.php";

if (isset($_POST["SUBMIT"]) and !empty("ID")){
    $id =$_POST["ID"];

    $sql = "DELETE FROM `customer` WHERE ID=$ID ;
    $result = mysqli_query($link,$sql);

        if ($result){

        }
}
?>

<div class="">

    <div class="alert-danger">
        <form action="delete.php" method="post">
            <div class="p-2 text-center">
                <label> Are you sure to delete this record?</label><br>
                <input type="text" name="ID" value="<?php echo $_GET["ID"];?>
            </div>
            <div class="p-2 text-center">
                <input type="SUBMIT" name="SUBMIT" value="YES" class="btn-danger col-md-3">
                <a href="select.php" class="btn btn-primary col-md-3">NO</a>
            </div>
        </form>
    </div>


</div>

