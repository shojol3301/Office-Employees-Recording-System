<?php 
session_start();
include 'conn.php';
if(isset($_POST['done']))
{
	$Name = $_POST['Name'];
	$Age = $_POST['Age'];
	$gender = $_POST['Gender'];
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



	$q="INSERT INTO `Employee`( `Name`, `Age`, `Gender`, `email`, `Designation`, `Present_Address`, `Permanent_Address`, `Phone_Number`, `Salary`, `Joining_date`) VALUES ('$Name','$Age','$gender','$email','$Designation','$Present_Address','$Permanent_Address','$Phone_Number','$Salary','$Joining_date')";

$query = mysqli_query($conn,$q);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">


</head>
<body>

<div class="col-lg-6 m-auto" style="background-color: #372A24; color: white;">
	
	<form method="post">
		<br><div>
			<div class="card-header bg-dark">
				<h1 class="text-white text-center">Insert Employee Details</h1>
			</div><br>


			<label><b>Name</b></label>
			<input type="text" style="background-color: #E7DB74" name="Name" class="form-control" required><br>

			<label><b>Age</b></label>
			<input type="text" style="background-color: #E7DB74" name="Age" class="form-control" required pattern="[0-9]{1,15}"
        title="this field accepts only numbers"><br>

        	Gender
        	<select name="Gender" style="background-color: #E7DB74" class="form-control">
        	<option value="Select gender"style="background-color: #E7DB74"  placeholder="Select your gender">Select  gender</option>
        	<option value="Male"style="background-color: #E7DB74">Male</option>
        	<option value="Female" style="background-color: #E7DB74">Female</option>	


        	</select>
        	<br>

        	<label><b>Email</b></label>
        	<input type="email" style="background-color: #E7DB74" name="email" class="form-control" required><br>

        	<label><b>Designation</b></label>
        	<input type="text" style="background-color: #E7DB74" name="Designation" class="form-control" required><br>

			<label><b>Present Address</b></label>
			<input type="text" style="background-color: #E7DB74" name="Present Address" class="form-control" required><br>

			<label><b>Permanent Address</b></label>
			<input type="text" style="background-color: #E7DB74" name="Permanent Address" class="form-control" required><br>

			<label><b>Phone Number</b></label>
			<input type="text" style="background-color: #E7DB74" name="Phone Number" class="form-control" required><br>

			<label><b>Salary</b></label>
			<input type="text" style="background-color: #E7DB74" name="Salary" class="form-control" required 
        title="this field accepts only numbers"><br>

			<label><b>Joining Date</b></label>
			<div class="row">
			<div class="col-md-3"><input type="text"  style="background-color: #E7DB74"  name="day1" class="form-control" placeholder="date" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>-

			<div class="col-md-3"><input type="text" style="background-color: #E7DB74"  name="month1" class="form-control" placeholder="month" required pattern="[0-9]{1,2}"
        title="this field accepts only numbers  and two characters"></div>-

			<div class="col-md-3"><input type="text" style="background-color: #E7DB74"  name="year1" class="form-control" placeholder="year" required pattern="[0-9]{4,4}"
        title="this field accepts only numbers  and 4 characters"></div><br>
            </div> <br>
          <div  class="row m-auto">
			<div class="col-md-5"><button class="btn btn-success col-lg-12" name="done">Add</button>
			</div>
			<div class="col-md-5"><a href="records.php"><input type="button" name="" value="Back to records" class="btn btn-danger col-lg-12"></a></div>
			</div>
		   </div>
	</form>
</div>
</script>
</body>
</html>

