<?php


$link = mysqli_connect('localhost', 'root','', 'my_project');
if (!$link)  {

    echo "connection success";

    die( mysql_error($link));
}


?>

