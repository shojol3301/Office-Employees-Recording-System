<?php
include 'conn.php';
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Displaying Records</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">



</head>
<body>
<div class="container" style="background-color:#fff; margin-top: 60px; margin-bottom: 280px;" >
	<div class="col-lg-12"><br>
		<div class="row">
		<h2 class="col-lg-6" style="color">Displaying Records</h2>
		<form action="search.php" method="POST">
			<input type="text" name="search" placeholder="search here" >
			<button type="submit" name="submit-search">search</button>
		</form>
        <a href="Add.php" class="col-lg-1" style="margin-left: 60px"><button class="btn btn-success col-lg-12">Add</button></a> 
        <a href="home.php" class="col-lg-1" style="margin-left: 50px"><button class="btn btn-success col-lg-12" name="Back">Back</button></a>
    </div><br>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark">
				<th><h5><b>Profile ID</b></h5></th>
				<th><h5><b>Name</b></h5></th>
				<th><h5><b>Age</b></h5></th>
				<th><h5><b>Gender</b></h5></th>
				<th><h5><b>Email</b></h5></th>
				<th><h5><b>Designation</b></h5></th>
				<th><h5><b>Phone Number</b></h5></th>
				<th><h5><b>Present Address</b></h5></th>
				<th><h5><b>Permanent Address</b></h5></th>
				<th><h5><b>Salary</b></h5></th>
				<th><h5><b>Date of Join</b></h5></th>
			</tr>

			
			<?php
include 'conn.php';
	
	
$q="select * from Employee";

$query = mysqli_query($conn,$q);

while ($res = mysqli_fetch_array($query)) {
?>

			<tr class="text-dark">
				<th><?php echo $res['profile_ID'] ?></th>
				<th><?php echo $res['Name'] ?></th>
				<th><?php echo $res['Age'] ?></th>
				<th><?php echo $res['Gender'] ?></th>
				<th><?php echo $res['email'] ?></th>
				<th><?php echo $res['Designation'] ?></th>
				<th><?php echo $res['Phone_number'] ?></th>
				<th><?php echo $res['Present_Address'] ?></th>
				<th><?php echo $res['Permanent_Address'] ?></th>
				<th><?php echo $res['Salary'] ?></th>
				<th><?php echo $res['Joining_date'] ?></th>
				<th><a  href="update.php?profile_ID=<?php echo $res['profile_ID']; ?>" class="text-dark"><button class="btn btn-success">View</button></a></th>
				
			</tr>
<?php }
?>

		</table>
	</div>
</div>
</div>
</body>
</html>