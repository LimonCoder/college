<?php
	
	require "../class/auth.php";
	$auth = new auth();
	$auth->auth_check();

	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../src/bootstrap.min.css">
	<title>Welcome  |  App name</title>
</head>
<body>
	<?php include "header.php";?>
	<div class="row m-0 p-0">
		<div class="col-2">
			<div class="p-2 border-right">
			<a href="add_em.php">
				<div class="bg-info text-light p-2 font-weight-bold">Add new employee</div>
			</a>
			<a href="add_ca.php">
				<div class="bg-info text-light p-2 mt-2 font-weight-bold">Create Department</div>
			</a>
			<a href="add_ca.php">
				<div class="bg-info text-light p-2 mt-2 font-weight-bold">Add new grade</div>
			</a>
			<a href="add_ca.php">
				<div class="bg-info text-light p-2 mt-2 font-weight-bold">Manage Grade and department</div>
			</a>
			<a href="add_ca.php">
				<div class="bg-info text-light p-2 mt-2 font-weight-bold">Manage Employee Salary </div>
			</a>


			</div>
		</div>
		<div class="col-8">
			<div class="bg-light border-left">

			</div>
		</div>
		<div class="col-2"></div>
	</div>
</body>
</html>
