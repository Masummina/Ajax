<?php

include('./lib/Database.php');
	/**
	 * Parents
	 */
	class Project
	{
		protected $db;
		function __construct()
		{
			$this->db = new Database();
		}
	}

?>