<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MEN</title>
<link href="styles/grid.css" type="text/css" rel="stylesheet"/>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>

$(document).ready(function() {
		$('h2').click(function(){
			var num=($(this).attr('id'));
			$('.product_result').html("");
			$(".product_result").load('includes/product.php', {"id":num}, 'includes/product.php');
		});
			
		if(window.location.hash) {
			$(window.location.hash).prev().click();
			var num = window.location.hash.substring(1);
			$('.product_result').html("");
			$(".product_result").load('includes/product.php', {"id":num}, 'includes/product.php');
		}
	});
	
	var times = 0;
	//var getID = 0;
	function doClick(e) {
			times++;
			location.hash = times;
			/*getID = e;
			location.hash = getID;
			document.getElementById('trail').innerHTML = 'current ID is' + getID ;*/
	}
	
	window.onhashchange = function() {
		if(location.hash.length > 0) {
			times = parseInt(location.hash.replace('#',''),10);
		}else {
			times = 0;
		}
		$('.product_result').html("");
		$(".product_result").load('includes/product.php', {"id":times}, 'includes/product.php');
	}
			
</script>

</head>
<body>
<div id="header_wrapper"></div>
<div id="body_wrapper">
	<div class="side_menu_wrapper">
		<div class="side_menu_content" >
			<?php include 'includes/side_menu.php'; ?>
		</div>
	</div>
	<div class="product_display_wrapper">
		<div class="product_display_content">
			<div class="product_result">
				<img src="images/13.jpg" width="720" height="410" alt="wall_product_image"/>
			</div>
			<div id="trail">
			</div>
		</div>
	</div>
</div>
<div id="clear"></div>
<div id="footer_wrapper"></div>
</body>
</html>