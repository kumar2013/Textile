<?php

if($_REQUEST['id'])
{
	include 'db_conn.php';
	$cat_id = $_REQUEST['id'];

	$db = new database('localhost', 'root', 'Shoh3huw', 'trail_product'); 
		
	if($cat_id==1)
	{
		$db->query("SELECT product_info.p_name, product_info.description, product_info.price, image.image_id, image.image_url FROM (product_info INNER JOIN image ON product_info.image_id = image.image_id)");
	}
	else
	{
		$db->query("SELECT product_info.p_name, product_info.description, product_info.price, image.image_id, image.image_url FROM (product_info INNER JOIN image ON product_info.image_id = image.image_id) WHERE p_id=".$cat_id."");
	}
	
	if($db->numRows()==0) 
	{
		echo 'No images';
	}
	else 
	{
		foreach($db->rows() as $article)
		{
			echo "<div class=\"col-lg-3\" >";
			echo "<a href='product_details.php?id=".$article['image_id']."'>";
			?>
			<img src="<?php echo $article['image_url']; ?>"  id="<?php echo $article['image_id']; ?>" class = "img-responsive" height="270" width="231"/> </a>
			<?php 
			echo '</br>';
			echo $article['p_name'];
			echo '</br>';
			echo '$', $article['price'];
			echo '</br>';
			
			echo "</div>";
		} 
	}
	$db->disconnect();
}
?>

