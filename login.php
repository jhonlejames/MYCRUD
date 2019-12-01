<?php 
session_start();
require_once("connection.php");?>
<style type="text/css">
	body{
		background: url("wall.png");
		padding: 0;
		margin: 0;
	}
	.header{
		width: 100%;
		height: 3em;
		background-color: white;
	}
	.form1{
		height: 32em;
		width: 25em;
		background-color: rgb(107,142,92);
		right: 0;
		bottom: 0;
		position: absolute;
		margin-bottom: 50px;
		margin-right: 50px;
		opacity: .5
	}
	.form2{
		height: 32em;
		width: 25em;
		border:solid cornflowerblue 5px;
		right: 0;
		bottom: 0;
		position: absolute;
		margin-bottom: 45px;
		margin-right: 45px;
	}
	.m-form{
		height: 32em;
		width: 25em;
		right: 0;
		bottom: 0;
		position: absolute;
		margin-bottom: 50px;
		margin-right: 50px;
	}
	h1{
		text-align: center
	}
	.box{
		height: 25em;
		width: 30em;
		border: solid 5px cornflowerblue;
		margin-left: -50px;
	}
	.min-box{
		height: 23.5em;
		width: 28.5em;
		background-color: rgb(107,142,92);
		opacity: .5;
		margin: 10px;
	}
	.input{
		padding: 20px 40px;
		color: green;
		margin-left: -100px;
		margin-top: -350px;
		position: absolute;
	}
	button{
		position: absolute;
		padding: 20px 40px;
		background-color: cornflowerblue;
		border: solid cornflowerblue 5px;
		bottom: 5em;
		left: 9em;
	}
	button:hover{
		margin-top: -200px;
		position: absolute;
		padding: 20px 40px;
		background-color: rgb(107,142,92);
		border: solid cornflowerblue 5px;
	}
	button a{
		text-decoration: none;
		color: black;
		background-color: none;
	}
	.right-col{
		float: right
	}
	.left-col{
		float: right
	}
</style>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style type="text/css">
	.header4{
		margin-top: 100px;
		font-size: 100px;
		margin-left: 1.5em;
	}
	.header5{
		font-size: 50px;
		margin-left: 4em;

	}
	.head{
		font-size: 80px;
	}
</style>
<body>


	
	<form method="post">
		<div class="header">
			<h1 class="head">LOGIN</h1>
		</div>
	<div class="header"></div>
	
	<div class="row">
		<div class="col-sm-5">
			<h1 class="header4">WELCOME</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<h3 class="header5">Spread the news</h3>
		</div>
	</div>




	<div class="right-col">
	<div class="form1"></div>
	<div class="form2"></div>
	<div class="m-form">
		<br><br><br>
		<center>
		<div class="box">
			<div class="min-box">
			<button type="submit" name="login">LOGIN</button>
			</div>
			<input name="username" class="one input" type="text" placeholder="Username"><br><br><br><br><br>
			<input name="password" class="two input" type="Password" placeholder="password">	
			
		</div><br>
		</form>


	<?php
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$q = 'SELECT * FROM `site` WHERE `username` = "'.$username.'" AND `password` = "'.$password.'"  ';

			$r = mysqli_query($con, $q);
			if ($r) {
				if (mysqli_num_rows($r) > 0){
					$_SESSION['username'] = $username;
					header("location:add.html");
				}else{
					echo '<center><p style="color:red" class="p">Your username and password do not matched<p></center>'; 
				}
			}else{
				echo $q; 
			}
		}
	?>

</body>
</html>