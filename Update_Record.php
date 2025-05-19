<?php
include("connection.php");
$user_id = $_POST["user_id"];
 
$new_name = $_POST["new_name"];
$new_address = $_POST["new_address"];
$new_email = $_POST["new_email"];
 
mysqli_query($connection, "UPDATE mytbl SET name='$new_name', address='$new_address', email='$new_email' WHERE id='$user_id' ");
 
echo "<script language='javascript'>alert('Record has benn updated!')</script>";
echo "<script>Window.location.href='index.php';</script>";
?>