<?php
include 'conn.php';
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


</head>
<body>
	<div class="container"crossline-dots.png style="background-image: url(pic/crossline-dots.png);margin:110px;">
	<div class="col-lg-12"><br>
		<div class="row">
		<h2 class="col-lg-12" style="margin-left: 170px"><b>Welcome to Employee Profile Recording System!</b></h2>

		<h2 class="col-lg-12" style="margin: 100px;padding-left: 350px"><b>Admin Panel</b></h2>
		<a href="records.php" class="col-lg-3" style="margin-left: 200px"><button class="btn btn-success col-lg-12" name="View Records">View Records</button></a>
        <a href="logout.php" class="col-lg-3" style="margin-left: 150px"><button class="btn btn-success col-lg-12" name="logout">Logout</button></a>
        
    </div><br>

</body>