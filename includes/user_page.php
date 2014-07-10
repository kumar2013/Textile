<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ashton">
    <!--<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">-->

    <title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
	<!-- Custom made CSS -->
	<link href="../css/styles.css" rel="stylesheet">
	<link href = "../css/carousel.css" rel = "stylesheet"/>
  </head>
  <body>
  
	<!-- Navigation bar with buttons 
	=============================================== -->
	<div class = "navbar navbar-inverse navbar-static-top">
		<div class ="container">
			<a href = "../index.htm" class = "navbar-brand"><strong>UniqueU</strong></a>
			<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
				<span class = "icon-bar"></span>
			</button>
			<div class = "collapse navbar-collapse navHeaderCollapse">
				<ul class = "nav navbar-nav navbar-left">
					<li class = "active"><a href ="../index.htm">Home</a></li>
					<li class = "dropdown">
						<a href ="#" class = "dropdown-toggle" data-toggle = "dropdown">Men</a>
						<ul class = "dropdown-menu">
							<li><a href = "#">View all</a></li>
							<li><a href = "#">shirts</a></li>
							<li><a href = "#">jeans</a></li>
							<li><a href = "#">pants</a></li>
							<li><a href = "#">T-shirts</a></li>
						</ul>
					</li>
					<li class = "dropdown">
						<a href ="#" class = "dropdown-toggle" data-toggle = "dropdown">Women</a>
						<ul class = "dropdown-menu">
							<li><a href = "#">View all</a></li>
							<li><a href = "#">skirts</a></li>
							<li><a href = "#">jeans</a></li>
							<li><a href = "#">pants</a></li>
							<li><a href = "#">designer shirts</a></li>
						</ul>
					</li>
					<li class = "dropdown">
						<a href ="#" class = "dropdown-toggle" data-toggle = "dropdown">Kids</a>
						<ul class = "dropdown-menu">
							<li><a href = "#">View all</a></li>
							<li><a href = "#">shorts</a></li>
							<li><a href = "#">shirts</a></li>
							<li><a href = "#">pants</a></li>
							<li><a href = "#">t-shirts</a></li>
						</ul>
					</li>
					<li><a href ="#">About Us</a></li>
				</ul>
				<ul class = "nav navbar-nav navbar-right">
				
				
				<?php
					session_start();
					if (isset($_SESSION['user_name'])) {
						echo "<li class = \"dropdown\">";
							echo "<a href = \"#\" class = \"dropdown-toggle\" data-toggle = \"dropdown\">Welcome ".$_SESSION['user_name']."</a>";
							echo "<ul class = \"dropdown-menu\">";
								echo "<li><a href='user_page.php' class='topLink'>My Profile</a></li>";
								echo "<li><a href='log_out.php' class='topLink'>Log out</a></li>";
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
	
	
	
	
	
	
	<hr class = "third-divider">
	
	<!-- FOOTER -->
      <footer>
	  <div class = "container">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </div>
	  </footer>

	  
	  
	  
	    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>