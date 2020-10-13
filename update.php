<?php

session_start();
if(!$_SESSION['name'])
{
header("location:login.php");
}

error_reporting(0);
include 'conn.php';

	$profile_ID = $_GET['profile_ID'];
	$Name = $_POST['Name'];
	$Age = $_POST['Age'];
	$Gender = $_POST['Gender'];
	$email = $_POST['email'];
	$Designation = $_POST['Designation'];
	$Present_Address = $_POST['Present_Address'];
	$Permanent_Address = $_POST['Permanent_Address'];

	$Phone_Number = $_POST['Phone_Number'];
	$Salary = $_POST['Salary'];
	
	$day1 = $_POST['day1'];
    $month1 = $_POST['month1'];
    $year1 = $_POST['year1'];
	$date1 = "$day1-$month1-$year1";
	
	$doj = date("Y-m-d",strtotime($date1));
	
	$Joining_date = $doj;


$q="select * from employee where profile_ID = $profile_ID";
$query = mysqli_query($conn,$q);
$res=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

</head>
<body>

<div class="col-lg-6 m-auto">
	
	<form method="post">
		<br><div>
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Displaying Employee Details</h1>
			</div><br>

			<input type="hidden" name="profile_ID" value="<?php echo $res['profile_ID']; ?>">
        	
        	<label><b>Email</b></label>
        	<input type="email" style="background-color: #E7DB74" name="email" value="<?php echo $res['email']; ?>" class="form-control" required><br>


        	<label><b>Designation</b></label>
        	<input type="text" value="<?php echo $res['Designation']; ?>" style="background-color: #E7DB74" name="Designation" class="form-control" required><br>

			<label><b>Present Address</b></label>
			<input type="text" value="<?php echo $res['Present_Address']; ?>" style="background-color: #E7DB74" name="Present Address" class="form-control" required><br>

			
			<label><b>Phone Number</b></label>
			<input type="text" value="<?php echo $res['Phone_number']; ?>" style="background-color: #E7DB74" name="Phone Number" class="form-control" required><br>

			<label><b>Salary</b></label>
			<input type="text" value="<?php echo $res['Salary']; ?>" style="background-color: #E7DB74" name="Salary" class="form-control" required 
        title="this field accepts only numbers"><br>

			

			<div class="row">
				<div class="col-md-3"><a href="records.php"><button class="btn btn-success" name="done">update</button></div>
         
			    <div class="col-md-3"><input type="button" class="btn btn-danger" name="delete" value="Delete" onclick="deleteme(<?php $_SESSION['profile_ID'] = $profile_ID; ?>)"></div>
			    
	<script type="text/javascript">
		
function deleteme(delid)
{
      if(confirm("Are you sure you want to delete ?"))
      {
      	window.location.href="delete.php";
      }
}

	</script>
		    </div><br>
		    <a href="records.php"><input type="button" name="" value="Back to records" class="btn btn-primary col-lg-12"></a>
		</div>
	</form>
</div>
<?php


if(isset($_POST['done']))
{
$q2="UPDATE `employee` SET  `email` = '$email',`Designation` = '$Designation ' , `Present_Address` = '$Present_Address' ,`Phone_Number` = '$Phone_Number' , `Salary` = $Salary where profile_ID ='".$_SESSION['profile_ID']."'";
$upd=mysqli_query($conn,$q2);
//header("location:display.php");
header("refresh:0");
}

if(isset($_POST['delete']))
{
	$_SESSION['profile_ID'] = $profile_ID;
	header("location:delete.php");
}


?>
</body>
</html>