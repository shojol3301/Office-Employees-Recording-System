<?php
//session_start();

include 'conn.php';

$profile_ID = $_SESSION['profile_ID'] ;
//echo $id;
$q = "DELETE FROM `employee` WHERE Name= 'xxz'";

$q2=mysqli_query($conn,$q);

header("location:records.php");
?>