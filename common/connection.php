<?php
	
	define( 'DB_HOST', 'localhost' );
	
	define( 'DB_USERNAME', 'root');
	
	define( 'DB_PASSWORD', '');
	
	define( 'DB_NAME', 'qatar');
	
	class connection 
	{
		public $mysqli;
	
		public function __construct()
		{
			$this->mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
		}
	}
	
?>