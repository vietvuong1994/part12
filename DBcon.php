<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'part9_db');

class DB_con
{	
	private $db;
	function __construct()
	{
	  	$dsn = "mysql:host=".DB_SERVER.";dbname=".DB_NAME;
		// Set options
		$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
		// Create a new PDO instanace
		try {
		$this->db = new PDO($dsn, DB_USER, DB_PASS, $options);
		}
		// Catch any errors
		catch (PDOException $e) {
		echo $e->getMessage();
		exit();
		}
	}
	public function select($sql)
	{
		$database = $this->db;
		$stmt = $database->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
		return $resultSet;
	}
}
?>