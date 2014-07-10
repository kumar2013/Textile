	<?php
		session_start();
		$_SESSION['url'] = $_SERVER['REQUEST_URI']; 
	?>


	<!-- Navigation bar with buttons 
	=============================================== -->
	<div class = "navbar navbar-inverse navbar-static-top">
		<div class ="container">
			<a href = "index.htm" class = "navbar-brand"><strong>UniqueU</strong></a>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-left">
					<li class = "active"><a href ="index.htm">Home</a></li>
					<li class = "dropdown">
						<a href ="Men" class = "dropdown-toggle disabled" data-toggle = "dropdown">Men</a>
						<ul class = "dropdown-menu">
							<li><a href = "#">View all</a></li>
							<li><a href = "#">shirts</a></li>
							<li><a href = "#">jeans</a></li>
							<li><a href = "#">pants</a></li>
							<li><a href = "#">T-shirts</a></li>
						</ul>
					</li>
					<li class = "dropdown">
						<a href ="Women" class = "dropdown-toggle" data-toggle = "dropdown">Women</a>
						<ul class = "dropdown-menu">
							<li><a href = "#">View all</a></li>
							<li><a href = "#">skirts</a></li>
							<li><a href = "#">jeans</a></li>
							<li><a href = "#">pants</a></li>
							<li><a href = "#">designer shirts</a></li>
						</ul>
					</li>
					<li class = "dropdown">
						<a href ="Kids" class = "dropdown-toggle" data-toggle = "dropdown">Kids</a>
						<ul class = "dropdown-menu">
							<li><a href = "#">View all</a></li>
							<li><a href = "#">shorts</a></li>
							<li><a href = "#">shirts</a></li>
							<li><a href = "#">pants</a></li>
							<li><a href = "#">t-shirts</a></li>
						</ul>
					</li>
					<li><a href ="About">About Us</a></li>
				</ul>
				<ul class = "nav navbar-nav navbar-right">
				
				
				<?php
					//session_start();
					if (isset($_SESSION['user_name'])) {
						echo "<li class = \"dropdown\">";
							echo "<a href = \"#\" class = \"dropdown-toggle\" data-toggle = \"dropdown\">Welcome ".$_SESSION['user_name']."</a>";
							echo "<ul class = \"dropdown-menu\">";
								echo "<li><a href='includes/user_page.php' class='topLink'>My Profile</a></li>";
								echo "<li><a href='includes/log_out.php' class='topLink'>Log out</a></li>";
							echo "</ul>";
						echo "</li>";
					}
					
					else {
						echo "<li><a href = \"#login\" data-toggle = \"modal\">Log In</a></li>";
					}
					?>
							  <li><a href = "#"><span class ="glyphicon glyphicon-shopping-cart"></span></a></li>
					
				</ul>
				
			</div>
		</div>
	</div> <!-- End-of-navigation-bar -->
	
	<!-- Dialog box for Log In 
	=============================================== -->
	<div class = "modal fade" id = "login" role ="dialog" >
		<div class = "modal-dialog">
			<div class = "modal-content">
				<div class ="modal-header">
					<strong>Log in Page</strong>
				</div>
				<div class = "modal-body">
					<form class="form-horizontal" role="form" method = "post" action = "includes/test_login.php">
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-6">
						  <input type="email" class="form-control" id="inputEmail3" name= "inputEmail3" placeholder="Email">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
						<div class="col-sm-6">
						  <input type="password" class="form-control" id="inputPassword3" name= "inputPassword3" placeholder="Password">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <div class="checkbox">
							<label>
							  <input type="checkbox"> Remember me
							</label>
						  </div>
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-default">Sign in</button>
						</div>
					  </div>
					</form>
				</div>
				<div class ="modal-footer">
					<button type="button" class="btn btn-link"><a href = "includes/registration_form.php">Create a new Account !</a></button>
				</div>
			</div>
		</div>
	</div><!-- End-of-login-dialog -->