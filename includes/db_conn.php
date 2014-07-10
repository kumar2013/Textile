<?php

/**
 * This file creates connection to MySQL databese.
*/

/*
$db_Server = "localhost";
$db_Username = "root";
$db_Password = "Shoh3huw";
$db_Database = "new_textile";

$db_Conn_link = mysqli_connect($db_Server, $db_Username, $db_Password)
or die("Could not coonect to SQL Server.");
mysqli_select_db($db_Conn_link, $db_Database)
or die("Could not open database.");
*/




class database{

	protected $_link, $_result, $_numRows;
	
	public function __construct($server, $username, $password, $db) {
		$this->_link = mysql_connect($server, $username, $password);
		mysql_select_db($db, $this->_link);
	}

	public function disconnect() {
		mysql_close($this->_link);
	}
	
	public function real_escape_string($input) {
		$real_string = mysql_real_escape_string($input, $this->_link);
		return $real_string;
	}
	
	public function query($sql) {
		$this->_result = mysql_query($sql, $this->_link);
		$this->_numRows = mysql_num_rows($this->_result);
	}
	
	public function numRows() {
		return $this->_numRows;
	}
	
	public function rows() {
		$rows = array();
		for($x =0; $x < $this->numRows(); $x++)
		{
			$rows[] = mysql_fetch_assoc($this->_result);
		}
		return $rows;
	}
}


?>