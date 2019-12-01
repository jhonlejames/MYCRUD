<?php require_once("connection.php");?>
<!DOCTYPE html> 
<title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="img/asf.png">
	<style type="text/css">
		body{
		background-image: url("wall.png");
		height: 100%;
		padding: 0;
		margin: 0;
		background-position: center;
  		background-size: cover;
	}
	label{
		color: white;
		font-size: 30px;
	}
	input{
		padding: 20px 80px
	}
	.btn,a{
		color: white;
		font-size: 24px;
	}
</style>
<body>
	
	<form method="post">
		<center>
			<div class="row">
				<div class="col-sm-12">
					<label>First Name</label>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input name="first_name" class="input" type="text"  required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label>Last Name</label>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input name="last_name" class="input" type="text"  required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label>Username</label>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input id="username" onkeyup="check_user()" name="username" class="input" type="text" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<label>Password</label>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<input name="password" class="input" type="password" required>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<button name="register" type="submit" class="btn" id="register">
						REGISTER
					</button>
				</div>
			</div>
		</center>
			
			
					

	<center>
		<div id="checking"></div>
	</center>	
	<?php 
		if (isset($_POST['register'])) {
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$username = $_POST['username'];
			$password = $_POST['password'];
		

		$q = "INSERT INTO `site` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES ('', '".$first_name."', '".$last_name."', '".$username."', '".$password."')";
		$r = mysqli_query($con, $q);

		if ($r) {
				header("location:login.php");
		}
		else{
			echo $q;
		}
		}
	?>


</body>
</html>