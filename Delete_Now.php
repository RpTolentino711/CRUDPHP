<?php

include("connection.php");

$user_id = $_POST["user_id"];
mysqli_query($connection, "DELETE FROM mytbl WHERE id = '$user_id' ");


 echo "<script language='javascript'>alert('New Record has been Deleted!')</script>";
        echo "<script>window.location.href='index.php';</script>";

?>