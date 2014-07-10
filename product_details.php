<?php
	if(isset($_GET['id']))
	{
		$p_id=$_GET['id'];
		include 'includes/db_conn.php';
		$db = new database('localhost', 'root', 'Shoh3huw', 'trail_product');
		$db->query("SELECT product_info.p_name, product_info.description, product_info.price, image.image_id, image.image_url FROM (product_info INNER JOIN image ON product_info.image_id = image.image_id) WHERE p_id=".$p_id."");
		if($db->numRows()==0) 
		{
			echo 'No images';
		}
		else 
		{
			foreach($db->rows() as $article)
			{	
				$name = $article['p_name'];
				$description = $article['description'];
				$price = $article['price'];
				$img_url = $article['image_url'];
			}
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ashton">
    <title>Products</title>
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
	<div class = "container">
		<div class = "row">
			<div class = "col-lg-10 col-lg-offset-1">
				<div class = "panel panel-default">
					<div class = "panel-body">
						<div class = "col-lg-5">
							<img src= "<?php echo $img_url; ?>" class = "img-responsive" height="360" width="308"/>
						</div>
						<div class = "col-lg-5">
							<h3>Name</h3>
							<?php echo $name; ?>
							<br> </br>
							<h3>Description</h3>
							<?php echo $description; ?>
							<br> </br>
							<h3>Price</h3>
							<?php echo '$',$price; ?>
							<br> </br>
							<button type="button" class="btn btn-primary">
								ADD TO CART
							</button>
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