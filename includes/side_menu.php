<?php
	include 'db_conn.php';
	$db = new database('localhost', 'root', 'Shoh3huw', 'new_textile');
	$db->query("SELECT sub_category_info.sub_cat_id, sub_category_info.sub_cat_name FROM sub_category_info");

	if($db->numRows()==0)
	{
		echo 'No Sub Categories';
	}
	else
	{
		foreach($db->rows() as $cat)
		{	
			echo "<a href='#".$cat['sub_cat_id']."'>";
			?>
			<h4 id= "<?php echo $cat['sub_cat_id']?>" onclick = "doClick(this.id);" > <?php echo $cat['sub_cat_name'] ?></h4> </a>
			<?php
		}
	}
?>