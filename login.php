<?php
error_reporting(0);
session_start();
include "conn.php";

$name = $_POST['name'];
$Password = $_POST['password'];

if (isset($_POST['Login'])) 
{


	$q= "select * from login where name = '$name' and password = '$Password'";

	$res = mysqli_query($conn,$q);
	$res1 = mysqli_num_rows($res);
    
    if ($res1 == 0) 
    {
          header("location:login.php?user=Incorrect username or Password");		
	}	

    while ($row = mysqli_fetch_array($res)) {

    	if ($row['name'] == $name  &&  $row['password'] == $Password)
    	 {
    	 	$_SESSION['name'] = $name ;
    		$_SESSION['password'] = $Password ;
    			
    			header("location:home.php");
    	}    	
    }
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
   	

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	
	
</head>

<body>
	

	<br>
	
<div class="container">

	
    <form method="post">
     <div class="form-group col-lg-6 m-auto">
      <div class="container">
        	<div class="card-header bg-dark">
      		<h2 class="text-white">ADMIN LOGIN</h2>
      	    </div>
      	    <br>
	

			<label><b>Username</b></label>
			<input type="text" id="name" name="name" class="form-control" required><br>
	

	

			<label><b>Password</b></label>
			<input type="password" id="password" name="password" class="form-control" required><br>
	

	

			<button name="Login" class="btn btn-success">Login</button><br>
	

	<div>
  	<p class="text-danger"><?php echo $_GET['user']; ?></p><br> 
    <p><?php echo $_GET['password']; ?></p><br>
    <p><?php echo $_GET['both']; ?></p>
  	</div>
       
     </div>
	</form>
	</div>
</body>
</html>