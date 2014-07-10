<?php

include 'db_conn.php'; //Connecting to database string is included here
include 'authenticate.php'; //Regex for the fields are included
include 'static_salt.php'; //The static salt is included



	$first_name = mysqli_real_escape_string ($db_Conn_link, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($db_Conn_link, $_POST['last_name']);
	$user_name = mysqli_real_escape_string($db_Conn_link, $_POST['user_name']);
	$password = mysqli_real_escape_string($db_Conn_link, $_POST['password']);
	$confirm_password=mysqli_real_escape_string($db_Conn_link, $_POST['confirm_password']);
	$email = mysqli_real_escape_string($db_Conn_link, $_POST['email']);
	
	
	//Gets the current date
	$regdate = date('Y-m-d', time());
	
	//create new instance (object name)
	$user = new Authentication(); 
	
	//check if user input format is Correct or Not
	
	$user->check_first_name($first_name);
	$user->check_last_name($last_name);
	$user->check_user_name($user_name);
	$user->check_password($password);
	$user->check_confirm_password($password, $confirm_password);
	$user->check_email($email);
	
	
	
	//Insert into MySQL table if checked correctly
	
	
	$query = "SELECT user_name FROM t_customer_info WHERE user_name='".$user_name."' limit 1";
	$check_query = mysqli_query($db_Conn_link, $query);
	
	if (mysqli_fetch_array($check_query, MYSQLI_BOTH))
	{
		echo 'Error: username ', $username, ' already registered. <a href="javascript:history:back(-1);">Back</a>';
		exit();
	}
	
	// get the salt and then generate encrypted password
	$dynamic_salt = $user->getSalt();
	$enc_password = $user->hash_password($password, $static_salt, $dynamic_salt);
	//store username , encrypted password and dynamic salt to user table
	// prepare new user entry for db
	
	$sql = "INSERT INTO t_customer_info (user_name, pass_word, first_name, last_name, e_mail, dynamic_salt) VALUES ('".$user_name."', '".$enc_password."', '".$first_name."', '".$last_name."', '".$email."', '".$dynamic_salt."')";
	
	//$safe = mysqli_real_escape_string($db_Conn_link, $sql);
	$result = mysqli_query($db_Conn_link, $sql);
	if ($result)
	
	{	
	    //echo "Account created successfully!<br />";
		 header( 'Location:http://localhost/sampleworks/New_textile/templates/compl.html' ) ;
	}
	else
	{
		echo 'Sorry, failed to create account!', mysqli_error($db_Conn_link), '<br />';
		echo 'Click here to <a href="javascript:history.back(-1);">Retry</a>.';
	}
?>
