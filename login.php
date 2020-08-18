</html><!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
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
          		<a href="index.php" class="nav-link">Home</a>
       			/li>
       			<li class="nav-item">
         		 <a href="feeback.php" class="nav-link">FeedBack</a>
       			 </li>
        		<li class="nav-item">
         		 <a href="contact_Us.php" class="nav-link">Contact</a>
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
			<div class="col-lg-6 m-auto">
				<div class="card bg-dark mt-5 py-2">
					<div class="card-title  bg-primary text-white">
						<h3 class="text-center mt-2">Login Form</h3>
						<hr>
					</div>
					<div class="card-body" >
						<form method="Post">
							<input type="email" name="Uemail" placeholder="user email" class="form-control py-2 mb-2">
							<input type="password" name="Upass" placeholder="user password" class="form-control py-2 mb-2">
							<button class="btn btn-danger float-center mt-3" name ="cancel">Cancel</button>
							<button class="btn btn-success float-right mt-3" name="login">Login</button>
							<div class="card-footer">
								<input type="checkbox" name="remember"><span class="text-white"> Remenber me </span>
								<a href = recover.php class="float-right"> forget pasword </a>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

