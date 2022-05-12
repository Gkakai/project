<?php
date_default_timezone_set('Asia/Kolkata');
$current_date = date('Y-m-d');
include('config.php');

extract($_POST);
  $sql="INSERT INTO `addcustomer`(`firstName`, `secondName`, `emailAddress`, `phoneNumber`)
          VALUES  ('$firstName','$secondName','$emailAddress','$phoneNumber')";


 if ($conn->query($sql) === TRUE) {
      $_SESSION['success']=' Record Successfully Added';
     ?>
<script type="text/javascript">
window.location="../view_customer.php";
</script>
<?php
} else {
      $_SESSION['error']='Something Went Wrong';
?>
<script type="text/javascript">
window.location="../view_customer.php";
</script>
<?php } ?>