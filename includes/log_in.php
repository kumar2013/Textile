<?php
	
	include 'db_conn.php'; //Connecting to database string is included here
	include 'authenticate.php'; //Regex for the fields are included
	include 'static_salt.php'; //The static salt is included

	$user_email = mysqli_real_escape_string($db_Conn_link, $_POST['inputEmail3']);
	$password = mysqli_real_escape_string ($db_Conn_link, $_POST['inputPassword3']);
	
	//create new instance (object name)
	$user = new Authentication(); 
	
	//check if username conforms to regex
	$user -> check_email($user_email);
	$user -> check_password($password);
	
	//check if user is already registered
	$user_login  = mysqli_real_escape_string($db_Conn_link,$user_email);
	$select = "SELECT user_name, pass_word , dynamic_salt from t_customer_info where e_mail = '".$user_login."'";
	$result = mysqli_query($db_Conn_link, $select);
	
	if(!$result)
	{
		echo ("<script>alert('Incorrect Username or Password!')</script>");
		echo ("<script>location.href('../style/template/login.php')</script>");
	}
	else
	{	
		$row = mysqli_fetch_assoc($result);
 
		//values that you get from the table
		$user_name = $row['user_name'];
		$enc_password = $row['pass_word'];
		$dynamic_salt = $row['dynamic_salt'];
		
		//hash the password from the form with the dynamic salt used during registration.
		$new_enc_password = $user->hash_password($password,$static_salt, $dynamic_salt);
		
		// compare new salted pw with saved salted	
		if($new_enc_password == $enc_password )
		{
			/* then user is authenticated
			 * store the login data in session variable login to remember
			 * that the user is logged in
			*/
			
			session_start();
			//$_SESSION['login'] = true;
			$_SESSION['user_name'] = $user_name;
			//echo $_SESSION['username'].", you successfully logged in.";
			//header("Location: ../index.htm");
			if(isset($_SESSION['url']))
			{
				$url = $_SESSION['url'];
			}
			else
			{
				$url = "../index.htm";
			}
			header("Location: $url");
			exit;
		}
		else
		{
			echo ("<script>alert('Incorrect Password!')</script>");
		}
	}
		
?>
