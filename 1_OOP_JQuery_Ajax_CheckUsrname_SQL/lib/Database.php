<?php 
	$filepath = realpath(dirname(__FILE__));
	include($filepath.'/../config/config.php');

	/**
	 * Database class
	 */
	class Database
	{
		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $dbname = DB_NAME;
		public $error;
		public $link;
		public $db;
		
		function __construct()
		{
			$this->dbconnect();
		}
		function dbconnect(){
			$this->link = new mysqli("$this->host", "$this->user", "$this->pass", "$this->dbname");
			if($this->link){
				echo "Yes conected";
			}else {
				echo "NO connected";
			}
			return;
		}
	}



 ?>