<?php
	if(isset($_GET['cat']))
	{
		$cat_name = $_GET['cat'];
		//echo $_GET['cat'];
	}
	else
	{
		echo "URL ERROR";
	}
?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ashton">
    <title><?php echo $cat_name;?></title>
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<!-- Custom made CSS -->
	<link href="css/styles.css" rel="stylesheet">
	<link href = "css/carousel.css" rel = "stylesheet"/>
	<!-- Custom made Javascript file to display and handle products-->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="js/product_dis.js"></script>
  </head>
  <body>
	<!-- Including php file for Navigation bar -->
	<?php include 'includes/navigation_bar.php';?>
	
	<!-- Product display area -->
	<div class = "container">
		<div class = "row">
			<div class = "col-lg-3">
				<div class = "list-group">
					<!--<a class = "list-group-item"></a>-->
					<h3><?php echo $cat_name;?></h3>
					<?php include 'includes/side_menu.php';?>
				</div>
			</div>
			
			<div class = "col-lg-9">
				<div class = "panel panel-default">
					<div class = "panel-body">
						  <!--
						  <div class = "men_cover_photo">
							<img src = "images/13.jpg" class = "img-responsive" width = "810px"alt = "men_cover_photo">
						  </div>
						  <div class = "row">
							  <div class = "col-sm-3" >
								<img src="images/men_main/m1.jpg" class = "img-responsive"alt="first_grid">
							  </div>
							  <div class = "col-sm-3">
								<img src="images/men_main/m2.jpg" class = "img-responsive"alt="first_grid">
							  </div>
							  <div class = "col-sm-3">
								<img src="images/men_main/m3.jpg" class = "img-responsive"alt="first_grid">
							  </div>
							  <div class = "col-sm-3">
								<img src="images/men_main/m4.jpg" class = "img-responsive"alt="first_grid">
							  </div>
						  </div>
						  -->
						<div class = "row">
							<div class = "product_result">
						
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Including php file for footer and core javascript includes -->
	<?php include 'includes/footer_coreJS.php';?>
  </body>
  </html>

	