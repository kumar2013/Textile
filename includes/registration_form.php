<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ashton">
    <!--<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">-->

    <title>Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
	<!-- Custom made CSS -->
	<link href="../css/styles.css" rel="stylesheet">
	<link href = "../css/carousel.css" rel = "stylesheet"/>
	
  </head>
  <body>
	
	<!-- Include the navigation bar from includes -->
	<?php include 'navigation_bar.php';?>
	
	<div class = "container">
		<div class = "row">
		<div class = "col-lg-6 col-lg-offset-3">
		<div class="table_title"> <h3>Create a new account</h3></div>
        		<form role="form" method = "post" action = "">
					<div class = "form-group">
						<label for="first_name">First name</label>
						<input type="text" class="form-control" id = "first_name" placeholder="First name">
					</div>
					<div class = "form-group">
						<label for="user_name">Last name</label>
						<input type="text" class="form-control" id = "last_name" placeholder="Last name">
					</div>
					<div class = "form-group">
						<label for="user_name">User name</label>
						<input type="text" class="form-control" id = "user_name" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Confirm Password</label>
						<input type="password" class="form-control" id="confirm_password" placeholder="confirm Password">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="email" placeholder="Enter email">
						<input type="email" class="form-control" id="inputEmail3" name= "inputEmail3" placeholder="Email">
					</div>
					<button type="submit" class="btn btn-info">Submit</button>
				</form>
				
           
		</div>
		</div>
	</div>
	
	<!-- Including php file for footer and core javascript includes -->
	<?php include 'footer_coreJS.php';?>
</body>
</html>