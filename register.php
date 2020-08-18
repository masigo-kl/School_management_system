
</html><!DOCTYPE html>
<html lang="en">
<head>
	<title>registration form page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body class="bg-info">
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container">
			<a href="index.php" class="navbar navbar-brand">
				<h3>School Notification System</h3>
			</a>	
			<ul class=" navbar navbar-nav mr-auto">
				<li class="nav-item">
					<a href="#" class="nav-link">Home</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Service</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link">Contact</a>
				</li>
			</ul>
			<a href="login.php">
				<button class="btn btn-danger mr-2">Login</button>
			</a>
			<a href="register.php">
				<button class= "btn btn-success">Register now</button></a>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 mr-auto">
				<div class="card bg-dark mt-5 py-2">
					<div class="card-title bg-primary text-white">
						<h3 class="text-center mt-2">Registration Form</h3>
						<hr>
					</div>
					<div class="card-body">
						<form method="Post">
							<input type="text" name="FirstName" placeholder="First Name" class ="form-control py-2 mb-2">
							<input type="text" name="LastName" placeholder="Last Name" class="form-control py-2 mb-2">
							<input type="text" name="username" placeholder="Username" class="form-control py-2 mb-2" >
							<input type="email" name="email" placeholder="Email" class="form-control py-2 mb-2">
							<input type="password" name="pass" placeholder="password" class="form-control py-2 mb-2">
							<input type="password" name="cpass" placeholder="Confirm password" class="form-control py-2 mb-2">
							<button class="btn btn-success float-right">Register Now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<!--
<?php
//require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration | PHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div>
	<?php
	
	?>	
</div>

<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Registration</h1>
					<p>Fill up the form with correct values.</p>
					<hr class="mb-3">
					<label for="firstname"><b>First Name</b></label>
					<input class="form-control" id="firstname" type="text" name="firstname" required>

					<label for="lastname"><b>Last Name</b></label>
					<input class="form-control" id="lastname"  type="text" name="lastname" required>

					<label for="email"><b>Email Address</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="phonenumber"><b>Phone Number</b></label>
					<input class="form-control" id="phonenumber"  type="text" name="phonenumber" required>

					<label for="password"><b>Password</b></label>
					<input class="form-control" id="password"  type="password" name="password" required>
					<hr class="mb-3">
					<input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


			var firstname 	= $('#firstname').val();
			var lastname	= $('#lastname').val();
			var email 		= $('#email').val();
			var phonenumber = $('#phonenumber').val();
			var password 	= $('#password').val();
			

				e.preventDefault();	

				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {firstname: firstname,lastname: lastname,email: email,phonenumber: phonenumber,password: password},
					success: function(data){
					Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
								})
							
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
					}
				});

				
			}else{
				
			}

			



		});		

		
	});
	
</script>
</body>
</html>
-->