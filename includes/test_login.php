<?php
	
	include 'db_conn.php'; //Connecting to database string is included here
	include 'authenticate.php'; //Regex for the fields are included
	include 'static_salt.php'; //The static salt is included

	//create new db connection
	$db = new database('localhost', 'root', 'Shoh3huw', 'new_textile');

	//checkinh the input using mysqli_real_escape_string
	$user_email = $db->real_escape_string($_POST['inputEmail3']);
	$password = $db->real_escape_string($_POST['inputPassword3']);
	
	//create new instance (object name)
	$user = new Authentication(); 
	
	//check if username conforms to regex
	$user -> check_email($user_email);
	$user -> check_password($password);
	
	$user_login = $db->real_escape_string($user_email);
	$db->query("SELECT user_name, pass_word , dynamic_salt from t_customer_info where e_mail = '".$user_login."'");
	
	if($db->numRows()==0)
	{
		//echo ("<script>alert('Incorrect Username or Password!')</script>");
		exit('Error: Incorrect Username or Password! <a href="javascript:history.back(-1);">Back</a>');
		
	}
	else
	{	
		foreach($db->rows() as $cat)
		{
			//values that you get from the table
			$user_name = $cat['user_name'];
			$enc_password = $cat['pass_word'];
			$dynamic_salt = $cat['dynamic_salt'];
		}
		
		//hash the password from the form with the dynamic salt used during registration.
		$new_enc_password = $user->hash_password($password,$static_salt, $dynamic_salt);
		
		// compare new salted pw with saved salted	
		if($new_enc_password == $enc_password )
		{
			/* then user is authenticated
			 * store the login data in session variabel login to remember
			 * that the user is loged in
			 */
			session_start();
			$_SESSION['user_name'] = $user_name;
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
	}
		
?>
