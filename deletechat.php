<?php

include("connection.php");
$q="DELETE FROM `message` WHERE mid=mid";


if($result=mysqli_query($con,$q)){


header("location:index.php");
echo "<script> alert('Conversation Deleted')</script>";
}

?>