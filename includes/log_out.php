<?php
	session_start();
	unset($_SESSION['$user_name']);
	if(isset($_SESSION['url']))
	{
		$url = $_SESSION['url'];
	}
	else
	{
		$url = "../index.htm";
	}
	session_destroy();
	header("Location: $url");
?>