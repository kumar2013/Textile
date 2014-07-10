<?php

class Authentication 
{
	//Function to verify valid username
	function check_user_name($user_name)
	{
		$minimum_length = 4; //Minimum username length 
		$maximum_length = 45; //Maximum username length
		$user_name_regex = "/^[a-zA-Z0-9_-]+/i"; //Username regEx
		
		if ($user_name == "") // If the Username input is empty
		{
			exit('Error: Username cannot be empty! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (strlen($user_name) < $minimum_length)// when a username input is less than 4 characters
		{
		    exit('Error: Too short User Name length, Minimum Length shall be 4 Characters Long! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (strlen($user_name) > $maximum_length) // when a username input is more than 45 characters
		{
		    exit('Error: Too Large User Name length, Maximum Length shall be 45 Characters Long! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (!preg_match($user_name_regex, $user_name)) 
		{
			exit('Error: Invalid Username! <a href="javascript:history.back(-1);">Back</a>');
		}
		else
		{
		    return true;
		}
	}
	
	//Function to verify valid First Name
	function check_first_name($first_name)
	{
		$minimum_length = 2; //The First Name is designed to have minimumlength of 2 and maximum length of 45 characters 
		$maximum_length = 45; 
		$first_name_regex = "/^[a-zA-Z]+/"; //The First Name is any combination of lower/upper case letters.
		
	       // $result = mysql ("select username where ");
		if ($first_name == "") // If the Username input is empty
		{
			exit('Error: First Name cannot be empty! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (strlen($first_name) < $minimum_length)// when a username input is less than 4 characters
		{
		    exit('Error: Too short User Name length, Minimum Length shall be 4 Characters Long! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (strlen($first_name) > $maximum_length) // when a username input is more than 45 characters
		{
		    exit('Error: Too Large First Name length, Maximum Length shall be 45 Characters Long! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (!preg_match($first_name_regex, $first_name)) 
		{
			exit('Error: Invalid First Name! <a href="javascript:history.back(-1);">Back</a>');
		}
		return true;
	}

	

	//Function to verify last name with any combination of English plus Swedish alphabets
	function check_last_name($last_name)
	{
		$minimum_length = 2; //The First Name is designed to have minimumlength of 2 and maximum length of 45 characters 
		$maximum_length = 45; 
		$last_name_regex = "/^[a-zA-Z]+/"; //The First Name is any combination of lower/upper case letters.
		
	       // $result = mysql ("select username where ");
		if ($last_name == "") // If the Username input is empty
		{
			exit('Error: Username cannot be empty! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (strlen($last_name) < $minimum_length)// when a username input is less than 4 characters
		{
		    exit('Error: Too short Last Name length, Minimum Length shall be 4 Characters Long! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (strlen($last_name) > $maximum_length) // when a username input is more than 45 characters
		{
		    exit('Error: Too Large Last Name length, Maximum Length shall be 45 Characters Long! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if (!preg_match($last_name_regex, $last_name)) 
		{
			exit('Error: Invalid Last Name! <a href="javascript:history.back(-1);">Back</a>');
		}
		return true;
	}
	
	
	//Function to verify Email
	function check_email($email)
	{
		//RegEx for email 
		$email_regex = "/^[a-zA-Z0-9_-]+(.[a-zA-Z0-9]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*$/";	
		if ($email == "")
		{
		    exit('Error: Email cannot be empty! <a href="javascript:history.back(-1);">Back</a>');
		}
		if ((!preg_match($email_regex, $email)))
		{
		    exit('Error: Invalid email format! <a href="javascript:history.back(-1);">Back</a>');
		}
	    
	    return true;
	}
	
	
	//function to hash the user input password
	function hash_password($password, $static_salt, $dynamic_salt)
	{
		$password_length = strlen($password);
		$split_at = $password_length / 2;
		$password_array = str_split($password, $split_at);
		$enc_password = sha1($password_array[0] . $static_salt . $password_array[1] . $dynamic_salt); // sha1 is an encryption standard library function used for encryption 
		return $enc_password;
	}
	
	function check_confrim_password($password, $static_salt, $dynamic_salt)
	{
		$password_length = strlen($password);
		$split_at = $password_length / 2;
		$password_array = str_split($password, $split_at);
		$enc_password = sha1($password_array[0] . $static_salt . $password_array[1] . $dynamic_salt); // sha1 is an encryption standard library function used for encryption 
		return $enc_password;
	}
	
	//Function to verify password
	function check_password($password)
	{
		$minLen = 6;
		$maxLen = 16;
		if ($password == "")
		{
			exit('Error: Password cannot be empty! <a href="javascript:history.back(-1);">Back</a>');
		}
		if (strlen($password) < $minLen)
		{
			exit('Error: Small Password Length! Make it morethan six Characters Long! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		if(strlen($password) > $maxLen)
		{
		    exit('Error: Too big password length, Make it less than 16 Characters Long! <a href="javascript:history.back(-1);">Back</a>');
		}
		
		return true;
	}
	
	//Function to verify confirm password
	function check_confirm_password($password, $confirm_password)
	{
		if ($password != $confirm_password)
		{
			exit('Error: Not same password! <a href="javascript:history.back(-1);">Back</a>');
		}
		else
		{
			return true;
		}
	}
	function getSalt()
	{
		$dynamic_salt = mt_rand();//mt_rand() is a library function used for random number generation
		return $dynamic_salt;
	}
}

?>
