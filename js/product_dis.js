$(document).ready(function() {
		$('h4').click(function(){
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